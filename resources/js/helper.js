import Vue from "vue";

String.prototype.ltrim = function(char) {
    return (this.charAt(0) == char) ? this.substr(1) : this;
}

String.prototype.rtrim = function(char) {
    return (this.charAt(this.length - 1) == char) ? this.substr(0, this.length - 1) : this;
}

Vue.mixin({
    methods: {
        link_to: (path) => window.baseURL + path.ltrim('/')
    }
});