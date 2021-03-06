// Banner de cookies
 

// USE SAME HEADER/FOOTER FILES FOR ALL VIEWS
$(function(){
  $("#header").load("header.html"); 
  $("#footer").load("footer.html"); 
  $("#load-pop-ups").load("side-pop-ups.html"); 
  $("#cookie-banner").load("cookie-banner.html"); 
});

/*===================================
          Number Count Up 
=====================================*/
if ($(".count-number").length > 0) {
  $(".count-number").rCounter({
    duration: 20
  });
}

/*===================================
          Search Input Popup
=====================================*/
function sidebarSearch() {
  var searchTrigger = $(".search-active"),
    endTriggersearch = $(".search-close"),
    container = $(".main-search-active");

  searchTrigger.on("click", function(e) {
    e.preventDefault();
    container.toggleClass("search-visible");
  });

  endTriggersearch.on("click", function() {
    container.removeClass("search-visible");
  });
}
sidebarSearch();

/*===================================
            ScrollTop
=====================================*/


/*===================================
            ScrollBottom
=====================================*/
$(".scroll-next").click(function() {
  $("html, body").animate(
    {
      scrollTop: $(window).height()
    },
    "linear"
  );
});

// Scroll then fixed
$(window).scroll(function() {
  if ($(window).scrollTop() > 800) {
    $("#scroll-top").addClass("active");
  } else {
    $("#scroll-top").removeClass("active");
  }
});

// Mobile Bottom popup toggler
if ($(window).width() < 769) {
  var scrollPos = 0;

  window.addEventListener("scroll", function() {
    if (document.body.getBoundingClientRect().top > scrollPos) {
      $(".side-form-icons").removeClass("show-up-form-icons");
    } else {
      $(".side-form-icons").addClass("show-up-form-icons");
    }
    scrollPos = document.body.getBoundingClientRect().top;
  });
}

// Show popup on Btn Click;

if ($("#popup-toggle").length > 0) {
  $("#popup-toggle").click(function() {
    $(".popover-right").toggleClass("show");
    $(this).text(function(i, text){
      return text === "Hide benefits" ? "See benefits" : "Hide benefits";})
  });
  
}

// Disable Input
if ($(".toggle-switch").length > 0) {
  var ts = $("#job_type");

  if (ts[0].disabled) {
    alert("disabled");
  }
}

// Initialize Nice Select
if ($(".select-box").length > 0) {
  $(".select-box").niceSelect();
}
$(document).ready(function() {});

// Preloader
$(window).on("load", function() {
  var preLoder = $("#preloader");
  preLoder.fadeOut(1000);

  $(document).on("click", ".cancel-preloader a", function(e) {
    e.preventDefault();
    $("#preloader").fadeOut(2000);
  });
});

