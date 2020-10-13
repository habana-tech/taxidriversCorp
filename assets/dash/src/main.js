import Vue from "vue";
import VueRouter from "vue-router";

// styles

import "@fortawesome/fontawesome-free/css/all.min.css";
import "./assets/styles/tailwind.css";

// mouting point for the whole app

import App from "./App.vue";

// layouts

import Admin from "./layouts/Admin.vue";

// views for Admin layout

import Dashboard from "./views/admin/Dashboard.vue";
import Settings from "./views/admin/Settings.vue";
import Tables from "./views/admin/Tables.vue";
import Maps from "./views/admin/Maps.vue";
import Places from "./views/admin/Places.vue";

// views without layouts

import Profile from "./views/Profile.vue";

// routes

const routes = [
  {
        path: "/",
        redirect: "/dashboard",
        component: Admin,
        children: [
        {
            path: "/dashboard",
            component: Dashboard,
        },
        {
            path: "/settings",
            component: Settings,
        },
        {
            path: "/tables",
            component: Tables,
        },
        {
            path: "/maps",
            component: Maps,
        },
        ],
    },

    {
        path: "/",
        redirect: "/services",
        component: Admin,
        children: [
            {
                path: "/places",
                component: Places,
            },

        ],
    },
    {
        path: "/profile",
        component: Profile,
    },
    { path: "*", redirect: "/" },
    ];

// app config

    Vue.config.productionTip = false;

    Vue.use(VueRouter);

    const router = new VueRouter({
        routes,
    });

    new Vue({
        router,
        render: (h) => h(App),
    }).$mount("#app");
