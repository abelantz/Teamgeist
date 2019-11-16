require('bootstrap');
require('@fortawesome/fontawesome-free');
window.Vue = require('vue');
window.axios = require('axios');
window.Popper = require('popper.js').default;
window.$ = window.jQuery = require('jquery');
window.swal = require('sweetalert2');
window.VueProgressBar = require('vue-progressbar');
window.moment = require('moment');
window.VueRouter = require('vue-router');
window.Form = window.HasError = window.AlertError = require('vform');
window.routes = require('./vue/routes').default;
require('admin-lte');


//Axios prefs
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
let token = document.head.querySelector('meta[name="csrf-token"]');
if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}
