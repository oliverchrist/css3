var Talkingtime = function(ws){
    var el = ws,
        startTime,
        startTalker,
        talkerTime,
        totalTime = 0,
        interval,
        init = function(){
            el.find('.newTalker input').pressEnter(function(e){
                $(this).next().trigger('click');
            });
            el.find('.newTalker div').click(function(){
                var name = $(this).prev().val();
                $('.talkingtime').append('<div class="talker" data-time="0"><span class="name">' + name + '</span><span class="time"></span><div class="chart"></div></div>');
                $(this).prev().val('').focus();
            });
            
            el.find('.start').click(function(){
                $('.talkingtime').find('.newTalker, .start').hide();
                $('.talkingtime').find('.stop, .pause').show();
                startTime = new Date();
                interval = window.setInterval(showTime, 1000);
                $('.pause.talker').trigger('click');
            });
            el.find('.stop').click(function(){
                window.clearInterval(interval);
            });
            
            el.on('click', '.talker', function(){
                $(this).addClass('active').siblings('.talker').removeClass('active');
                startTalker = totalTime;
                talkerTime = parseInt($(this).attr('data-time'), 10);
                el.find('.stop').after($(this));
            });
        },
        showTime = function(){
            var cur = new Date();
            totalTime = Math.round((Date.parse(cur) - Date.parse(startTime)) / 1000);
            var talkerDiff = totalTime - startTalker;
            el.find('.stop .time').text(totalTime);
            var activeTalker = el.find('.talker.active');
            var totalTalkerTime = talkerTime + talkerDiff;
            activeTalker.find('.time').text(totalTalkerTime + ' s');
            activeTalker.attr('data-time', totalTalkerTime);
            el.find('.talker').each(function(){
                var localTalkerTime = parseInt($(this).attr('data-time'), 10);
                var percentage = Math.round(localTalkerTime*100/totalTime) + '%';
                $('.chart', this).css({'width': percentage, 'color': 'rgba(255,0,0,' + localTalkerTime/totalTime + ')'}).text(percentage);
            });
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
