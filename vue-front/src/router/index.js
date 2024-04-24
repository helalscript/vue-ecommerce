import { createRouter, createWebHistory } from 'vue-router'
import AdminMainLayout from '@/admin-panel/views/MainLayout.vue'
import AdminDashboard from '@/admin-panel/views/Dashboard.vue'
import AdminForms from '@/admin-panel/views/Forms.vue'
import ContactUs from '@/admin-panel/views/ContactUs.vue'
import Products from '@/admin-panel/views/Products.vue'
import FrontMainLayout from '@/front-panel/views/MainLayout.vue'
import Product from '@/front-panel/views/Product.vue'
import FrontPage from '@/front-panel/views/FrontPage.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/admin',
      name: 'admin',
      component: AdminMainLayout,
      children: [
        {
          path: '',
          name: 'dashboard',
          component: AdminDashboard,
        },
        {
          path: 'forms',
          name: 'adminforms',
          component: AdminForms,
        },
        {
          path: 'contact',
          name: 'contactus',
          component: ContactUs,
        },
        {
          path: 'product',
          name: 'products',
          component: Products,
        },
      ],
    },
    {
      path: '/',
      name: 'h',
      component: FrontMainLayout,
      children: [
        {
          path: '',
          name: 'home',
          component: FrontPage,
        },
        {
          path: 'products',
          name: 'products',
          component: Product,
        },
      ],
    }
  ]
})

export default router
