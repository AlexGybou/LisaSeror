
var $=jQuery;
$(document).ready(function() {



  // ---------------- MENU

  var trigger = $('.link-menu'),
      faIcon = $('.icon-menu'),
      overlay = $('.overlay'),
      isClosed = false;

  function buttonSwitch() {

    if (isClosed == true) {
      overlay.hide();
      faIcon.removeClass('fa-times');
      faIcon.addClass('fa-bars');
      isClosed = false;
    } else {
      overlay.show();
      faIcon.removeClass('fa-bars');
      faIcon.addClass('fa-times');
      isClosed = true;
    }
  }

  trigger.click(function () {
    buttonSwitch();
  });

  $('[data-toggle="offcanvas"]').click(function () {
    $('#wrapper').toggleClass('toggled');
  });

// -------------------- Lightbox single

  $('.slider .image a').click(function() {
    var itemID = $(this).attr('href');
    $(itemID).addClass('item_open');
    /*var itemID = $(this).attr('class');
    console.log(itemID);
    $('#'+itemID).addClass('item_open');
    return false;*/
  });
  $('.close').click(function() {
    $('.port').removeClass('item_open');
    return false;
  });

  // -------------------- Ink transition

  //cache some jQuery objects
  var modalTrigger = $('.cd-modal-trigger'),
      transitionLayer = $('.cd-transition-layer'),
      transitionBackground = transitionLayer.children(),
      modalWindow = $('.cd-modal');

  var frameProportion = 1.78, //png frame aspect ratio
      frames = 25, //number of png frames
      resize = false;

  //set transitionBackground dimentions
  setLayerDimensions();
  $(window).on('resize', function(){
    if( !resize ) {
      resize = true;
      (!window.requestAnimationFrame) ? setTimeout(setLayerDimensions, 300) : window.requestAnimationFrame(setLayerDimensions);
    }
  });

  //open modal window
  window.onload = function(event){
    event.preventDefault();
    transitionLayer.addClass('visible opening');
    var delay = ( $('.no-cssanimations').length > 0 ) ? 0 : 600;
    setTimeout(function(){
      modalWindow.addClass('visible');
    }, delay);

  };

  //close modal window
  // modalWindow.on('click', '.modal-close', function(event){
  //   event.preventDefault();
  //   transitionLayer.addClass('closing');
  //   modalWindow.removeClass('visible');
  //   transitionBackground.one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(){
  //     transitionLayer.removeClass('closing opening visible');
  //     transitionBackground.off('webkitAnimationEnd oanimationend msAnimationEnd animationend');
  //   });
  // });

  function setLayerDimensions() {
    var windowWidth = $(window).width(),
        windowHeight = $(window).height(),
        layerHeight, layerWidth;

    if( windowWidth/windowHeight > frameProportion ) {
      layerWidth = windowWidth;
      layerHeight = layerWidth/frameProportion;
    } else {
      layerHeight = windowHeight*1.2;
      layerWidth = layerHeight*frameProportion;
    }

    transitionBackground.css({
      'width': layerWidth*frames+'px',
      'height': layerHeight+'px',
    });

    resize = false;
  }

});
//////////
jQuery(document).ready(function( $ ) {
$(document).ready(function(){
  $(".menu-principal-container span").click(function(){
    $(this).toggleClass('active');
    //slide up all the link lists
    $(".menu-principal-container ul ul").slideUp();
    //slide down the link list below the h3 clicked - only if its closed
    if(!$(this).next().is(":visible"))
    {
      $(this).next().slideDown();
    }

  })
})
});
