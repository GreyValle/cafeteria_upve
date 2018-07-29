
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('my-roles-component', require('./components/roles/MyRolesComponent.vue'));
Vue.component('form-roles-component', require('./components/roles/FormComponent.vue'));
Vue.component('rol-component', require('./components/roles/RolesComponent.vue'));
Vue.component('products-component', require('./components/products/ProductsComponent.vue'));
Vue.component('product-card-component', require('./components/products/ProductCardComponent.vue'));
Vue.component('material-transition-group', require('./components/animations/MaterialCollectionComponent.vue'));

const app = new Vue({
    el: '#app'
});
