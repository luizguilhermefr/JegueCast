import VueRouter from 'vue-router'

import Home from './views/Home'

export default new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        }
    ]
})
