import Vue from  'vue'
import VueRouter from 'vue-router'

import dashboard from './components/dashboard'
import tablo_home from './components/tablo/home'
import technical_home from './components/technical/home'
import pl1 from './components/tablo/plugin/pl1'
import pl2 from './components/tablo/plugin/pl2'

Vue.use(VueRouter)

const router = new VueRouter({
    mode:'history',
    routes:[
        {path:'/tablo',name:'tablo_home',component:tablo_home,
        children:[
            {
                path:'/tablo/pl1',
                name:'pl1',
                component:pl1
            },
            {
                path:'/tablo/pl2',
                name:'pl2',
                component:pl2
            },
        ]},
        {path:'/technical',name:'technical_home',component:technical_home},

    ]
})

const app = new Vue({
    el: '#app',
    components : {dashboard},
    router
})
