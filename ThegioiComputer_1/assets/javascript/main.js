// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the header
var header = document.getElementById("myHeader");

// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

// menu drop
$(document).ready(function () {
  $(".hoverli").hover(
function () {
  $('ul.file_menu').finish().slideDown('fast');
}, 
function () {
   $('ul.file_menu').finish().slideUp('fast');
}
);

   $(".file_menu li").hover(
function () {
   $(this).children("ul").finish().slideDown('fast');
},
function () {
  $(this).children("ul").finish().slideUp('fast');
}
);
});


$('a[data-slide="prev"]').click(function() {
  $('#myCarousel').carousel('prev');
});

$('a[data-slide="next"]').click(function() {
  $('#myCarousel').carousel('next');
});










