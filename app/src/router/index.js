import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView
    },
    {
      path: '/about',
      name: 'about',
      component: () => import('@/views/AboutView.vue')
    },
    {
      path: '/design',
      name: 'design',
      component: () => import('@/views/Design.vue')
    },
    {
      path: '/login',
      name: 'login',
      component: () => import('@/views/Auth/Login.vue')
    },
    {
      path: '/register',
      name: 'register',
      component: () => import('@/views/Auth/Register.vue')
    }
  ]
})

export default router
