$(document).ready(function(){
  $('.nav-toggle').on('click', function(){
    $('header.st-navbar').toggleClass('active');
  });
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
});