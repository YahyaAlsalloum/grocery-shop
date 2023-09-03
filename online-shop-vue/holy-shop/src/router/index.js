import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import about from '../views/about.vue'
import admin_page from '../views/admin/admin_page.vue'
import show_page from '../views/customer/show_page.vue'
import cart_page from '../views/customer/cart_page.vue'
import login_page from '../views/Auth/login_page.vue'
import signUp_page from '../views/Auth/signUp_page.vue'

const routes = [
  {
    path: '/',
    name: 'home',
    component: HomeView
  },
  {
    path: '/about',
    name: 'about',
    component: about
  },
  {
    path: '/admin_page',
    name: 'admin_page',
    component: admin_page
  },
  {
    path: '/show_page',
    name: 'show_page',
    component:show_page
  },
  {
    path: '/cart_page',
    name: 'cart_page',
    component: cart_page
  },
  {
    path: '/login_page',
    name: 'login_page',
    component:login_page
  },
  {
    path: '/signUp_page',
    name: 'signUp_page',
    component: signUp_page
  },


]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
