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
                    <h1>Löffel</h1>
                    <a class="floatLeft christbox" href="images/butterStreicher.JPG">
                        <img src="images/loeffelThumb.JPG" alt="Löffel" />
                    </a>
                    <p>So ein Löffel ist gar nicht so einfach herzustellen. Nach meinem ersten gab es mir arg zu denken, daß man Salatbestecke auf dem Weihnachtsmarkt aus Olivenholz für 10 EUR bekommt. Speziell die Laffe ist sehr schwierig.</p>
                </section>
                <aside class="teaser"></aside>
                <div class="clear"></div>
            </div>
            <?php include $basePath . 'components/global/footer.php'; ?>
        </div>
    </body>
</html>
