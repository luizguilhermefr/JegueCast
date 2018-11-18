import Vue from 'vue'
import Vuetify from 'vuetify'
import VueRouter from 'vue-router'
import axios from 'axios'

import 'vuetify/dist/vuetify.min.css'
import 'material-design-icons-iconfont/dist/material-design-icons.css'

import App from './App'

import router from './routes'

Vue.use(Vuetify)
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
    components: {
        App
    },
    router
})
