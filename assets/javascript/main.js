$(function(){
    // Treppenfunktion für die Hauptnavigation. Die rechte Kannte eines Menüeintrags richtet sich an der Schrägen darunter aus.
    $('.mainnavi a').each(function(){
        var rightEdge = $(this).parent().width() - ( $(this).position().left + $(this).outerWidth() ),
            factor = 18 / 1000;
            offset = Math.round(rightEdge * factor);
            $(this).css('top', offset);
    });
    $('a.christbox').christbox();
    $('.mailto.email01').mailto('christ@mediaman.de');
});


/*
 * Lightbox Function
 */
$.fn.christbox=function(){
    return this.each(function() {
        var self = this;
        // close button event setzen und vorher löschen, falls es schon gesetzt war
        // schliessen mit Escape Taste
        $(document).keydown(function(e) {
            if (e.which == 0 || e.which == 27) {
                $('.modalBgr, .lightbox').hide();
            }
        });
        $(this).click(function(e){
            e.preventDefault();
            $('body').append('<div class="christboxLayer"><div class="close">X</div><img src="'+$(self).attr('href')+'"></div>');
            $('.christboxLayer .close').click(function(){
                $('.christboxLayer').remove();
                $('.website').fadeIn();
            });
            $('.website').hide();
                     
                       
            //$('.lightbox').css('top',$('html').scrollTop() + 100 + 'px');
            //$('.modalBgr').css('height',$(document).height() + 'px');
        });
    });
}

$.fn.mailto=function(email){
    return this.each(function() {
        $(this).attr('href', 'mailto:' + email);
        $(this).text(email);
    });
}
          