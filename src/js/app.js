global.$ = global.JQuery = require("jquery");

import Alpine from "alpinejs";
window.Alpine = Alpine;
Alpine.start();

$(document).ready(function(){
    alert('Hallo');

    $('.partial-content').css('color', 'red');
});