import Vue from 'vue';
import "tailwindcss/tailwind.css"

import tiltDivider from "./components/layout/tiltDivider";
import airportBtn from "./components/cta/airportBtn";
import customItineraryBtn from "./components/cta/customItineraryBtn";
import locationSelectInput from "./components/cta/locationSelectInput";
import slide from "./components/layout/slide";

Vue.component("tiltDivider", tiltDivider);

new Vue({
    el: '#header',
    methods: {
        navBarCTA: function (e) {
            const button = e.target;
            console.log(button);
            // console.log('blackBtn');
        }
    }
});

new Vue({
    el: 'div#hero',
    methods: {},
    components: {
        'airportBtn': airportBtn,
        'customItineraryBtn': customItineraryBtn,
        'locationSelectInput': locationSelectInput,
        'slide': slide
    }
});

//
new Vue({
    el: 'section#cta-banner',
    methods: {},
    components: {
        'airportBtn': airportBtn,
        'customItineraryBtn': customItineraryBtn
    }
});


