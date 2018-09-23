require('./bootstrap');
window.Vue = require('vue');

import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)

let Mymenu = require('./components/core/Mymenu.vue');
let Mynav = require('./components/core/Mynav.vue');
let Myfooter = require('./components/core/Myfooter.vue');

let Dashboard = require('./components/Dashboard.vue');
let Profile = require('./components/Profile.vue');
let Kategoridokter = require('./components/Kategoridokter.vue');
let Jadwaldokter = require('./components/Jadwaldokter.vue');
let Kategorilayanan = require('./components/Kategorilayanan.vue');
let Layanan = require('./components/Layanan.vue');
let Kategoriinformasi = require('./components/Kategoriinformasi.vue');
let Informasi = require('./components/Informasi.vue');


const routes = [
  { path: '/admin', component: Dashboard },
  { path: '/admin/profile', component: Profile },
  { path: '/admin/kategori-layanan', component: Kategorilayanan },
  { path: '/admin/layanan', component: Layanan },
  { path: '/admin/kategori-dokter', component: Kategoridokter },
  { path: '/admin/jadwal-dokter', component: Jadwaldokter },
  { path: '/admin/kategori-informasi', component: Kategoriinformasi },
  { path: '/admin/informasi', component: Informasi }
  
]

const router = new VueRouter({
  base : '/',
  mode: 'history',
  routes
})

const app = new Vue({
    el: '#app',
    router,
    components:{Mynav,Myfooter,Mymenu}
});