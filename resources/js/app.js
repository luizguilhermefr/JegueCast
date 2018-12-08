import Vue from 'vue'
import Vuetify from 'vuetify'
import VueRouter from 'vue-router'
import axios from 'axios'
import colors from 'vuetify/es5/util/colors'

import 'vuetify/dist/vuetify.min.css'
import 'material-design-icons-iconfont/dist/material-design-icons.css'

import App from './App'

import router from './routes'

Vue.use(Vuetify, {
  theme: {
    primary: colors.grey.lighten1,
    secondary: colors.grey.darken4,
    accent: colors.red.darken3,
    error: colors.red.accent3
  }
})

Vue.use(VueRouter)

Vue.prototype.$http = axios

Vue.prototype.$http.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest'

Vue.prototype.$http.defaults.headers.common['Accept'] = 'application/json'

// Vue.component('example-component', require('./components/ExampleComponent.vue')

const app = new Vue({
  el: '#app',
  components: {
    App
  },
  router
})
