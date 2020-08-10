import Vue from 'vue';

import tiltDivider from "./components/layout/tiltDivider";
import airportBtn from "./components/cta/airportBtn";
import customItineraryBtn from "./components/cta/customItineraryBtn";
import locationSelectInput from "./components/cta/locationSelectInput";
import slide from "./components/layout/slide";

Vue.component("tiltDivider", tiltDivider);

new Vue({
    el: '#header',
    methods: {
        blackBtn: function (e) {
            const button = e.target;
            button.classList.toggle('rounded-full');
            console.log(button);
            // console.log('blackBtn');
        }
    }
});

new Vue({
    el: 'section#hero',
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


