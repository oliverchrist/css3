$(function(){
    $('a.christbox').christbox();
    $('.mailto.email01').mailto('christ@mediaman.de');
    
    $('#toggleOffCanvas').click(function(){
        $('#main').toggleClass('offCanvas');
    });
});


/*
 * Lightbox Function
 */
$.fn.christbox=function(){
    var superSelf = this,
        christboxNumber = this.length,
        index = 0,
        current;
    
    return this.each(function() {
        var self = this;
        $(document).keydown(function(e) {
            if (e.which == 0 || e.which == 27) {
                $('.christboxLayer').remove();
                $('.website').fadeIn();
            }
        });
        $(this)
        .attr('data-index', index++)
        .append('<div class="magnifier"></div>')
        .click(function(e){
            e.preventDefault();
            current = $(this).attr('data-index');
            var additionalHtml = '',
                showCurrentImage = function(){
                    $('.christboxLayer img').attr('src', $(superSelf).eq(current).attr('href'));
                    if(christboxNumber > 1){
                        $('.christboxLayer .index').text((parseInt(current, 10) + 1) + '/' + christboxNumber);
                    }
                };
            if(christboxNumber > 1){
                additionalHtml += '<div class="browseLeft"></div><div class="browseRight"></div><div class="index"></div>';
            }
            $('body').append('<div class="christboxLayer"><div class="close">X</div>' + additionalHtml + '<img src="#"></div>');
            showCurrentImage();
            $('.christboxLayer .close').click(function(){
                $('.christboxLayer').remove();
                $('.website').fadeIn();
            });
            if(christboxNumber > 1){
                $('.christboxLayer .browseRight').click(function(){
                    current++;
                    if(current >= christboxNumber) current = 0;
                    showCurrentImage();
                });
                $('.christboxLayer .browseLeft').click(function(){
                    console.log('browseRight');
                    current--;
                    if(current < 0) current = christboxNumber - 1;
                    showCurrentImage();
                });
            }
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
          