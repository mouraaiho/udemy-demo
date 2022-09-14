tippy('.card', {
  theme: 'udemy',
  content: template.innerHTML,
  placement: 'right',
  allowHTML: true,
  onShow(instance) {
    $.get( ajax_url , function( data ) {   
        instance.setContent(data);  
    });
  },
});


var swiper = new Swiper(".slide-course-tab", {
    slidesPerView: 5,
    spaceBetween: 20,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".course-tab-next",
      prevEl: ".course-tab-prev",
    },

    breakpoints:{
      0: {
          slidesPerView: 1,
      },
      600: {
          slidesPerView: 2,
      },
      800: {
          slidesPerView: 3,
      },
      1100: {
          slidesPerView: 4,
      },
      1260: {
          slidesPerView: 5,
      },
    },
});

var swiper = new Swiper(".slide-courses", {
  slidesPerView: 5,
  spaceBetween: 20,
  loop: true,
  centerSlide: 'true',
  fade: 'true',
  grabCursor: 'true',
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },
  navigation: {
    nextEl: ".slide-courses-next",
    prevEl: ".slide-courses-prev",
  },

  breakpoints:{
      0: {
          slidesPerView: 1,
      },
      600: {
          slidesPerView: 2,
      },
      800: {
          slidesPerView: 3,
      },
      1100: {
          slidesPerView: 4,
      },
      1260: {
          slidesPerView: 5,
      },
  },
});


document.addEventListener("DOMContentLoaded", function(){
    if (window.innerWidth < 992) {
      document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown){
        everydropdown.addEventListener('hidden.bs.dropdown', function () {
            this.querySelectorAll('.submenu').forEach(function(everysubmenu){
              everysubmenu.style.display = 'none';
            });
        })
      });
    
      document.querySelectorAll('.dropdown-menu a').forEach(function(element){
        element.addEventListener('hover', function (e) {
            let nextEl = this.nextElementSibling;
            if(nextEl && nextEl.classList.contains('submenu')) {	
              e.preventDefault();
              if(nextEl.style.display == 'block'){
                nextEl.style.display = 'none';
              } else {
                nextEl.style.display = 'block';
              }
    
            }
        });
      })
    }
}); 

$("#categories-menu").on("mouseover", function () {

  console.log('hovered');
  $("#categories-menu").trigger("click");
});

$('.Scrollable').on('DOMMouseScroll mousewheel', function(ev) {
  var $this = $('body'),
      scrollTop = this.scrollTop,
      scrollHeight = this.scrollHeight,
      height = $this.height(),
      delta = (ev.type == 'DOMMouseScroll' ?
          ev.originalEvent.detail * -40 :
          ev.originalEvent.wheelDelta),
      up = delta > 0;

  var prevent = function() {
      ev.stopPropagation();
      ev.preventDefault();
      ev.returnValue = false;
      return false;
  }

  if (!up && -delta > scrollHeight - height - scrollTop) {
      // Scrolling down, but this will take us past the bottom.
      $this.scrollTop(scrollHeight);
      return prevent();
  } else if (up && delta > scrollTop) {
      // Scrolling up, but this will take us past the top.
      $this.scrollTop(0);
      return prevent();
  }
});