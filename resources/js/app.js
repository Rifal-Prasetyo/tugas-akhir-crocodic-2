import './bootstrap';
import * as Vue from 'vue';
import { createRouter, createWebHistory } from 'vue-router';


// import component
import AllProduct from './components/product/AllProductsComponent.vue';
import InformationDashboard from './components/InformationAdminComponent.vue';
const router  = createRouter({
    history: createWebHistory(),
    routes: [
        {path: '/home', component: InformationDashboard },
        {path: '/home/produk', component: AllProduct }
    ]
});

const app = Vue.createApp({});
app.use(router);
app.mount('#app');

// initial components

// mount components
