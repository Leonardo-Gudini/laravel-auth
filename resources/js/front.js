window.Vue - require('vue');

import App from '.views/App';
import Vue from 'vue';

const app = new Vue({
    el: '#root',
    render: h => h(App)
});
