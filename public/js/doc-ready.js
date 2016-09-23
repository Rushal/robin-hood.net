$(document).ready(function() {
    $(".button-collapse").sideNav({
        menuWidth: 250,
        edge: 'right',
        closeOnClick: true
    });

    $('.modal-trigger').leanModal({
        ready: function () {
           $('ul.tabs').tabs();
        }
    });

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

    $('.table-collapsible-header').click(function(){
        $(this).nextUntil('tr.table-collapsible-header').toggle();
        $(this).find(':last-child').toggleClass('arrow');
    });
    $('.table-collapsible-header').nextUntil('tr.table-collapsible-header').hide();

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
});
