var Talkingtime = function(ws){
    var el = ws,
        startTime,
        startTalker,
        talkerTime,
        interval,
        init = function(){
            el.find('.newTalker input').pressEnter(function(e){
                $(this).next().trigger('click');
            });
            el.find('.newTalker div').click(function(){
                var name = $(this).prev().val();
                $('.talkingtime').append('<div class="talker" data-time="0"><span class="name">' + name + '</span><span class="time"></span></div>');
                $(this).prev().val('').focus();
            });
            el.find('.start').click(function(){
                $('.talkingtime').find('.newTalker').hide();
                startTime = new Date();
                interval = window.setInterval(showTime, 1000);
            });
            el.on('click', '.talker', function(){
                $(this).addClass('active').siblings('.talker').removeClass('active');
                startTalker = new Date();
                talkerTime = parseInt($(this).attr('data-time'), 10);
            });
        },
        showTime = function(){
            var cur = new Date();
            var diff = Math.round((Date.parse(cur) - Date.parse(startTime)) / 1000);
            var talkerDiff = Math.round((Date.parse(cur) - Date.parse(startTalker)) / 1000);
            el.find('.start').text(diff);
            el.find('.talker.active .time').text(talkerTime + talkerDiff);
            el.find('.talker.active').attr('data-time', talkerTime + talkerDiff);
        }
        
    //////////////////////////
    /// PUBLIC
    /////////////////////////
    
    /**
     * Initialize
     * 
     * @method init
     */    
    this.init = function () {
        init();
    };        
}

$(document).ready(function(){
    var talking = new Talkingtime($('.talkingtime'));
    talking.init(); 
});

$.fn.pressEnter = function(fn) {  

    return this.each(function() {  
        $(this).bind('enterPress', fn);
        $(this).keyup(function(e){
            if(e.keyCode == 13)
            {
              $(this).trigger("enterPress");
            }
        })
    });  
 }; 
