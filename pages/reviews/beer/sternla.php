<?php
$basePath = $_SERVER['DOCUMENT_ROOT'];
if(substr($basePath, -1, 1) != '/') { $basePath .= '/'; }
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include $basePath . 'components/global/head.php'; ?>
    </head>
    <body>
        <div class="website">
            <?php include $basePath . 'components/global/header.php'; ?>
            <div id="main">
                <?php include $basePath . 'components/global/subnavi.php'; ?>
                <section class="content">
                    <h1>Original Sternla – extra mildes Helles</h1>
                    <a class="floatLeft christbox" href="images/sternla.JPG">
                        <img src="images/sternlaThumb.JPG" alt="Sternla" />
                    </a>
                    <p>Original Sternla schmeckt! Unser Sternla ist hell und schlank. Es begeistert durch seinen milden und dennoch vollmundigen Geschmack. Die feinwürzige Erfrischung zu jeder Jahreszeit. Ein extra mildes Bier bei einer Stammwürze von 11,3% und einem Alkoholgehalt von 4,9%.</p>
                    <div class="clear"></div>
                    <a class="floatLeft christbox" href="images/sternla2.JPG">
                        <img src="images/sternla2Thumb.JPG" alt="Sternla" />
                    </a>
                    <p>Erhältlich in der nostalgischen Euroflasche im 20x0,5-l Kasten, im 6x0,5-l Sixpack und auch im 30-l Fass. Und schmeckt und schmeckt und schmeckt...</p>
                </section>
                <aside class="teaser"></aside>
                <div class="clear"></div>
            </div>
            <?php include $basePath . 'components/global/footer.php'; ?>
        </div>
    </body>
</html>
