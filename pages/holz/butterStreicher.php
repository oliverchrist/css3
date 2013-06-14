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
                    <h1>Butter Streicher</h1>
                    <a class="floatLeft christbox" href="images/butterStreicher.JPG">
                        <img src="images/butterStreicherThumb.JPG" alt="Butter Streicher" />
                    </a>
                    <p>Die Butterstreicher gelten als ein Einsteigerprojekt für angehende Schnitzer. Der große ist aus Kirsche und natürlich das Holz aus einem Ast. Der Rohlingg ist mir etwas breit geraten und Kirsche ist ein echt hartes Holz.</p>
                    <p>Der kleinere stammt aus dem Holz einer alten Schublade vom Sperrmüll und ließ sich in windeseile schnitzen</p>
                </section>
                <aside class="teaser"></aside>
                <div class="clear"></div>
            </div>
            <?php include $basePath . 'components/global/footer.php'; ?>
        </div>
    </body>
</html>
