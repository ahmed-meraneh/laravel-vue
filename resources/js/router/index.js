import {createRouter, createWebHistory} from "vue-router";
import RegisterView from '../components/RegisterView.vue'
import LoginView from '../components/LoginView.vue'

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes: [
        {
            path: '/',
            name: 'register',
            component: RegisterView
        },
        {
            path: '/login',
            name: 'login',
            component: LoginView
        }
    ]
})

export default router;
