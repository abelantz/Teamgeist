require('./bootstrap');
window.Vue = require('vue');


Vue.component('teams-component', require('./vue/views/teams/Teams.vue').default);
Vue.component('sponsors-component', require('./vue/views/sponsors/Sponsors.vue').default);
Vue.component('invoices-component', require('./vue/views/invoices/Invoices.vue').default);
Vue.component('contracts-component', require('./vue/views/contracts/Contracts.vue').default);


// Vue.component('staff-component', require('./vue/views/staff/Staff.vue'));



const app = new Vue({

    el: '#app',

});
