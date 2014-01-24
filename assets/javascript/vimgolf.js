$(function(){
    $('#challenges').load('data/foo.txt',function(){
        var number=1;
        $('#challenges #content').each(function(){
            var title = $('h3', this).eq(0).text();
            var best = $('.notice', this).eq(0).find('> div').text();
            var worst = $('.notice:last-child', this).find('> div').text();
            var myScore = worst;
            $('.notice', this).each(function(){
                if($('h6', this).text().indexOf('Oliver Christ') != -1) {
                    myScore = $('>div', this).text();
                }
            });
            var diffToFirst = myScore - best;
            $('#challengesTable').append('<div>diff to first=' + diffToFirst + ', number=' + number + ': ' + title + ', best score=' + best + ', worst score=' + worst + ', my score=' + myScore + '</div>');
            number++;
        });
    });
});
