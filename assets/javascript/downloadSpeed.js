$(window).load(function(){
    $('#downloadSpeedTestImage').getDownloadSpeed();
    
});


/*
 * Lightbox Function
 */
$.fn.getDownloadSpeed=function(){
    var self = this;
    var start = new Date(),
        end,
        diff;
    $(this).attr('src', $(this).attr('data-lazyload') + '?' + Math.random()).removeAttr('data-lazyload').load(function(){
        end = new Date();
        diff = (Date.parse(end) - Date.parse(start));
        $('#downloadSpeed').text('Download Speed: ' + Math.round(54739000 / diff) + ' Bps, Download Time: ' + diff + ' ms');
    });
}

