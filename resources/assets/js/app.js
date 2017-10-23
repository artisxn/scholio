/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Event = new Vue();

Vue.prototype.lang = (key) => {
    return _.get(window.lang, key, key);
};


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('notifications', require('./components/Notifications.vue'));
Vue.component('notifications-table', require('./components/Notifications-Table.vue'));
Vue.component('scholarships-create', require('./components/schools/Scholarships-Create.vue'));
Vue.component('users-table', require('./components/Users-Table.vue'));
Vue.component('schools-table', require('./components/schools/Schools-Table.vue'));
Vue.component('scholarships-view', require('./components/schools/Scholarships-View.vue'));
Vue.component('students-view', require('./components/schools/Students-View.vue'));
Vue.component('teachers-view', require('./components/schools/Teachers-View.vue'));
Vue.component('resource-requests', require('./components/schools/Resource-Requests.vue'));
Vue.component('studies-select', require('./components/schools/Studies-Select.vue'));
Vue.component('my-schools', require('./components/students/My-Schools.vue'));
Vue.component('reviews-create', require('./components/schools/Reviews-Create.vue'));
Vue.component('scholarship-request', require('./components/schools/Scholarship-Request.vue'));
Vue.component('schools-reviews', require('./components/schools/Schools-Review.vue'));
Vue.component('paginator', require('./components/Paginator.vue'));
// Vue.component('chart-vue', require('./VueChart.vue'));


/*
 *  Laravel Passport Components
 */
Vue.component('passport-clients', require('./components/passport/Clients.vue'));

Vue.component('passport-authorized-clients', require('./components/passport/AuthorizedClients.vue'));

Vue.component('passport-personal-access-tokens', require('./components/passport/PersonalAccessTokens.vue'));


const app = new Vue({
    el: '#app'
});


