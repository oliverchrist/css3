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
                    <h1>Bilderrahmen</h1>
                    <p>Dies ist mein erster Bilderrahmen. Das Holz entstammt irgendeiner Zierleiste, welche
                    ich in meinem Holzvorrat gefunden habe. Diese hatte bereits ein L-Profil, wodurch sie
                    perfekt für einen Bilderrahmen geeignet war. Ich hatte nur noch die 45 Grad Winkel in der
                    richtigen Länge zu sägen. Gesägt wurde mit der Hand und einer Japansäge mit Führung.</p>
                    <a class="floatLeft christbox" href="images/bilderrahmenVorne.JPG">
                        <img src="images/bilderrahmenVorne.JPG" alt="Bilderrahmen von vorne" />
                    </a>
                    <p>Für das Glas und die Rückwand wurde ein alter rahmenloser Bilderrahmen verwendet. Da
                    alles ein wenig locker saß habe ich mit Hilfe von ein paar Nägeln die Spannung erhöht.</p>
                    <a class="floatLeft christbox" href="images/bilderrahmenHinten.JPG">
                        <img src="images/bilderrahmenHinten.JPG" alt="Bilderrahmen von hinten" />
                    </a>
                </section>
                <aside class="teaser"></aside>
                <div class="clear"></div>
            </div>
            <?php include $basePath . 'components/global/footer.php'; ?>
        </div>
    </body>
</html>
