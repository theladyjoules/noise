$(document).ready(function(){
  $('#nexus-rev-slider').show().revolution({
    dottedOverlay: 'none',
    delay: 5000,
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
    forceFullWidth: 'off',
    fullScreenAlignForce: 'off',
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
  });
  $('.nav-toggle').on('click', function(){
    $('header.st-navbar').toggleClass('active');
  });
  $('a.internal').on('click', function(e){
    e.preventDefault();
    $('header.st-navbar').removeClass('active');
    console.log($('#' + $(this).attr('href')));
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
});