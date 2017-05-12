
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});

window.addEventListener('scroll', function() {
	if(document.body.scrollTop <= 0) {
		document.querySelector('.navbar .background').style.height = "0px";
	}
	if(document.body.scrollTop > 0 && document.body.scrollTop < 70){
		document.querySelector('.navbar .background').classList.remove('open');
		document.querySelector('.navbar .background').style.height = document.body.scrollTop + "px";
	} if (document.body.scrollTop >= 70) {
		document.querySelector('.navbar .background').classList.add('open');
	}
});

var elem = document.querySelector('.grid');
var msnry = new Masonry( elem, {
  // options
  itemSelector: '.grid-item',
  columnWidth: 200,
  gutter: 10
});
// layout Masonry after each image loads
imagesLoaded( msnry, function() {
	msnry.layout();
} )

