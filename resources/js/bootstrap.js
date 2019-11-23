//bootstrap
require('bootstrap');

//VueJS
window.Vue = require('vue');

//Axios
window.axios = require('axios');

//PopperJS
window.Popper = require('popper.js').default;

//jQuery
window.$ = window.jQuery = require('jquery');

//admin-lte
require('admin-lte');

//Fontawesome
require('@fortawesome/fontawesome-free');

//Axios prefs
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
let token = document.head.querySelector('meta[name="csrf-token"]');
if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}