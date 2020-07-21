$(document).ready(function(){
  var swiper = new Swiper('#visual', {
    pagination: {
      el: '.swiper-pagination',
    },
  });

  var swiper2 = new Swiper('.with_list_wrap', {
    pagination: {
      el: '.with_btn',
    },
  });

  var swiper3 = new Swiper('.insta_img_wrap', {
    navigation: {
      nextEl: '.insta_next',
      prevEl: '.insta_prev',
    },
  });
  
  var swiper4 = new Swiper('#review_list_wrap', {
    navigation: {
      nextEl: '.review_next',
      prevEl: '.review_prev',
    },
  });
})