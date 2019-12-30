import './bootstrap';
import router from './vue/router';
import { store } from './vue/store';

export default new Vue({
    el: '#app',
    store: store,
    router: router,
});
