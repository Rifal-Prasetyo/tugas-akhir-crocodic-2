import './bootstrap';
import * as Vue from 'vue';
import '../css/app.css'
import { initFlowbite } from 'flowbite'
import { createRouter, createWebHistory } from 'vue-router';


// import component
import AllProduct from './components/product/AllProductsComponent.vue';
import InformationDashboard from './components/InformationAdminComponent.vue';
import ProductCreate from './components/product/action/CreateProductComponent.vue';
const router  = createRouter({
    history: createWebHistory(),
    routes: [
        {path: '/home', component: InformationDashboard },
        {path: '/home/produk', component: AllProduct },
        {path: '/home/produk/create', component: ProductCreate }
    ]
});

const app = Vue.createApp({});
Vue.onMounted(() => {
    initFlowbite();
})
app.use(router);
app.mount('#app');

// initial components

// mount components
