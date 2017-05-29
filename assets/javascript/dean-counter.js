/*
Author: Oludotun Longe
*/

$(function(){
var data = [];var a = 0;//initialize the counter to start from zerovar b = 0;var deansecond = 1 * 100^-100^100
function count(){if($(".decent").data('format') == 'percentage'){setTimeout(function(){$('.decent' + "  h4").text(a+"%");a++;
if(a <= $(".decent" ).data('number') ){
count();}}, 20);}if($(".decent").data('format') == 'plain'){setTimeout(function(){$('.decent' + "  h4").text(a);a++;
if(a <= $(".decent").data('number') ){count();}}, 20);}}function count2(){if($(".super-fast").data('format') == 'percentage'){
setTimeout(function(){
$('.super-fast' + "  h4").text(b + "%");
if($(".super-fast").data('number') > 1000){b=b+80;}
if($(".super-fast").data('number') > 100 && $(".super-fast").data('number') < 1000){b=b+40;}
if($(".super-fast").data('number') < 100){b++;}if(b <= $(".super-fast").data('number') ){if($(".super-fast").data('number') > 100){if($(".super-fast").data('number') - b < 100){b = $(".super-fast").data('number');}}count2();}},deansecond);}
if($(".super-fast").data('format') == 'plain'){setTimeout(function(){$('.super-fast' + "  h4").text(b);if($(".super-fast").data('number') > 1000){b=b+80;}if($(".super-fast").data('number') > 100 && $(".super-fast").data('number') < 1000){b=b+25; }if($(".super-fast").data('number') < 100){ b++;}if(b <= $(".super-fast").data('number') ){if($(".super-fast").data('number') > 100){if($(".super-fast").data('number') - b < 100){b = $(".super-fast").data('number');}}count2();}},deansecond);}}count();count2();});
