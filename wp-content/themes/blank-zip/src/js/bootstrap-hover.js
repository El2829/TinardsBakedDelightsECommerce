jQuery(document).ready(function($){
    //hover dropdown menu
$(function(){
    $(".dropdown").hover(
        function(){
            $('.dropdown-menu', this).stop( true, true).fadeIn("fast");
            $(this).toggleClass('open');
            $('b', this).toggleClass("caret caret-up");
        },
        function(){
            $('.dropdown-menu', this).stop( true, true).fadeOut("fast");
            $(this).toggleClass('open');
            $('b', this).toggleClass("caret caret-up");
        });
    });
});


jQuery(document).ready(function($){
    //dynamic scroll to top link
    $('.nav-link').hover(
        function() {
            $('.nav-link').not(this).stop().fadeTo(500, 0.33);
        }, function() {
            $('.nav-link').stop().fadeTo(500, 1);
        }
    );
})

window.onscroll = function() {myFunction()};

var header = document.getElementById("menu");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

jQuery(document).ready(function($){
    //dynamic scroll to top link
    $link = '<a href="#top" class="top">&uarr;</a>';
    $('body').append($link);
    $('.top').hide();
    $(window).scroll(function(){
        if($(this).scrollTop() > 100){
            $('.top').fadeIn();
        }else{
            $('.top').fadeOut();
        }
    })
    $('.top').click(function (e) {
        e.preventDefault();
        $('html, body').animate({scrollTop: 0}, 400);
    })
})

$(document).ready(function(){
    $("#about").fadeIn("slow")
})