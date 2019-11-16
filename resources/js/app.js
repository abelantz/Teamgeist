import Vue from 'vue';
import VueRouter from 'vue-router'
import { Form, HasError, AlertError } from 'vform';
import bootstrap from 'bootstrap';
window.axios = require('axios')
import Popper from 'popper.js';
import jQuery from 'jquery';
window.jQuery = window.$ = jQuery;
import swal from 'sweetalert2';
import VueProgressBar from 'vue-progressbar';
import fontawesome from '@fortawesome/fontawesome-free';
import routes from './vue/routes';
import moment from 'moment';
require('admin-lte');

let Fire = new Vue();
window.Fire = Fire;
window.Form = Form;

Vue.use(VueRouter);
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

Vue.filter('upText', function(string){
    return string.charAt(0).toUpperCase() + string.slice(1);
});

Vue.filter('regDate', function(created){
    return moment(created).format('MMMM Do YYYY');
});

Vue.use(VueProgressBar, {
    color: 'rgb(143, 255, 199)',
    failedColor: 'red',
    height: '10px'
});

const router = new VueRouter({
    routes,
    mode: 'history',
    linkActiveClass: 'active'
});

const toast = swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
});

const app = new Vue({
    el: '#app',
    router,
});

Vue.component('dashboard-component', require('./vue/components/Dashboard.vue').default);
// Vue.component('sponsors-component', require('./vue/views/sponsors/Sponsors.vue').default);
// Vue.component('invoices-component', require('./vue/views/invoices/Invoices.vue').default);
// Vue.component('contracts-component', require('./vue/views/contracts/Contracts.vue').default);
// Vue.component('team-component', require('./vue/views/team/Team.vue').default);
// Vue.component('staff-component', require('./vue/views/staff/Staff.vue'));


