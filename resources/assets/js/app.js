
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./modernizer-custom');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app',
    data: {
        people: [],
        loading: false,
        error: false,
        query: ''
    },
    methods: {
        search: function() {
            // Clear the error message.
            this.error = '';
            // Empty the products array so we can fill it with the new products.
            this.people = [];
            // Set the loading property to true, this will display the "Searching..." button.
            this.loading = true;

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
    }
});

function checkNav() {
	var nav = document.querySelector('.navbar');
    if(window.innerWidth < 768) {
        nav.classList.add('scrolled-down');
    } else {
        if(window.pageYOffset <= 70) {
            if(nav.classList.contains('scrolled-down')){
                nav.classList.add('transitioning');
                window.setTimeout(function() {
                    nav.classList.remove('transitioning');
                    nav.classList.remove('scrolled-down');
                }, 200);
            }
        }
        if(window.pageYOffset > 70){
            if(!nav.classList.contains('scrolled-down')){
                nav.classList.add('scrolled-down', 'transitioning');
                window.setTimeout(function() {
                    nav.classList.remove('transitioning');
                }, 200);
            }
        }
    }

}

(function(){
	checkNav();
	window.addEventListener('scroll', checkNav);
    window.addEventListener('resize', checkNav);
})();




