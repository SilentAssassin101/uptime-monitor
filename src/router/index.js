import { createWebHistory, createRouter } from 'vue-router'

const routes = [
  // {
  // path: '/',
  // name: 'Home',
  // component: () => import('../views/Home.vue'),
  // },
  // {
  // path: '/about',
  // name: 'About',
  // component: () => import ('../views/About.vue'),
  // },
  {
    path: '/',
    name: 'Home',
    component: () => import('../views/ViewHome.vue'),
  },
  {
    path: '/login',
    name: 'Login',
    component: () => import('../views/LoginView.vue'),
  },
  {
    path: '/register',
    name: 'Register',
    component: () => import('../views/RegisterView.vue'),
  }
]

const router = createRouter({
  history: createWebHistory(),
  routes,
})

export default router
