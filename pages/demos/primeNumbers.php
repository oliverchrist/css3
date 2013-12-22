<?php
$basePath = $_SERVER['DOCUMENT_ROOT'];
if(substr($basePath, -1, 1) != '/') { $basePath .= '/'; }
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include $basePath . 'components/global/head.php'; ?>
        <script>
            $(function(){
                for(var x = 2, y; x < 1000; x++, y = 2) {
                    while(y <= (x/2) && x%y++ !== 0) {}
                    if(y > x/2) {
                        $('#prime').append('<div>' + x + '</div>');
                    }
                }   
            });
        </script>
    </head>
    <body>
        <div class="website">
            <?php include $basePath . 'components/global/header.php'; ?>
            <div id="main">
                <?php include $basePath . 'components/global/subnavi.php'; ?>
                <section class="content" id="prime">
                    <h1>Primzahlen 1 - 1000</h1>
                    
                </section>
                <div class="clear"></div>
            </div>
            <?php include $basePath . 'components/global/footer.php'; ?>
        </div>
    </body>
</html>
