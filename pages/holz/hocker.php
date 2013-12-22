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
                    <h1>Hocker</h1>
                    <a class="floatLeft christbox" href="images/hockerVorne.JPG">
                        <img src="images/hockerVorneThumb.JPG" alt="Hocker vorne" />
                    </a>
                    <p>Bei meiner Schwiegermutter sah ich einen Hocker im Bauernstil. Dieser war nätürlich aus dem Supermarkt, aber er inspirierte mich dazu soetwas selbst zu bauen.</p>
                    <p>Das Holz holte ich mir aus einer alten abgerissenen Pergola eines Freundes, welche in seinem Garten vergammelt. Das Holz längs durchzusägen war mir mit der Hand die Mühe nicht wert, weshalb ich es mit der Schindelspalthacke in zwei Hälften teilte. Von daher rührt die grobe Oberfläche, welche ich nur mit dem Beil etwas nachbearbeitet habe. Die anderen Seiten des Holzes habe ich grob abgehobelt. Zu dem Zeitpunkt hatte ich noch keine Werkbank wofür ich das Ergebnis gar nicht so schlecht finde. Der Steg in der Mitte ist aus einem entrindeten Ast.</p>
                    <a class="floatLeft christbox" href="images/hockerOben.JPG">
                        <img src="images/hockerObenThumb.JPG" alt="Hocker oben" />
                    </a>
                    <p>Hier sieht es so aus als wären die Einzelteile mit Holzdübeln verbunden. Ich muss aber zugeben Schrauben verwendet zu haben, welche nur eine Holzdübel Verblendung bekommen haben.</p>
                </section>
                <aside class="teaser"></aside>
                <div class="clear"></div>
            </div>
            <?php include $basePath . 'components/global/footer.php'; ?>
        </div>
    </body>
</html>
