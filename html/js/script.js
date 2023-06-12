jQuery(document).ready(function ($) {

  /*parallax*/
  var rellax = new Rellax('.rellax');

  /*fix menu*/
  $(".top-line").sticky({
    topSpacing:0
  });

  /*niceSelect*/
  $('.select>select').niceSelect();

  /*soc-block*/
  if(window.innerWidth > 991){
    if($('.soc-block').length>0){
      $(window).scroll(function () {
        let itemTop = $('.soc-block').offset().top,
          h = window.innerHeight,
          st = $(this).scrollTop(),
          scrollTop1 = -(itemTop - st)/15 + 85,
          scrollTop2 = -(itemTop - st)/20 + 85,
          scrollTop3 = -(itemTop - st)/25 + 85,
          totalTop = itemTop - 100 ,
          item = $(this).scrollTop(),
          translate1 = 'translate3d(' + 0 + ', ' + scrollTop1 + 'px, ' + 0 + ')',
          translate2 = 'translate3d(' + 0 + ', ' + scrollTop2 + 'px, ' + 0 + ')',
          translate3 = 'translate3d(' + 0 + ', ' + scrollTop3 + 'px, ' + 0 + ')';
        if(item > totalTop) {
          $('.soc-block .item-1').css({'transform': translate1});
          $('.soc-block .item-2').css({'transform': translate2});
          $('.soc-block .item-3').css({'transform': translate3});
          $('.soc-block .video-wrap .tic').css({'transform': translate1});
          $('.soc-block .video-wrap .video-block').css({'transform': translate3});

        } else {
          $('.soc-block .item').css({'transform': 0})

        }
      });
    }
  }



  /* mob-menu*/
  $(document).on('click', '.open-menu a', function (e){
    e.preventDefault();
    $(this).toggleClass('is-open')

    if($(this).hasClass('is-open')){
      $.fancybox.open( $('#menu-responsive'), {
        touch:false,
        autoFocus:false,
        beforeShow:function (e){
          $('html').addClass('is-bg');
        },
        beforeClose: function (e){
          $('html').removeClass('is-menu');
        },
        afterClose: function (e){
          $('body').removeClass('is-active');
          $('html').removeClass('is-menu');
          $('header').removeClass('is-active');
        },
      });

      setTimeout(function() {
        $('body').addClass('is-active');
        $('html').addClass('is-menu');
        $('header').addClass('is-active');
      }, 100);
    }else{
      $('html').removeClass('is-menu');
      $('body').removeClass('is-active');
      $('header').removeClass('is-active');
      $.fancybox.close();
    }

  });

  /*close mob menu*/
  $(document).on('click', '.close-menu a', function (e){
    e.preventDefault();
    $('body').removeClass('is-active');
    $.fancybox.close();
    $('header').removeClass('is-active');
    $('html').removeClass('is-menu');
  });

  /*scroll top page*/
  $(document).on('click', '.top-page a', function (e) {
    e.preventDefault();
    $('html, body').stop().animate({scrollTop:0},'slow', 'swing');
  });

   /* open search*/
  $(document).on('click', '.open-search', function (e) {
    e.preventDefault();
    $('.form-search').addClass('is-open');
    $('header').addClass('is-search')
  });


  /* close search*/
  $(document).on('click', '.close-search', function (e) {
    e.preventDefault();
    $('.form-search').removeClass('is-open');
    $('header').removeClass('is-search')
  });

  /*open sub menu*/
  $(document).on('click', '.menu-responsive .sub a', function (e) {
    e.preventDefault();
    $(this).toggleClass('is-open');
    if($(this).hasClass('is-open')){
      $(this).siblings('.wrap-sub').slideDown()
    }else{
      $(this).siblings('.wrap-sub').slideUp()
    }
  });

  /*one page nav*/
  $('#nav').onePageNav({
    scrollThreshold: 0.2,
  });

  $('.aside-menu').onePageNav({
    scrollThreshold: 0.2,
  });

  $('.aside').fixTo('.page-content .content',{
    top: 100,
  });

  $(".nav-content").sticky({
    topSpacing:100
  });

  /*page president*/
  if($('.pres-nav').length > 0){
    $(document).scroll(function(e) {
      if($('.pres-nav li:nth-child(2)').hasClass('current')){
        $('.pres-nav').addClass('is-pres');

      }else{
        $('.pres-nav').removeClass('is-pres')
      }
      setTimeout(function() {
        if($('.pres-nav li:nth-child(2)').hasClass('current')){
          $('.pres-nav').addClass('is-pres');

        }else{
          $('.pres-nav').removeClass('is-pres')
        }
      }, 500);
    })
  }

 /* page awards*/
  if($('.awards-nav').length > 0){
    $(document).scroll(function(e) {
      if($('.awards-nav li:first-child').hasClass('current')){
        $('.awards-nav').addClass('is-pres');

      }else{
        $('.awards-nav').removeClass('is-pres')
      }
      setTimeout(function() {
        if($('.awards-nav li:first-child').hasClass('current')){
          $('.awards-nav').addClass('is-pres');

        }else{
          $('.awards-nav').removeClass('is-pres')
        }
      }, 500);
    })
  }

  /*slider*/
  var swiperHead = new Swiper(".head-slider", {

    pagination: {
      el: ".head-pagination",
      clickable: true,
    },
  });

  /*cutt text*/
  $('.lobby .item .text h6 a').Cuttr({
    truncate: 'words',
    length: 10
  });
  $('.lobby .item .text p').Cuttr({
    truncate: 'words',
    length: 23
  });


  /*select*/
  $('select').niceSelect();


  //scroll

  $(document).on('click', '.president-head ol li p a', function (e) {
    e.preventDefault();
    var id  = $(this).attr('href'),
      top = $(id).offset().top;
    $('body,html').animate({scrollTop: top}, 1000);
  });
});