/* global $:false */
/* global console:false */
/* global window:false */
/* global document:false */

var Talkingtime = function(ws) {
    'use strict';
    var el = ws,
        startTime,
        startTalker,
        talkerTime,
        totalTime = 0,
        interval,
        talkerNumber = 0,
        colors = new Array('#008000','#C0C0C0','#00FF00','#808080','#808000','#FFFFFF','#FFFF00','#800000',
            '#000080','#FF0000','#0000FF','#800080','#008080','#FF00FF','#00FFFF','#ffa500'),
        init = function() {
            el.find('.newTalker input').pressEnter(function() {
                $(this).next().trigger('click');
            });
            el.find('.newTalker div').click(function() {
                var name = $(this).prev().val();
                $('.talkingtime').append('<div class="talker" data-time="0" style="background:' +
                    colors[talkerNumber++] + '"><span class="name">' + name +
                    '</span><span class="time"></span><div class="chart"></div></div>');
                if(talkerNumber >= colors.length) {talkerNumber = 0;}
                console.log(talkerNumber.length);
                $(this).prev().val('').focus();
            });
            
            el.find('.start').click(function() {
                $('.talkingtime').find('.newTalker, .start').hide();
                $('.talkingtime').find('.stop, .pause').show();
                startTime = new Date();
                interval = window.setInterval(showTime, 1000);
                $('.pause.talker').trigger('click');
            });
            el.find('.stop').click(function() {
                window.clearInterval(interval);
            });
            
            el.on('click', '.talker', function() {
                $(this).addClass('active').siblings('.talker').removeClass('active');
                startTalker = totalTime;
                talkerTime = parseInt($(this).attr('data-time'), 10);
                if($('#toTop:checked').get(0)){
                    el.find('.stop').after($(this));
                }
            });
        },
        showTime = function() {
            var cur = new Date(),
                talkerDiff,
                activeTalker,
                totalTalkerTime;
            totalTime = Math.round((Date.parse(cur) - Date.parse(startTime)) / 1000);
            talkerDiff = totalTime - startTalker;
            el.find('.stop .time').text(totalTime);
            activeTalker = el.find('.talker.active');
            totalTalkerTime = talkerTime + talkerDiff;
            activeTalker.find('.time').text(totalTalkerTime + ' s');
            activeTalker.attr('data-time', totalTalkerTime);
            el.find('.talker').each(function() {
                var localTalkerTime = parseInt($(this).attr('data-time'), 10),
                    percentage = Math.round(localTalkerTime * 100 / totalTime) + '%';
                $('.chart', this).css({'width': percentage, 'color': 'rgba(255,0,0,' +
                    localTalkerTime / totalTime + ')'}).text(percentage);
            });
        };
        
    //////////////////////////
    /// PUBLIC
    /////////////////////////
    
    /**
     * Initialize
     * 
     * @method init
     */
    this.init = function() {
        init();
    };
};

$(document).ready(function() {
    'use strict';
    var talking = new Talkingtime($('.talkingtime'));
    talking.init();
});

$.fn.pressEnter = function(fn) {
    'use strict';

    return this.each(function() {
        $(this).bind('enterPress', fn);
        $(this).keyup(function(e) {
            if(e.keyCode === 13)
            {
                $(this).trigger('enterPress');
            }
        });
    });
};
