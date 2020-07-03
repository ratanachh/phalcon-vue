
require('./bootstrap');

window.Vue = require('vue');

import ContactUs from "./components/ContactUs";

new Vue({
    el: '#application',
    components: {
        ContactUs
    }
});

$(document).ready(function() {

    // Check for click events on the navbar burger icon
    $(".navbar-burger").click(function() {
  
        // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
        $(".navbar-burger").toggleClass("is-active");
        $(".navbar-menu").toggleClass("is-active");
  
    });
});
