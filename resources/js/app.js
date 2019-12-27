import './bootstrap';
import router from './vue/router';
import { store } from './vue/store';





new Vue({
    el: '#app',
    store: store,
    router: router,
});
