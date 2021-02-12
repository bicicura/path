// USE SAME HEADER/FOOTER FILES FOR ALL VIEWS
$(function(){
  $("#header").load("header.html"); 
  $("#footer").load("footer.html"); 
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

$("#scroll-top").click(function() {
  $("html").animate(
    {
      scrollTop: 0
    },
    "slow"
  );
});

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

$(function() {
    let element = $('.anim__home1');

    if(!window.mobileCheck()){

        $(window).scroll(function() {
            
            var scroll = $(window).scrollTop();
            console.log(scroll);

            if (scroll >= 120) {

                element.fadeIn(1000);
                element.removeClass("no");
                element.addClass("si")
            };
            if (scroll > 170) {
                $('.pasos-text span').css({'opacity':1, 'transform':'translateX(0%)'});
                setTimeout(() => {
                    $('.pasos-text h2').css({'opacity':1, 'transform':'translateX(0%)'});
            }, 200);
        }
        if (scroll > 250) {
            $('.tarjeta').css('opacity', '1')
        }
        if (scroll >= 1500) {

            setTimeout(() => {
                $('.icons-title span').css({'opacity':1, 'transform':'translateY(0%)'});
            }, 100);
            setTimeout(() => {$('.icons-title h2').css({'opacity':1, 'transform':'translateY(0%)'});
        }, 200);
        };
        if (scroll >= 1750) {

            element3.css('opacity', '1');
            $('#efectivo-svg').css({'opacity':1, 'transform':'translateY(0%)'});
            setTimeout(() => {
                $('#billete, #Mbaja, #mAlta, #alta, #media, #baja, #fintech').css({'opacity':1, 'transform':'translateY(0%)'});
            }, 100);
        };
        
    });

}
else{
        $(window).scroll(function() {
        // Guardas la distancia del scroll en una variable para usar en IFs
        var scroll = $(window).scrollTop();
        console.log(scroll);
        // Si se excede la distancia de scroll que queres, haces un menjo
        if (scroll >= 25) {
            // Alteras el elemento 
            element.fadeIn(1000);
            element.removeClass("no");
        };
        if (scroll > 50) {
            $('.pasos-text span').css({'opacity':1, 'transform':'translateX(0%)'});
            setTimeout(() => {
                $('.pasos-text h2').css({'opacity':1, 'transform':'translateX(0%)'});
        }, 200);
    }
    if (scroll > 200) {
        $('.tarjeta').css('opacity', '1')
    }
    if (scroll >= 1900) {
        // Alteras el elemento
        setTimeout(() => {
            $('.icons-title span').css({'opacity':1, 'transform':'translateY(0%)'});
        }, 150);
        setTimeout(() => {$('.icons-title h2').css({'opacity':1, 'transform':'translateY(0%)'});
    }, 250);
    };
    if (scroll >= 2150) {
        element3.css('opacity', '1');
            $('#efectivo-svg').css({'opacity':1, 'transform':'translateY(0%)'});
    };

    if (scroll >= 2600)
    setTimeout(() => {
        $('#billete, #Mbaja, #mAlta').css({'opacity':1, 'transform':'translateY(0%)'});
    }, 50);

    if (scroll >= 3050  ) {
        setTimeout(() => {
            $('#alta, #media, #baja').css({'opacity':1, 'transform':'translateY(0%)'});
        }, 50);
    }

    if (scroll >= 3400) {
        setTimeout(() => {
            $('#fintech').css({'opacity':1, 'transform':'translateY(0%)'});
        }, 50);
    }
});
}
});

$(document).ready(function(){
      
  // JS DESKTOP
  $(function() {
      let element = $('.anim__home1');

    // Anim meet h1
      setTimeout(() => {
        $('.meet_h1').css({'opacity':1, 'transform':'translateY(0%)'});
    }, 700);

      if(!window.mobileCheck()){
  
          
          $(window).scroll(function() {
              
              var scroll = $(window).scrollTop();
              console.log(scroll);

            // MEET PATH ANIMS
              if (scroll >= 1000) {
                $('.our-principles').css({'opacity':1, 'transform':'translateY(0%)'});
            };

            if (scroll >= 1500) {

              $('.our-vision__title').css({'opacity':1, 'transform':'translateX(0%)'});
              setTimeout(() => {
                $('.our-vision__text').css({'opacity':1, 'transform':'translateX(0%)'});
            }, 200);
          };

          if (scroll >= 3000) {

            $('.tabla-anim').css({'opacity':1, 'transform':'translateY(0%)'});
        };          

          if (scroll >= 2000) { 
            $('.our-mission__title').css({'opacity':1, 'transform':'translateY(0%)'});
          }

          // INDEX ANIMS

            if (scroll >= 400) {

                $('.path-exam-text').css({'opacity':1, 'transform':'translateY(0%)'});
            };

              if (scroll >= 400) {

                $('.franja__title').css({'opacity':1, 'transform':'translateY(0%)'});
            };
            if (scroll >= 900) {

              $('.quote__title').css({'opacity':1});
          };

              if (scroll >= 1400) {

                  element.css({'opacity':1, 'transform':'translateX(0%)'});
              };
              if (scroll >= 1700) {

                $('.anim__home2').css({'opacity':1, 'transform':'translateX(0%)'});
            };
            if (scroll >= 2300) {

              $('.anim__home3').css({'opacity':1, 'transform':'translateX(0%)'});
          };
          if (scroll >= 2600) {

            $('.anim__home4').css({'opacity':1, 'transform':'translateX(0%)'});
        };
        if (scroll >= 3000) {

          $('.anim__home5').css({'opacity':1, 'transform':'translateX(0%)'});
      };
      if (scroll >= 3800) {

        $('.europe').css({'opacity':1, 'transform':'translateY(0%)'});
        setTimeout(() => {
          $('.latin').css({'opacity':1, 'transform':'translateY(0%)'});
      }, 200);
      setTimeout(() => {
        $('.africa').css({'opacity':1, 'transform':'translateY(0%)'});
    }, 400);
    setTimeout(() => {
      $('.asia').css({'opacity':1, 'transform':'translateY(0%)'});
  }, 600);
    };

          
      });
  
  
      // JS MOBILE
  }
  else{
          $(window).scroll(function() {
          // Guardas la distancia del scroll en una variable para usar en IFs
          var scroll = $(window).scrollTop();
          console.log(scroll);
          // Si se excede la distancia de scroll que queres, haces un menjo
          if (scroll >= 25) {
              // Alteras el elemento 
              element.fadeIn(1000);
              element.removeClass("no");
          };

  });
  }
  });
  // Para checkear Mobile o Desktop
      window.mobileCheck = function() {
          let check = false;
          (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);
          return check;
        };
  });
