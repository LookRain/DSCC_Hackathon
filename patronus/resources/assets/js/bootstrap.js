
window._ = require('lodash');
import Vue from 'vue';
window.Vue = Vue;
import axios from 'axios';
window.axios = axios;


// import VueRouter from 'vue-router';
// Vue.use(VueRouter);

// import SF from './components/SF.js';


// global.$ = global.jQuery = require('jquery');
try {
    window.$ = window.jQuery = require('jquery');
    require('bootstrap-sass');
} catch (e) {}


window.axios.defaults.headers.common['X-CSRF-TOKEN'] = window.Laravel.csrfToken;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

