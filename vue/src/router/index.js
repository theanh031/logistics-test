import { createRouter, createWebHistory } from "vue-router";
import Dashboard from "../pages/Dashboard.vue"
import Orders from "../pages/Orders.vue"
import AddOrder from "../pages/AddOrder.vue"
import DefaultLayout from "../layouts/DefaultLayout.vue"

const routes = [
    {
        path: "/",
        redirect: "/dashboard",
        name: "Dashboard",
        component: DefaultLayout,
        children: [
            {path: "/dashboard", name: 'Dashboard', component: Dashboard},
            {path: "/orders", name: 'Orders', component: Orders}
        ]
    },
]

const router = createRouter({
    history: createWebHistory(),
    routes
})





export default router