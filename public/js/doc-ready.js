$(document).ready(function() {
    $(".button-collapse").sideNav({
        menuWidth: 250,
        edge: 'right',
        closeOnClick: true
    });


    // Login modal
    $('.modal-trigger').leanModal({
        ready: function () {
           $('ul.tabs').tabs();
        }
    });


    // Desktop planks
    var planks = 0;
    $(".plank").hover( function () {
        if($(this).css('opacity') == 0) {
            $(this).fadeTo("slow", 1.0);
            planks++;
            if(planks >= 21){
                $(".treasure").fadeTo("slow", 1.0);
                $(".treasure img").wrap($('<a>', {
                    href: '#',
                    "data-remodal-target": 'chest'
                }));
            }
        }
    });

    $("#mobile-carousel-home").owlCarousel({
        navigation : false,
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem:true
    });

    // Bookkeeping collapse
    $('.table-collapsible-header').click(function(){
        $(this).nextUntil('tr.table-collapsible-header').toggle();
        $(this).find(':last-child').toggleClass('arrow');
    });
    $('.table-collapsible-header').nextUntil('tr.table-collapsible-header').hide();


    // Tutorial
    var width = $(window).width();
    if(window.location.pathname === '/' && width > 768) {
        if (!!Cookies.get('tutorial')) {
            Cookies.remove('tutorial');
        } else {
            $('body').chardinJs('start');
            $('.tutorial').addClass('visible');
            $('.tutorial').click(function () {
                $('body').chardinJs('stop');
            });
            $('body').on('chardinJs:stop', function () {
                Cookies.set('tutorial', 'completed', 36135);
                $('.tutorial').fadeOut('slow').promise().removeClass('visible');
            });
        }
    }

    // Tutorial Mobile
    if(window.location.pathname === '/' && width < 768) {
        if (!!Cookies.get('mobile_tutorial')) {
            Cookies.remove('mobile_tutorial');
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
                Cookies.set('mobile_tutorial', 'completed', 36135);
            });
        }
    }


    // Chest modal
    var chest = $('[data-remodal-id=chest]').remodal({hashTracking: false});
    $('.remodal').click(function () {
        chest.close();
        mobileTutorial.close();
    });
});
