import Vue from  'vue'
import VueRouter from 'vue-router'
import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css'
Vue.use(Vuetify)
import '@mdi/font/css/materialdesignicons.css'

import Highcharts from "highcharts";
import Stock from "highcharts/modules/stock";
import HighchartsVue from 'highcharts-vue'

Stock(Highcharts);
Vue.use(HighchartsVue)

Highcharts.dateFormats = {
    'a': function(ts) {
        return moment(ts).format('dddd')
    },
    'A': function(ts) {
        return moment(ts).format('dddd')
    },
    'd': function(ts) {
        return moment(ts).format('DD')
    },
    'e': function(ts) {
        return moment(ts).format('D')
    },
    'b': function(ts) {
        return moment(ts).format('MMMM')
    },
    'B': function(ts) {
        return moment(ts).format('MMMM')
    },
    'm': function(ts) {
        return moment(ts).format('MM')
    },
    'y': function(ts) {
        return moment(ts).format('YY')
    },
    'Y': function(ts) {
        return moment(ts).format('YYYY')
    },
    'W': function(ts) {
        return moment(ts).format('ww')
    }
};

import VueApexCharts from 'vue-apexcharts'
Vue.component('apexchart', VueApexCharts)


import Vuesax from 'vuesax'
import 'vuesax/dist/vuesax.css' 
Vue.use(Vuesax)
import dashboard from './components/dashboard'
import tablo_home from './components/tablo/home'
import technical_home from './components/technical/home'
import pl1 from './components/tablo/plugin/pl1'
import pl2 from './components/tablo/plugin/pl2'
import pl3 from './components/tablo/plugin/pl3'


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
            {
                path:'/tablo/pl3',
                name:'pl3',
                component:pl3
            },
        ]},
        {path:'/technical',name:'technical_home',component:technical_home},

    ]
})
const vuetifyOptions = {rtl: true }

const app = new Vue({
    el: '#app',
    components : {dashboard},
    router,
    vuetify: new Vuetify(vuetifyOptions)

})
