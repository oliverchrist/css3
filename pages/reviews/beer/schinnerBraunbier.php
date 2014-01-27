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
                    <h1>Schinner Braunbier</h1>
                    <a class="floatLeft christbox" href="images/schinnerBraunbier.JPG">
                        <img src="images/resized/schinnerBraunbier.JPG" alt="Schinner Braunbier" />
                    </a>
                    <p>Braunbier - eine einzigartige Spezialität aus dem Hause Schinner, feurig dunkel und bernsteinfarben, angenehme Bittere, süffig.</p>
                    <p>alc. 5,4 %vol., MHD: Bügelfl. 9 Mon., Faß 30/50 l 6 Mon.</p>
                </section>
                <aside class="teaser"></aside>
                <div class="clear"></div>
            </div>
            <?php include $basePath . 'components/global/footer.php'; ?>
        </div>
    </body>
</html>
