$(function(){
    $('.mainnavi a').each(function(){
        var rightEdge = $(this).parent().width() - ( $(this).position().left + $(this).outerWidth() ),
            factor = 18 / 1000;
            offset = rightEdge * factor;
            $(this).css('top', offset);
    });
});
