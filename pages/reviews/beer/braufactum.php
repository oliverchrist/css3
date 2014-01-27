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
                    <h1>Braufactum Marzus</h1>
                    <a class="floatLeft christbox" href="images/braufactum.JPG">
                        <img src="images/braufactumThumb.JPG" alt="Braufactum Märzen" />
                    </a>
                    <div class="clear"></div>
                    <h2>Charaktervolles Märzenbier</h2>
                    <p>Das Märzen war zu den Zeiten, in denen es noch keinen Eiskeller gab, das zuletzt, nämlich im März eingebraute Bier. Es sollte bis zur neuen Saison, die im Oktober begann, halten. Es wurde daher stärker eingebraut und hatte ausgeprägte Malzaromen.</p>
                    <h2>Zutaten</h2>
                    <p>Wasser, Gerstenmalz (Caramelmalz, Pilsener Malz), Hopfen (Herkules)</p>
                    <h2>Trinktemperatur</h2>
                    <p>10-12 °C</p>
                    <h2>Speiseempfehlung</h2>
                    <p>Eintöpfe: z. B. Grünkohl mit Pinkel oder Kasseler · Geschmortes Geflügel: z. B. Ente mit fruchtiger Sauce oder Coq au Vin · Fleischgerichte: z. B. Braten mit dunkler Sauce</p>
                    <h2>Besonderheiten</h2>
                    <p>Für Marzus wurde ein spezielles Maischverfahren angewandt und ein hoher Gehalt an Caramelmalzen verwendet, die für die Bernsteinfarbe und die starken Aromen verantwortlich sind.</p>
                    <h2>Verkostungsnotiz</h2>
                    <p>Die Farbe von Caramel, mit starker Schaumbildung. Duftet nach Malz, Kandiszucker und Orangenzesten. Schäumt im Mund angenehm leicht auf. Schmeckt trocken. Aromen von Schwarzbrot ergänzen sich mit Anklängen von gerösteten Maroni und Caramel, hinterlegt von einem ausgewogenen Bitterton. Zeigt eine solide Länge.</p>
                </section>
                <aside class="teaser"></aside>
                <div class="clear"></div>
            </div>
            <?php include $basePath . 'components/global/footer.php'; ?>
        </div>
    </body>
</html>
