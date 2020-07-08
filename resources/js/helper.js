import Vue from "vue";

String.prototype.ltrim = function(char) {
    return (strValue.charAt(0) == char) ? strValue.substr(1) : strValue;
}

String.prototype.rtrim = function(char) {
    return (strValue.charAt(strValue.length - 1) == char) ? strValue = strValue.substr(0, strValue.length - 1) : strValue;
}

Vue.mixin({
    methods: {
        link_to: (path) => window.baseURL + '/' + path.ltrim('/')
    }
});