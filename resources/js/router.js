
import { createWebHistory, createRouter } from "vue-router";

import Dashboards from './components/Page/Dashboard/Index.vue'
import Usuarios from './components/Page/Usuarios/Index.vue'
import Cursos from './components/Page/Cursos/Index.vue'
import Clientes from './components/Page/Clientes/Index.vue'

const routes = [

    {
        path: '/',
        name: 'Dashboards',
        component: Dashboards
    },
    {
        path: '/usuarios',
        name: 'usuarios',
        component: Usuarios
    },
    {
        path: '/cursos',
        name: 'cursos',
        component: Cursos
    },
    {
        path: '/clientes',
        name: 'clientes',
        component: Clientes
    },


];

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router;
