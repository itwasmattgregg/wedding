<style scoped>
    .item button {
        border-radius: 0;
        width: 100%;
        padding: 10px 5px;
        background-color: #fff;
        text-align: left;
        border-bottom: 1px solid #AD9F93;
    }
    .item button:hover {
        color: #64313E;
    }

    .modal-footer .btn-success {
        width: 136.92px;
    }


</style>
<style>
    .fade-enter-active {
        transition: opacity 1s
    }
    .fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
        opacity: 0
    }
    .modal-footer .btn .success {
        background-color: #5cb85c;
    }
</style>

<template>
    <div class="modal fade" id="rsvpModal" tabindex="-1" role="dialog" aria-labelledby="rsvpModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="rsvpModalLabel">RSVP<br><small v-show="detailView">Update any information and click save at the bottom.</small></h4>
            </div>
            <div class="modal-body">
                <template v-if="!detailView">
                    <form action="#" @submit.prevent="search()">
                        <div class="form-group">
                            <div class="input-group input-group-md">
                                <div class="icon-addon addon-md">
                                    <label class="sr-only" for="name-search">Search your name</label>
                                    <input type="text" id="name-search" placeholder="Enter your name here..." class="form-control" v-model="query">
                                </div>
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button" @click="search()" v-if="!loading">Search</button>
                                    <button class="btn btn-default" type="button" disabled="disabled" v-if="loading">Searching...</button>
                                </span>
                            </div>
                            <div id="people" class="list-group">
                                <div class="item" v-for="person in people" :key="person.id" >
                                    <button class="btn" @click="select(person.id)">{{ person.first_guest }} <span v-if="person.second_guest">&amp; {{ person.second_guest }}</span></button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="alert alert-danger" role="alert" v-if="error">
                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                        {{ error }}
                    </div>

                </template>
                <template v-if="loadingDetail">
                    <span>Loading</span>
                </template>
                <template v-if="detailView && !loadingDetail">
                    <form>
                        <div class="row">
                            <div class="form-group floating-label-form-group col-sm-12">
                                <label for="first-guest">First Guest (Full Name)</label>
                                <input id="first-guest" type="text" class="form-control" placeholder="Name" v-model="person.first_guest">
                            </div>
                        </div>
                        <template v-if="person.second_guest != null">
                        <div class="row">
                            <div class="form-group floating-label-form-group col-sm-12">
                                <label for="second-guest">Second Guest (Full Name)</label>
                                <input id="second-guest" type="text" class="form-control" placeholder="Name" v-model="person.second_guest">
                            </div>
                        </div>
                        </template>
                        <template v-if="person.extra_people != null">
                        <div class="extra" v-for="(extra, key) in person.extra_people" :key="extra.id" >
                            <div class="form-group">
                                <label :for="'guest-' + key + 1">Extra Guest #{{ key + 1 }}</label>
                                <input type="text" :id="'guest-' + key + 1" class="form-control" placeholder="Name" v-model="extra.name">
                            </div>
                        </div>
                        <div class="m-y-sm">
                            <button type="button" class="btn btn-default" @click="addAnother()">Add another guest?</button>
                        </div>
                        </template>
                        <div class="row">
                            <div class="form-group floating-label-form-group col-sm-6">
                                <label for="email">Contact Email</label>
                                <input id="email" type="text" class="form-control" placeholder="Email" v-model="person.email">
                            </div>
                            <div class="form-group floating-label-form-group col-sm-6">
                                <label for="rsvp-response">*Response</label>
                                <select id="rsvp-response" class="form-control" @change="responded = true" v-model="person.rsvp">
                                    <option disabled v-bind:value="null">Select One</option>
                                    <option v-bind:value="true">Attending</option>
                                    <option v-bind:value="false">Regretfully Decline</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group floating-label-form-group col-sm-12">
                                <label for="notes">Special Considerations</label>
                                <textarea id="notes" class="form-control" placeholder="Any special considerations or notes for us?" v-model="person.special"></textarea>
                            </div>
                        </div>
                    </form>
                </template>
            </div>
            <transition name="fade">
                <div class="modal-footer" v-if="detailView && !loadingDetail">
                    <div v-if="saved" class="text-left">
                        <p>Your RSVP has been submitted! You can close this box.</p>
                    </div>
                    <button class="btn-link btn pull-left text-taupe" @click="cancel()">Not you?</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" @click="submit()" :disabled="!responded" v-show="!submitSuccess && !submitError">Save changes</button>
                    <button type="button" class="btn btn-success" disabled v-show="submitSuccess">Saved!</button>
                    <button type="button" class="btn btn-error" disabled v-show="submitError">Something Went Wrong, Try Again</button>
                </div>
            </transition>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            let storedPerson = localStorage.getItem('selectedPerson');

            if(storedPerson) {
                this.$http.get('/api/person/' + storedPerson).then((response) => {
                    response.body.error ? this.error = response.body.error : this.person = response.body;
                    this.detailView = true;
                    if(this.person.rsvp != null) {
                        this.responded = true;
                    }
                })
            }

            $('#rsvpModal').on('shown.bs.modal', function () {
                $('#name-search').focus();
            });
        },
        data: function() {
            return {
                people: [],
                loading: false,
                loadingDetail: false,
                error: false,
                responded: false,
                submitSuccess: false,
                saved: false,
                submitError: false,
                query: '',
                detailView: false,
                person: {},
            }
        },
        methods: {
            search: function() {
                // Clear the error message.
                this.error = '';
                // Empty the products array so we can fill it with the new products.
                this.people = [];
                // Set the loading property to true, this will display the "Searching..." button.
                this.loading = true;

                if(this.query.length < 5) {
                    this.error = 'Please enter more characters into your search.';
                    this.loading = false;
                }
                else {
                    // Making a get request to our API and passing the query to it.
                    this.$http.get('/api/search?q=' + this.query).then((response) => {
                        // If there was an error set the error message, if not fill the products array.
                        response.body.error ? this.error = response.body.error : this.people = response.body;
                        // The request is finished, change the loading to false again.
                        this.loading = false;
                        // Clear the query.
                        this.query = '';
                    });
                }
            },
            select: function(id) {
                this.detailView = true;
                this.loadingDetail = true;

                localStorage.setItem('selectedPerson', id);

                this.$http.get('/api/person/' + id).then((response) => {
                    response.body.error ? this.error = response.body.error : this.person = response.body;
                    this.loadingDetail = false;
                })
            },
            cancel: function() {
                this.detailView = false;
                this.person = {};
                this.people = [];
                this.error = '';
                localStorage.removeItem('selectedPerson');
            },
            addAnother: function() {
                if(this.person.extra_people == null){
                    this.person.extra_people = [{name: ''}];
                } else {
                    this.person.extra_people.push({name: ''});
                }
            },
            submit: function () {
                this.submitSuccess = true;
                this.$http.patch('api/person/' + this.person.id, this.person).then((response) => {
                    if(response.body.error) {
                        this.submitSuccess = false;
                        this.submitError = true;
                    } else {
                        this.submitError = false;
                        this.saved = true;
                        setTimeout(() => {
                            this.submitSuccess = false;
                        }, 1000);
                    }
                });
            }
        }
    }
</script>
