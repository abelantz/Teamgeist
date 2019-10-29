require('./bootstrap');
window.Vue = require('vue');


Vue.component('clubs-component', require('./vue/views/clubs/Clubs.vue').default);
Vue.component('staff-component', require('./vue/views/staff/Staff.vue'));



const app = new Vue({

    el: '#app',

});
