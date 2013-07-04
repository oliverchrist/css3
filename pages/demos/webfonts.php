<?php
$basePath = $_SERVER['DOCUMENT_ROOT'];
if(substr($basePath, -1, 1) != '/') { $basePath .= '/'; }
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include $basePath . 'components/global/head.php'; ?>
        <style>
            .font1 { font-family:"Neue Helvetica"; font-size:20px; line-height:25px; }
            .font2 { font-family:"Neue Helvetica Bold"; font-size:20px; line-height:25px; }
            .font3 { font-family:"Neue Helvetica Condensed"; font-size:20px; line-height:25px; }
        </style>
    </head>
    <body>
        <div class="website">
            <?php include $basePath . 'components/global/header.php'; ?>
            <div id="main">
                <?php include $basePath . 'components/global/subnavi.php'; ?>
                <section class="content" style="width:80%;">
                    <h1>Webfonts</h1>
                    <p class="font1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus id!</p>
                    <p class="font2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus id!</p>
                    <p class="font3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus id!</p>
                    
                </section>
                <div class="clear"></div>
            </div>
            <?php include $basePath . 'components/global/footer.php'; ?>
        </div>
    </body>
</html>
