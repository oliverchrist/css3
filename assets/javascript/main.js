$(function(){
    $('.anim').click(function(e){
        $('.stageFrame').toggleClass('open');
        /*
        e.preventDefault();
        $('.col').animate({
            transform: 'rotateY(45deg)',
        },
        {
            step: function(now, fx) {
                var data = fx.elem.id + ' ' + fx.prop + ': ' + now;
                $('body').append('<div>' + data + '</div>');
            }
        });
        */
    });
});
