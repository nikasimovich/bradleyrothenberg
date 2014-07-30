// Primary Javascript file

$(function(){

    ////////////////////////////////////////
    //
    // Splash images on home page
    //
    ////////////////////////////////////////

    var splashImage = $('.splash-image');
    var images = splashImage.toArray();
    var arrayLength = images.length;

    var rotateIndex = 0;

    rotateImages();

    function rotateImages(){
        var speed = 5000;

        if(rotateIndex < arrayLength) {
            rotateIndex++;

            if(rotateIndex >= arrayLength){
                rotateIndex = 0;
            }

            splashImage.removeClass('active');

            $(images[rotateIndex]).addClass('active');
            setTimeout(rotateImages, speed);
        }
    };

    // Listen for click event on home page background.
    $('.splash-image-wrapper').click(function(){
        var dataUrl = $('.splash-image.active').data('url');
        window.location.href = dataUrl;
    });


    ////////////////////////////////////////
    //
    // Subpage slidehow
    //
    ////////////////////////////////////////

    var projectImage = $('.project-image');
    var projectImages = projectImage.toArray();
    var projarrayLength = projectImages.length;
    var projrotateIndex = 0;
    $('.project-slideshow').slick({
      slide: '.project-image',
      dots: true,
      infinite: true,
      speed: 500
    });

    ////////////////////////////////////////
    //
    // About page
    //
    ////////////////////////////////////////

    // Set the height of each section to match the window height.
    var windowHeight = $(window).height();
    $('.section').each(function(){
      var sectionHeight = $(this).find('.section-content').outerHeight(true);
      if(sectionHeight >= windowHeight) {
        $(this).css({height: 'auto'});
      } else {
        $(this).css({height: windowHeight});
      }
    });

    // Animate scrolling to the about sections.
    $('#about-nav a').click(function(e){
      e.preventDefault();

      var idToFind = $(this).attr('href');
      var $target = $('.entry-content').find(idToFind);
      var posY = $target.offset().top;

      $('html, body').stop().animate({'scrollTop': posY}, 500, 'swing', function () {
        window.location.hash = idToFind;
      });
    });

    var mapState = 'off';
    $('#viewmap').click(function(e){
        e.preventDefault();

        if(mapState == 'off'){
            showMap();
        } else {
            hideMap();
        }
    });

    function showMap(){
        $('.section.contact, #mc_embed_signup').addClass('active');
        $('#map').css({'z-index': 0}).addClass('active');
        $('#viewmap').html('Hide map');
        mapState = 'on';
    };

    function hideMap(){
        $('.section.contact, #mc_embed_signup').removeClass('active');
        $('#map').removeClass('active');
        $('#viewmap').html('View map');
        setTimeout(function(){
            $('#map').css({'z-index': -5});
        }, 500); // This delay has to match the css transition fading the map out.
        mapState = 'off';
    };

    ////////////////////////////////////////
    //
    // About page - Team Bios
    //
    ////////////////////////////////////////

    var linkTitles = $('.brad, .greg, .brad2, .gotham');
    var contentAreas = $('#brad, #greg, #brad2, #gotham');

    linkTitles.bind('touchend click', function(){
        var link = $(this).attr('data-title');

        if($(this).hasClass('active')){
            linkTitles.removeClass('active');
            contentAreas.hide();
            $('#brad').show();
            $('.brad').addClass('active');
        } else {
            linkTitles.removeClass('active');
            $(this).addClass('active');
            contentAreas.hide();
            $('#' + link).show();
            $('#brad').hide();
        }
    });

    $('.brad').bind('touchend click', function(){
        $('#brad').show();
    });

    // $('#store-bar').hover(
    //     function() {
    //         $('#store-bar p').html('Coming soon!');
    //     }, function() {
    //         $('#store-bar p').html('Store');
    //     });

// window.location = 'http://example.com'

    // $('#store-bar').click(function() {

    //     $('#store-bar').animate({left: '-43px'}, 1500, 'easeOutQuint');
    // });

    $('#store-bar').click(function() {
       $(this).addClass('show');
       $('.entry-content').addClass('fade');
       $('footer').hide();
       setTimeout(function(){
         window.location = 'shop.bradleyrothenberg.com', 5000;},900);
        });

});
