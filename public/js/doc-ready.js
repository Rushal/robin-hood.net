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
            }
        }
    });

    var body = document.querySelector(".home-bg"),
        doc = document.documentElement,
        scrollPercent;
    $(window).scroll(function () {
        scrollPercent = 100 * $(window).scrollTop() / ($(document).height() - $(window).height());
        body.style.backgroundPosition = "center " + scrollPercent + "%";
        /*body.style.backgroundPosition = "center " + ( 50 -(Math.max(doc.scrollTop, body.scrollTop) / 4) ) + "px";*/
    });


    $('.table-collapsible-header').click(function(){
        $(this).nextUntil('tr.table-collapsible-header').toggle();
        $(this).find(':last-child').toggleClass('arrow');
        /*$(this).next("div").slideToggle(1000);*/
    });
    $('.table-collapsible-header').nextUntil('tr.table-collapsible-header').hide();
});
