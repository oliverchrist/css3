$(function(){
    if($('#graph div').get(0)){
        var animStartIndex = 0;
        var animateGraph = function(){
            
            $('#graph div').each(function(){
                var pi = 3.1414;
                var step = (2 * pi) / 1500;
                var x = ($(this).index() + animStartIndex) * step; 
                var y = Math.round(Math.sin(x) * 200) + 250;
                //console.log('-webkit-linear-gradient(top, #008000, #ffff00 ' + y + '%, #ff0000)');
                $(this).css('background-image', '-webkit-linear-gradient(top, #008000, #ffff00 ' + y + 'px, #ff0000)');
                
            });
            animStartIndex++;
            if(animStartIndex == 1501) animStartIndex = 0;
        };
        //animateGraph();
        window.setInterval(animateGraph, 0);
    }
});
