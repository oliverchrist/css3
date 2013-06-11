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
                    <h1>Lammsbräu Dinkel</h1>
                    <a class="floatLeft christbox" href="images/lammsbraeuDinkel.JPG">
                        <img src="images/lammsbraeuDinkelThumb.JPG" alt="Lammsbräu Dinkel" />
                    </a>
                    <h2>Eine fruchtig aromatische Bio-Besonderheit</h2>
                    <p>Diese Bierspezialität ist für Genießer ein wahres Geschmacksparadies. Obergärig gebraut mit dem Urgetreide entfaltet sein Aroma zarten Bananen-, Nuss- und Vanilleduft. Fruchtig, spritzig und doch vollmundig und weich im Geschmack ist das Dinkel ein echter Hochgenuss. Die natürliche Trübung der goldgelben Farbe und der schneeweiße Schaum runden das Bild harmonisch ab.</p>
                    <p>Durch seine milden und fruchtigen Noten eignet sich das Dinkel ideal zur süßen oder leicht säuerlichen Nachspeise.</p>
                    <ul>
                        <li>Stammwürze 12,5%</li>
                        <li>Alk.-Gehalt 5,2% vol.</li>
                        <li>obergärig</li>
                        <li>0,33l Glas-Mehrwegflasche</li>
                    </ul>
                </section>
                <aside class="teaser"></aside>
                <div class="clear"></div>
            </div>
            <?php include $basePath . 'components/global/footer.php'; ?>
        </div>
    </body>
</html>
