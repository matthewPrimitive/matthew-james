window.axios = require('axios');
window.fuse = require('fuse.js');
window.Vue = require('vue');

// Lazyload
import LazyLoad from "vanilla-lazyload";

// Primitive Vue Components
import Search from './components/Search.vue';
import PrimitiveForm from './components/PrimitiveForm.vue';
import HomeHero from './components/HomeHero.vue';

import AOS from 'aos';
import 'aos/dist/aos.css'; // You can also use <link> for styles

const lazyLoadInstance = new LazyLoad({
    elements_selector: ".lazy"
});

new Vue({
    components: {
        Search,
        PrimitiveForm,
        HomeHero
    },
}).$mount('#app');


//solutions tabs
var $menuTab = $('.js-origin__head__tab');
var $menuContent = $('.js-origin__tab');
var $mobNavItem = $('.mobile-nav a');

$menuTab.click(function () {
    var tab_id = $(this).attr('data-item');
    $menuTab.removeClass('active');
    $menuContent.removeClass('active');
    $(this).addClass('active');
    $("#" + tab_id).addClass('active');
});

$(window).on('load', function () {
    AOS.refresh();
});
$(document).ready(function () {
    AOS.init();
});
    