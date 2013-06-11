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
                    <h1>Breznak Schwarzbier</h1>
                    <a class="floatLeft christbox" href="images/breznakSchwarzbier.JPG">
                        <img src="images/breznakSchwarzbierThumb.JPG" alt="Breznak Schwarzbier" />
                    </a>
                    <p>Genießen Sie den milden Geschmack von Brèznàk Schwarzbier und erfreuen Sie sich an dem feinporigen, cremigen Schaum.</p>
                    <p>Wir brauen das Bier in Velkè Brezno aus hochwertigen Malz, Hopfen und Wasser aus eigenem Brunnen in traditioneller böhmischer Braukunst seit 1753. ZUM WOHL!</p>
                    <h2>Geschmack</h2>
                    <p>Milder und unaufdringlicher Geschmack, also nicht so malzbetont, lieblich, cremiger Schaum und was besonders wichtig ist - nicht so viel Alkohol. Deshalb wird Breznak Schwarzbier auch gern von Frauen getrunken.</p>
                    <h2>Inhaltsstoffe/tech. Angaben</h2>
                    <p>Wasser, Gerstenmalz, Hopfen,  Hopfenextrakt, Hefe, <br>
                    ALC 3,8% VOL, 9,7 ° Stammwürze</p>
                    <h2>Zusatzinformationen</h2>
                    <p>Kühl lagern. Gebraut nach dem Reinheitsgebot.</p>
                    <h2>Menge/Größe</h2>
                    <p>0,5 Liter x 20 &gt; Kasten | 30 Liter &gt; Fass</p>
                </section>
                <aside class="teaser"></aside>
                <div class="clear"></div>
            </div>
            <?php include $basePath . 'components/global/footer.php'; ?>
        </div>
    </body>
</html>
