
require('./bootstrap');
require('./helper');

window.Vue = require('vue');

import Buefy from 'buefy';
Vue.use(Buefy);


import ContactUs from "./components/ContactUs";
import ToastTest from "./components/ToastTest";
import ModalTest from "./components/ModalTest";

new Vue({
    el: '#application',
    components: {
        ContactUs,
        ModalTest,
        ToastTest
    }
});



require('./validations/text');
require('./validations/phone');
require('./validations/email');

$(document).ready(function() {

    // Check for click events on the navbar burger icon
    $(".navbar-burger").click(function() {
        // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
        $(".navbar-burger").toggleClass("is-active");
        $(".navbar-menu").toggleClass("is-active");
    });

    $('.notification .delete').each(($index, $delete) => {
        let notification = $delete.parentNode;
        $($delete).on('click', function(){
            notification.parentNode.removeChild(notification);
        });
    });

    $(".navbar-link").click(function() {
       $(this).siblings('.navbar-dropdown').fadeToggle(150);
    });

    let width = $(window).width();
    if (width >= 1024){
        $(".navbar-link").siblings('.navbar-dropdown').css('display', '');
    } else {
        $(".navbar-link").siblings('.navbar-dropdown').fadeOut(150);
    }

    $(window).resize(function() {
        let width = $(window).width();
        if (width >= 1024){
            $(".navbar-link").siblings('.navbar-dropdown').css('display', '');
        } else {
            $(".navbar-link").siblings('.navbar-dropdown').fadeOut(150);
        }
    });

});

