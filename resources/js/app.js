import Vue from 'vue'
import VueRouter from 'vue-router'
import axios from 'axios'

import App from './App'

import router from './routes'

Vue.use(VueRouter)

Vue.prototype.$http = axios

Vue.prototype.$http.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest'

let token = document.head.querySelector('meta[name="csrf-token"]')

if (token) {
    Vue.prototype.$http.defaults.headers.common['X-CSRF-TOKEN'] = token.content
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token')
}

// Vue.component('example-component', require('./components/ExampleComponent.vue')

const app = new Vue({
    el: '#app',
    components: { App },
    router
})
