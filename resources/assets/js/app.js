import Vue from 'vue';
import VueRouter from 'vue-router';
import App from './App.vue';
import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';

Vue.use(VueRouter);
Vue.use(ElementUI);

import Post from './components/post/Post.vue';
import Blog from './components/post/Index.vue';
import Login from './components/login/login.vue';

const routes = [
    {
        path: '/post',
        component: Post,
    },
    {
        path: '/home',
        component: Login
    },
    {
        path: '/',
        component: Blog
    },
    {
        path: '/dekus',
        component: Blog
    }
];

const router = new VueRouter({
    mode: 'history',
    routes
});

const app = new Vue({
    el: '#app',
    template: '<App/>',
    router,
    components: { App }
});