$(document).ready(function(){
  var $allVideos = $('.vimeo-wrapper iframe'),
  $fluidEl = $('.vimeo-wrapper p');
  console.log( $allVideos);
  $allVideos.each(function() {
    $(this).attr('data-aspectRatio', this.height / this.width).removeAttr('height').removeAttr('width');
  });
  $(window).resize(function() {
    var newWidth = $fluidEl.width();
    $allVideos.each(function() {
      var $el = $(this);
      $el.width(newWidth).height(newWidth * $el.attr('data-aspectRatio'));
    });
  }).resize();
  var opts = {
    dottedOverlay: 'none',
    delay: 500000,
    startwidth: 0,
    startheight:500,

    navigation: {
      bullets:{
        enable:true
      },
      arrows:{enable:false}      
    },  

    touchenabled: 'on',
    onHoverStop: 'on',
    
    swipe_velocity: 0.7,
    swipe_min_touches: 1,
    swipe_max_touches: 1,
    drag_block_vertical: false,

    spinner: 'spinner0',
    keyboardNavigation: 'off',

    navigationHAlign: 'center',
    navigationVAlign: 'top',
    navigationHOffset: 0,
    navigationVOffset: 112,

    shadow: 0,
    fullWidth: 'on',
    fullScreen: 'on',

    stopLoop: 'off',
    stopAfterLoops: -1,
    stopAtSlide: -1,

    shuffle: 'off',

    autoHeight: 'on',
    forceFullWidth: 'on',
    fullScreenAlignForce: 'on',
    minFullScreenHeight: 0,
    hideNavDelayOnMobile: 1500,

    hideThumbsOnMobile: 'off',
    hideBulletsOnMobile: 'off',
    hideThumbsUnderResolution: 0,

    hideSliderAtLimit: 0,
    hideCaptionAtLimit: 0,
    hideAllCaptionAtLilmit: 0,
    startWithSlide: 0,
    fullScreenOffsetContainer: ''
  }
  $('.nav-toggle').on('click', function(){
    $('header.st-navbar').toggleClass('active');
  });
  $('a.internal').on('click', function(e){
    e.preventDefault();
    $('header.st-navbar').removeClass('active');
    $('html,body').animate({scrollTop: $('#' + $(this).attr('href')).offset().top + 5},'slow');
  });
  if($('.media-wrapper').length){
    $('.toggle').on('click', function(e){
      e.preventDefault();
      if(!$(this).hasClass('active')){
        $('.media-wrap, .toggle').removeClass('active');
        $(this).addClass('active');
        $('.media-wrap.'+$(this).attr('media')+'-wrapper').addClass('active');
      }
    });
  }
  $(window).on('resize', function(){
    if(screenSize() != intializedSlider){
      setSlider(screenSize());
    }
  });
  var intializedSlider, intializedSliders;
  function initSlider(){
    intializedSlider = '';
    intializedSliders = [];
    setSlider(screenSize());
  }
  function setSlider(s){
    if(intializedSlider != ''){
      $('.slideshow-'+intializedSlider).hide();
    }
    $('.slideshow-'+s).show();
    $('#nexus-rev-slider-'+s).show();
    if($.inArray(s, intializedSliders) == -1){
      $('#nexus-rev-slider-'+s).revolution(opts);
      intializedSliders.push(s);
    }
    intializedSlider = s;
  }
  function screenSize(){
    if($(window).width() > 1024){
      return 'desktop';
    }
    else if($(window).width() < 1024 && $(window).width() > 640){
      return 'tablet';
    }
    else{
      return 'mobile';
    }
  }
  initSlider();
});

