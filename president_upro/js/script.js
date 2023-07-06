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


  $(".fancybox").fancybox({
    touch:false,
    autoFocus:false,
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
    $('header .search-wrap').addClass('is-open');
  });


  /* close search*/
  $(document).on('click', '.close-search', function (e) {
    e.preventDefault();
    $('.form-search').removeClass('is-open');
    $('header .search-wrap').removeClass('is-open');
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

  $(document).on('click', '.president-head ol li p a, .lady-head .content .item a', function (e) {
    e.preventDefault();
    var id  = $(this).attr('href'),
      top = $(id).offset().top;
    $('body,html').animate({scrollTop: top}, 1000);
  });

  $('.page-content.text-black .main').prepend("<p style='margin-bottom: -120px'></p>");

  $(document).on('click', ' .open-map', function (e) {
    e.preventDefault();
    var $this = $(this),
      id = $this.attr('href');

    console.log(id)
    $(this).toggleClass('is-open');
    if($(this).hasClass('is-open')){
      $('.page-content .map-wrap').slideDown();
      $('.page-content .main '+id).slideDown();
      //$(this).hide();
    }else{
      $('.page-content .map-wrap').slideUp();
      $('.page-content .main '+id).slideUp();
    }
  });

  /*video play*/
  $(document).on('click', '.home-banner .bg-cover .btn-play', function (e) {
    e.preventDefault();
    $('.home-banner .bg-cover').hide();
    $('.home-banner .content video').get(0).play()
  });

  $(window).scroll(function () {
    if($(this).scrollTop() > $(this).height()) {
      $('.top-page').show(200)
    } else {
      $('.top-page').hide(200)
    }
  });

  $(document).on('click', ' .close-form', function (e) {
    e.preventDefault();


    $('.page-content .main .form-wrap-red').slideUp();

  });

  $(document).on('click', ' .copy-li a', function (e){
    e.preventDefault();
    var $temp = $("<input style='position: absolute; top:0; visibility: hidden; z-index: -1'>");
    var $url = $(location).attr('href');
    $("body").append($temp);
    $temp.val($url).select();
    document.execCommand("copy");

    $('.copy-li').addClass('is-open');
    setTimeout(function() {
      $('.copy-li').removeClass('is-open');
    }, 2000);
  });


  $(document).on('click', ' .show-widget', function (e) {
    e.preventDefault();
    $('.custom-widget').slideDown();

  });


});