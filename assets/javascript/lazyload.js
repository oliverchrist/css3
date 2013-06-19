$(window).load(function(){
    $(window).scroll(function(){
        $('.content').lazyload();
    });
    $('.content').lazyload();
});


/*
 * Lightbox Function
 */
$.fn.lazyload=function(){
    return this.each(function() {
        var self = this;
        var viewportTop = $(window).scrollTop();
        var viewportBottom = viewportTop + $(window).height();
        console.log(viewportTop, viewportBottom);
        $(this).find('img[data-lazyload]').each(function(){
            var i = $(this);
            var iStart = i.position().top;
            var iEnd = iStart + i.height();
            console.log(i.attr('data-lazyload'), iStart, iEnd);
            if( (iStart > viewportTop && iStart < viewportBottom) || (iEnd > viewportTop && iEnd < viewportBottom) || (iStart < viewportTop && iEnd > viewportBottom)){
                i.attr('src', i.attr('data-lazyload'));
                i.removeAttr('lazy-load');
            }
        });
    });
}

