require('./bootstrap');

window.Vue = require('vue');

Vue.component('dashboard-component', require('./vue/components/Dashboard.vue').default);
// Vue.component('sponsors-component', require('./vue/views/sponsors/Sponsors.vue').default);
// Vue.component('invoices-component', require('./vue/views/invoices/Invoices.vue').default);
// Vue.component('contracts-component', require('./vue/views/contracts/Contracts.vue').default);
// Vue.component('team-component', require('./vue/views/team/Team.vue').default);
// Vue.component('staff-component', require('./vue/views/staff/Staff.vue'));


import Vue from 'vue';

let Fire = new Vue();
window.Fire = Fire;

import VueRouter from 'vue-router'
import { Form, HasError, AlertError } from 'vform';

Vue.use(VueRouter)

window.Form = Form;
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

import 'chart.js';
import 'hchs-vue-charts';
Vue.use(window.VueCharts);



let routes = [
    { path: '/dashboard', component: require('./vue/components/Dashboard.vue').default },
    { path: '/teams', component: require('./vue/components/Teams.vue').default },
    { path: '/invoice', component: require('./vue/components/Invoice.vue').default },
    { path: '/sponsoring', component: require('./vue/components/Sponsoring.vue').default },
    { path: '/membership', component: require('./vue/components/Membership.vue').default },
    { path: '/contracts', component: require('./vue/components/Contracts.vue').default },
    { path: '/communications', component: require('./vue/components/Communication.vue').default },
    { path: '/users', component: require('./vue/components/Users.vue').default },
    { path: '/statistics', component: require('./vue/components/Statistics.vue').default },
    { path: '/roles', component: require('./vue/components/Roles.vue').default },
    { path: '/permissions', component: require('./vue/components/Permissions.vue').default },
    { path: '/category', component: require('./vue/components/Category.vue').default },
    { path: '/team/:teamId', component: require('./vue/components/Team.vue').default,props: true},
    { path: '/members', component: require('./vue/components/TeamMembers.vue').default },
    { path: '/events', component: require('./vue/components/Events.vue').default },
    { path: '/meetings', component: require('./vue/components/Meetings.vue').default },
    { path: '/trainings', component: require('./vue/components/Trainings.vue').default },
    { path: '/coaches', component: require('./vue/components/Coaches.vue').default },
    { path: '/coach', component: require('./vue/components/Coach.vue').default },
    { path: '/matchdays', component: require('./vue/components/Matchdays.vue').default },
    { path: '/players', component: require('./vue/components/Players.vue').default },
    { path: '/player', component: require('./vue/components/Player.vue').default },
    { path: '/tasks', component: require('./vue/components/Tasks.vue').default },
    { path: '/refrees', component: require('./vue/components/Refrees.vue').default },
    { path: '/fieldwardrobe', component: require('./vue/components/FieldWardrobe.vue').default },


]

const router = new VueRouter({
    routes,
    mode: 'history',
    // linkActiveClass: 'active'
})



import { Datetime } from 'vue-datetime';
import 'vue-datetime/dist/vue-datetime.css'
Vue.component('datetime', Datetime);

import moment from 'moment';
Vue.filter('upText', function(string){
    return string.charAt(0).toUpperCase() + string.slice(1);
});
Vue.filter('regDate', function(created){
    return moment(created).format('MMMM Do YYYY');
});


import VueProgressBar from 'vue-progressbar';
Vue.use(VueProgressBar, {
    color: 'rgb(143, 255, 199)',
    failedColor: 'red',
    height: '10px'
});


import swal from 'sweetalert2';
window.swal = swal;
const toast = swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
});
window.toast = toast;


const app = new Vue({
    el: '#app',
    router,
});