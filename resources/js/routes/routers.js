import Vue from 'vue'
import VueRouter from 'vue-router'

import CategoriesComponent from '../components/admin/pages/categories/CategoriesComponent'
import DashboardComponent from '../components/admin/pages/dashboard/DashboardComponent'

Vue.use(VueRouter)

const routes = [
    {path: '/categories', component: CategoriesComponent, name: 'admin.categories'},
    {path: '/', component: DashboardComponent, name: 'admin.dashboard'}
]

const router = new VueRouter({
    routes
})

export default router