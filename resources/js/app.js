
require('./bootstrap');

window.Vue = require('vue');

import ExampleComponent from "./components/ExampleComponent";
import ContactUs from "./components/ContactUs";

new Vue({
    el: '#application',
    components: {
        ExampleComponent,
        ContactUs
    }
});
