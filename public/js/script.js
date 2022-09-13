tippy('.card', {
  theme: 'udemy',
  content: template.innerHTML,
  placement: 'right',
  allowHTML: true,
  onShow(instance) {
    $.get( url , function( data ) {   
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