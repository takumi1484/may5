import VueRouter from 'vue-router'
import Vue from 'vue'

Vue.use(VueRouter)

export default new VueRouter({
    mode: 'history',
    routes: [
        { path: '/ex', component: require('./components/ExampleComponent') },//一応".vue"までつけるべき。なぜかExampleComponentは拡張子なしで通る。階層の問題か？
        { path: '/machine', component: require('./components/machine/machine.vue') },
        { path: '/shop', component: require('./components/shop/shop.vue') },
        { path: '/music', component: require('./components/music/music.vue') },
        { path: '/about', component: require('./components/about/about.vue') },
    ],
    scrollBehavior (to, from, savedPosition) {
        if (savedPosition) {
            return savedPosition
        } else {
            return { x: 0, y: 0 }
        }
    },
})