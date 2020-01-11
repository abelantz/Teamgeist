import Vue from 'vue';
import Vuex from 'vuex';
import VueProgressBar from 'vue-progressbar';
import { Form, HasError, AlertError } from 'vform';
import { Datetime } from 'vue-datetime';
import moment from 'moment';
import swal from 'sweetalert2';
import axios from 'axios';
import Popper from 'popper.js';
import jquery from 'jquery';
import 'chart.js';
import 'hchs-vue-charts';
import 'vue-datetime/dist/vue-datetime.css'
import 'bootstrap';
import '@fortawesome/fontawesome-free';
import app from './app';

const toast = swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
});

window.Vue = Vue;
window.swal = swal;
window.toast = toast;
window.axios = axios;
window.Popper = Popper;
window.$ = window.jQuery = jquery;
window.Form = Form;
window.Vuex = Vuex
window.$Progress = VueProgressBar

require('admin-lte');

Vue.use(Vuex)
Vue.use(window.VueCharts);
Vue.use(VueProgressBar, {
    color: 'rgb(143, 255, 199)',
    failedColor: 'red',
    height: '10px'
});
Vue.component(HasError.name, HasError);
Vue.component(AlertError.name, AlertError);
Vue.component('datetime', Datetime);

Vue.filter('upText', function(string){
    return string.charAt(0).toUpperCase() + string.slice(1);
});
Vue.filter('regDate', function(created){
    return moment(created).format('Do MMMM YYYY');
});
Vue.filter('timeFormat', function(value){
    return moment(value).format('HH:mm');
});
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
window.axios.defaults.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]');

axios.interceptors.request.use((config) => {
    if(config.method == 'post' || config.method == 'put' || config.method == 'delete') {
        app.$Progress.start();
    }
    return config;
}, (error) => {
    return Promise.reject(error);
});

window.axios.interceptors.response.use((response) => {
    if(response.status == 200) {
        app.$Progress.finish();
    }
    if(response.status == 201 || response.status == 204) {
        app.$Progress.finish();
        toast.fire({
            type: 'success',
            title: 'Success'
        });
    }
    
    return response;
}, (error) => {
    return Promise.reject(error.message);
});