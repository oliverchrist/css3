$(function(){
    if($('#graph div').get(0)){
        var animStartIndex = 0;
        var animateGraph = function(){
            
            $('#graph div').each(function(){
                var pi = 3.1414;
                var step = (2 * pi) / 1500;
                var x = ($(this).index() + animStartIndex) * step; 
                var y = Math.round(Math.sin(x) * 300) + 350;
                $(this).css('top', y);
                
            });
            animStartIndex++;
            if(animStartIndex == 1501) animStartIndex = 0;
        };
        window.setInterval(animateGraph, 0);
    }
});
