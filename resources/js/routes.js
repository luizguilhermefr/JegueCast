import VueRouter from 'vue-router'

import Login from './views/Login'
import Home from './views/Home'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home,
            meta: {
                auth: true
            }
        },
        {
            path: '/login',
            name: 'login',
            component: Login,
            meta: {
                guest: true
            }
        }
    ]
})

router.beforeEach((to, from, next) => {
    const logged = false
    const isAuthRoute = to.matched.some(record => record.meta.auth)
    const isGuestRoute = to.matched.some(record => record.meta.guest)
    if (logged) {
        if (isGuestRoute) {
            next({
                name: 'home',
                query: {
                    redirect: to.fullPath
                }
            })
        }
    } else {
        if (isAuthRoute) {
            next({
                name: 'login',
                query: {
                    redirect: to.fullPath
                }
            })
        }
    }
    next()
})

export default router
