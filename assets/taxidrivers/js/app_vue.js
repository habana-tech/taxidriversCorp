import Vue from 'vue';

new Vue({
    el: '#app',
    methods: {
        blackBtn: function (e) {
            const button = e.target;
            button.classList.toggle('rounded-full')
            console.log(button);
            // console.log('blackBtn');
        }
    }
});
