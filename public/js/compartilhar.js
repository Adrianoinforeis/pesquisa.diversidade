$(document).ready(function() {
    $(".compartilhar i").click(function() {
        $(".compartilhar-redes").toggle();
    });
});
$(function() {
    $(".compartilhar i").click(function() {
        // remove classes from all
        $(this).toggleClass("active");
    });
});
$('.compartilhar').click(function(e) {
    e.stopPropagation();
});
$(".compartilhar i").click(function(e) {
    e.preventDefault();
    e.stopPropagation();
    $('.compartilhar').show();
});
$(document).click(function() {
    $('.compartilhar-redes').hide();
    $('.compartilhar i').removeClass("active");
});