window.Vue = require('vue');
import App from './components/App.vue';
import router from './router.js';
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#App',
    router,
    render:h=>h(App)
});