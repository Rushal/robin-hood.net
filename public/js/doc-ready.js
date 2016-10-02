var midnight = new Date();
midnight.setHours(23,59,59,0);


// Set completion
$('[data-remodal-id=chest]').click(function () {
    if(!Cookies.get('daily-click'))
        Cookies.set('daily-click', 'completed', midnight);
});

$(document).ready(function() {
    $(".button-collapse").sideNav({
        menuWidth: 250,
        edge: 'right',
        closeOnClick: true
    });

    // Desktop planks
    $(".plank").hover( function () {
        if($(this).css('opacity') == 0) {
            $(this).fadeTo("slow", 1.0);
            $(this).addClass('on');
            if($('.plank').filter('.on').length == 21){
                $(".treasure").fadeTo("slow", 1.0);
                $(".treasure img").wrap($('<a>', {
                    href: '#',
                    "data-remodal-target": 'chest'
                }));
            }
        }
    });


    // Show complete if cookies exist
    if (!!Cookies.get('tutorial') && !!Cookies.get('daily-click') || !!Cookies.get('mobile-tutorial') && !!Cookies.get('daily-click')) {
        $('.plank').each(function () {
            $(this).fadeTo("slow", 1.0);
            $(this).addClass('on');
            $(".treasure").fadeTo("slow", 1.0);
            $(".treasure img").wrap($('<a>', {
                href: '#',
                "data-remodal-target": 'chest'
            }));
        })
    } else {
        // Desktop planks
        $(".plank").hover( function () {
            if($(this).css('opacity') == 0) {
                $(this).fadeTo("slow", 1.0);
                $(this).addClass('on');
                if($('.plank').filter('.on').length == 21){
                    $(".treasure").fadeTo("slow", 1.0);
                    $(".treasure img").wrap($('<a>', {
                        href: '#',
                        "data-remodal-target": 'chest'
                    }));
                }
            }
        });
    }


    // Mobile planks
    $("#mobile-carousel-home").owlCarousel({
        navigation : false,
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem:true
    });


    // Tutorial
    var width = $(window).width();
    if(window.location.pathname === '/' && width > 768) {
        if (!!Cookies.get('tutorial')) {
            //Cookies.remove('tutorial');
            //Cookies.remove('daily-click');
        } else {
            $('body').chardinJs('start');
            $('.tutorial').addClass('visible');
            $('.tutorial').click(function () {
                $('body').chardinJs('stop');
            });
            $('body').on('chardinJs:stop', function () {
                Cookies.set('tutorial', 'completed', midnight);
                $('.tutorial').fadeOut('slow').promise().removeClass('visible');
            });
        }
    }

    // Tutorial Mobile
    if(window.location.pathname === '/' && width < 768) {
        if (!!Cookies.get('mobile-tutorial')) {
            //Cookies.remove('mobile_tutorial');
        } else {
            $('.owl-wrapper .owl-item').each(function() {
                $(this).addClass('hidden');
            });
            var mobileTutorial = $('[data-remodal-id=mobile-tutorial]').remodal({hashTracking: false});
            mobileTutorial.open();

            $(document).on('closing', '.remodal', function () {
                $('.owl-wrapper .owl-item').each(function() {
                    $(this).removeClass('hidden');
                });
                Cookies.set('mobile-tutorial', 'completed', midnight);
            });
        }
    }


    // Bookkeeping collapse
    $('.table-collapsible-header').click(function(){
        $(this).nextUntil('tr.table-collapsible-header').toggle();
        $(this).find(':last-child').toggleClass('arrow');
    });
    $('.table-collapsible-header').nextUntil('tr.table-collapsible-header').hide();


    // Login modal
    $(document).on('opening', '#login-modal', function () {
        $('ul.tabs').tabs();
    });


    // Chest modal
    var chest = $('[data-remodal-id=chest]').remodal({hashTracking: false});
    $('.remodal').click(function () {
        chest.close();
        mobileTutorial.close();
    });


    // Dismiss alert
    $('[data-dismiss=alert]').click(function() {
        $(this).parent().addClass('hidden');
    })
});
