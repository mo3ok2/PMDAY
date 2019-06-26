
jQuery(document).ready(function($){


    var owl = $('.owl-carousel.speaker-carousel');

    owl.owlCarousel({
        loop:false,
        nav: true,
        items : 1,
        mouseDrag: false,
        touchDrag: true,
        responsive:{
            0:{
                items:1
            },
            550:{
                items:2
            },
            1024:{
                items:3
            },
            1199:{
                items:4
            }
        },
        onInitialized: carouselInitialized
    });

    var i = 10000;
    owl.on('change.owl.carousel', function(event) {
        $(owl).find(".active").each(function( index ) {
            $(this).css('z-index', i);
            i--;
        });
    })

    function carouselInitialized(event){
        var j = 10000;
        $(owl).find(".active").each(function( index ) {
            $(this).css('z-index', j);
            j--;
        });
    }


    var owll12 = $('.owl-carousel.logo-carousel-simple');

    owll12.owlCarousel({
        loop:true,
        nav: false,
        items : 1,
        autoplay:true,
        autoplayTimeout:1500,
        responsive:{
            0:{
                items:1
            },
            550:{
                items:2
            },
            1024:{
                items:4
            },
            1199:{
                items:5
            }
        }
    });


    var owll = $('.owl-carousel.logo-carousel');

    owll.owlCarousel({
        loop:true,
        nav: false,
        items : 1,
        autoplay:true,
        autoplayTimeout:1500,
        responsive:{
            0:{
                items:1
            },
            550:{
                items:2
            },
            1024:{
                items:4
            },
            1199:{
                items:6
            }
        }
    });



    // Sticky Header script
    function stickyHeader() {

        if ($(this).scrollTop() >= '300' ) {
            $(".header-wrpapper").addClass("header-sticky");
        }else {
            $(".header-wrpapper").removeClass("header-sticky");
        }
    }



    $(window).on('scroll', function() {
        stickyHeader();
    });

    stickyHeader();



    $("a").on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 2000, function() {

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
            return false;
        } // End if
    });



    // Animation with hover effect and fade in point and move
    $(".circle280-wrapp").on("hover", function () {
        $(this).toggleClass("circles-animation-wrap-hover");
        $(this).find(".bottom-content").slideToggle(600);
    });



    // Animation hover for text tickets
    $(".change-content").on("hover", function () {
        $(this).find(".first-block").slideToggle();
        $(this).find(".second-block").slideToggle();
    });



    // Hide elements and show table or reverse
    $(".block-title a").on("click", function (e) {
        e.preventDefault();

        $(this).parent().slideToggle();
        $(this).parent().parent().find(".block-content").slideToggle();
    })

    $(".block-content th").on("click", function () {
        $(this).parent().parent().parent().parent().parent().parent().find(".block-content").slideToggle();
        $(this).parent().parent().parent().parent().parent().parent().find(".block-title").slideToggle();
    })



    // Locate map
    $(".locate-block").on("click", function () {
        var src = $(this).data("map");

        $("#exampleModalCenter img").attr("src", src);
    })



    // Countdown
    var day         = 24*60*60*1000;
    var hour        = 60*60*1000;
    var minute      = 60*1000;
    var fullDays    = 0;
    var fullHours   = 0;
    var fullMinutes = 0;
    var finishDate  = $("#countdown").data('date');

    // Full days
    fullDays    = Math.floor(finishDate / day);
    fullHours   = Math.floor((finishDate - (fullDays * day )) / hour);
    fullMinutes = Math.floor((finishDate - ((fullDays * day )) + ((fullHours * hour ))) / minute);


    ts =  new Date().getTime() + (finishDate - new Date().getTime());


    $('#countdown').countdown({
        timestamp	: ts,
        callback	: function(days, hours, minutes, seconds){

            $(".days-for-countdown").text(days);
            $(".hours-fro-countdown").text(hours);
            $(".minutes-fro-countdown").text(minutes);
        }
    });



    // Speakers popap
    $(".speaker-item-wrapper:not(.organization-items)").on("click", function () {

        var speakerFaceURL          = $(this).find(".data-speaker-dn .speaker-img").attr("src");
        var speakerName             = $(this).find(".data-speaker-dn .foto-name").html();
        var speakerSurName          = $(this).find(".data-speaker-dn .foto-sure-name").html();
        var speakerPosada           = $(this).find(".data-speaker-dn .posada").html();
        var speakerCompany          = $(this).find(".data-speaker-dn .company").html();
        var speakerDescription      = $(this).find(".data-speaker-dn .foto-description").html();
        var speakerTheme            = $(this).find(".data-speaker-dn .speaker-thema").html();
        var speakerTezu             = $(this).find(".data-speaker-dn .speaker-tezu").html();

        $(".speaker-modal-img").attr("src", speakerFaceURL);
        $(".speaker-modal-name").html(speakerName + " " + speakerSurName);
        $(".speaker-modal-posada").html(speakerPosada + " " + speakerCompany);
        $(".speaker-modal-dosyagnennya").html(speakerDescription);
        $(".speaker-modal-topic").html(speakerTheme);
        $(".speaker-modal-tezu").html(speakerTezu);
    })


});





