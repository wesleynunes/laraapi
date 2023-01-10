require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue';
import router from './routes/routers'
import store from './vuex/store'

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.component('admin-component', require('./components/admin/AdminComponent').default);
Vue.component('preloader-component', require('./components/layouts/PreloaderComponent').default);

const app = new Vue({
    router,
    store,
    el: '#app',
});
