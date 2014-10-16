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
                    <h1>Verschiedene Skalierungen eines Bildes</h1>
                    <h2>1920</h2>
                    <img src="imagesMym/stageOrig.jpg" width="320">
                    <h2>1024</h2>
                    <img src="imagesMym/stage1024.jpg" width="320">
                    <h2>800</h2>
                    <img src="imagesMym/stage800.jpg" width="320">
                    <h2>640</h2>
                    <img src="imagesMym/stage640.jpg" width="320">
                    <h2>320</h2>
                    <img src="imagesMym/stage320.jpg" width="320">

                </section>
                <aside class="teaser"></aside>
                <div class="clear"></div>
            </div>
            <?php include $basePath . 'components/global/footer.php'; ?>
        </div>
    </body>
</html>
