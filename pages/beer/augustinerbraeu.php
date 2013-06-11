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
                    <h1>Augustiner Bräu Lagerbier Hell</h1>
                    <a class="floatLeft christbox" href="images/augustinerbraeu.JPG">
                        <img src="images/augustinerbraeuThumb.JPG" alt="Augustiner Bräu" />
                    </a>
                    <p>Ein besonders mildes, spritziges, lang gelagertes Bier, erfrischend und bekömmlich zugleich. Einmalig in seinem Geschmack, ein Genuss für jeden Bierkenner.</p>
                    <p>Zutaten: Wasser,  Gerstenmalz, Hopfen</p>
                    <p>alc. 5,2% vol.</p>
                    <p><a href="http://www.augustiner-braeu.de/" target="_blank">http://www.augustiner-braeu.de/</a></p>
                </section>
                <aside class="teaser"></aside>
                <div class="clear"></div>
            </div>
            <?php include $basePath . 'components/global/footer.php'; ?>
        </div>
    </body>
</html>
