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
                    <h1>OETTINGER</h1>
                    <h2>OETTINGER Pils</h2>
                    <a class="floatLeft christbox" href="images/oettingerPils.JPG">
                        <img src="images/oettingerPilsThumb.JPG" alt="OETTINGER Pils" />
                    </a>
                    <p>ein feinherbes, elegantes Bier mit dem typischen, edlen Hopfenaroma. Im Stammwürzegehalt liegt es bei ca. 11,2 %. Es hat daher den Volumen-Alkoholgehalt von ca. 4,7 %.</p>
                    <p>Erhältlich in der 0,5 Liter-, der 0,33 Liter Vichy-, und der 0,33 Liter Steinie-Flasche sowie in 0,33 Liter- und im Sixpack bzw. in der 0,5 Liter Dose.</p>
                    <div class="clear"></div>
                    <h2>OETTINGER Schwarzbier</h2>
                    <a class="floatLeft christbox" href="images/oettingerSchwarzbier.JPG">
                        <img src="images/oettingerSchwarzbierThumb.JPG" alt="OETTINGER Schwarzbier" />
                    </a>
                    <p>Ist die dunkle, mit vollem Aroma schmeckende Bierspezialität für Kenner und Liebhaber. Speziell eingebraut aus ausgesuchten Zutaten, nach überliefertem, bewährten Rezept. Der Alkoholgehalt beträgt ca. 4,9 %. Erhältlich in der 0,5 Liter Flasche.</p>
                </section>
                <aside class="teaser"></aside>
                <div class="clear"></div>
            </div>
            <?php include $basePath . 'components/global/footer.php'; ?>
        </div>
    </body>
</html>
