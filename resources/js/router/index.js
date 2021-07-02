import { createWebHistory, createRouter } from "vue-router";

import Home from '../pages/Home';

export const routes = [
    {
        name: 'home',
        path: '/',
        component: Home
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes: routes,
});

export default router;
