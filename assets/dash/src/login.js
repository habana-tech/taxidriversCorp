import Vue from "vue";

// styles

import "./assets/styles/tailwind.css";

// mouting point for the whole app

// views for Auth layout

import Auth from "./layouts/Auth.vue";
import Login from "./views/auth/Login.vue";
// app config

    Vue.config.productionTip = false;


    new Vue({
        el: 'div#app',
        methods: {},
        components: {
            'Login': Login,
            'Auth': Auth,
        }
    });
