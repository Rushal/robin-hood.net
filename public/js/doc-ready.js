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


    $('.carousel.carousel-slider').carousel({
        full_width: true,
        no_wrap: true
    });


    // Bookkeeping collapse
    $('.table-collapsible-header').click(function(){
        $(this).nextUntil('tr.table-collapsible-header').toggle();
        $(this).find(':last-child').toggleClass('arrow');
    });
    $('.table-collapsible-header').nextUntil('tr.table-collapsible-header').hide();


    // Tutorial
    if(window.location.pathname === '/') {
        if (!!Cookies.get('tutorial')) {
            $('.tutorial').addClass('hidden');
        } else {
            $('body').chardinJs('start');
            $('.tutorial').click(function () {
                $('body').chardinJs('stop');
            });
            $('body').on('chardinJs:stop', function () {
                Cookies.set('tutorial', 'completed', 36135);
                $('.tutorial').fadeOut('slow').promise().addClass('hidden');
            });
        }
    }

    // Tutorial Mobile
    if(window.location.pathname === '/') {
        if (!!Cookies.get('mobile_tutorial')) {
            Cookies.remove('mobile_tutorial');
        } else {
            $('.carousel').addClass('hidden');
            var mobileTutorial = $('[data-remodal-id=mobile-tutorial]').remodal();
            mobileTutorial.open();

            $(document).on('closing', '.remodal', function (e) {
                $('.carousel').removeClass('hidden');
                Cookies.set('mobile_tutorial', 'completed', 36135);
            });
        }
    }


    // Chest modal
    var chest = $('[data-remodal-id=chest]').remodal();
    $('.remodal').click(function () {
        chest.close();
        mobileTutorial.close();
    });
});
