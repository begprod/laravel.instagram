require('./bootstrap');

window.Vue = require('vue');

Vue.component('FollowButton', require('./components/FollowButton').default);

const app = new Vue({
   el: '#app'
});
