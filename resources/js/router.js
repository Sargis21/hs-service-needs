import VueRouter from 'vue-router';
import Vue from 'vue';

Vue.use(VueRouter);

import Services from './components/Services';
import Index from './components/Index';
import About from './components/About';
import Contact from './components/Contact';

const routes = [{
        path: "/",
        component: Index
    },
    {
        path: "/about",
        component: About
    },
    {
        path: "/services",
        component: Services
    },
    {
        path: "/contact",
        component: Contact
    }
]

export default new VueRouter({
    mode: "history",
    routes
});