
require('./bootstrap');

window.Vue = require('vue');

import ExampleComponent from "./components/ExampleComponent";

new Vue({
    el: '#application',
    components: {
        'example-component': ExampleComponent
    }
});
