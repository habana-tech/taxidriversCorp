import Vue from 'vue';
import "tailwindcss/tailwind.css"

import airportBtn from "./components/cta/airportBtn";
import customItineraryBtn from "./components/cta/customItineraryBtn";
import headerMenu from "./components/layout/headerMenu"


new Vue({
    el: '#header',
    methods: {
        navBarCTA: function (e) {
            const button = e.target;
            console.log(button);
            // console.log('blackBtn');
        }
    },
    components: {
        'headerMenu': headerMenu,
    }
});

new Vue({
    el: 'section#cta-banner',
    methods: {},
    components: {
        'airportBtn': airportBtn,
        'customItineraryBtn': customItineraryBtn
    }
});


