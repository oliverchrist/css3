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
                    <h1>Tritt</h1>
                    <a class="christbox" href="images/tritt01.JPG">
                        <img src="images/tritt01.JPG" alt="Tritt" />
                    </a>
                    <p>Für unsere Tochter sollte ein Tritt her, damit sie recht bald an unser Waschbecken
                    kommt zum Zähneputzen. Natürlich habe ich mich über dieses neue Projekt sehr gefreut und
                    meiner Frau mal wieder versichert, daß wir soetwas doch nicht zu kaufen brauchen, sondern
                    ich es selbst bauen kann. Das ist ja auch viel günstiger ;). Das Holz stammt von einer
                    Sperrmüllsammlung und einer Holzpalette. Die Tritte sind ehemalige Schubladenfronten. Die
                    Seiten aus besagter Palette.</p>
                    <a class="christbox" href="images/tritt02.JPG">
                        <img src="images/tritt02.JPG" alt="Tritt" />
                    </a>
                    <p>Da das Palettenholz verständlicherweise nicht die notwendige Breite hatte, verleimte
                    ich dafür drei Bretter. Das versuchte ich zuerst mit der Handsäge und kaufte anschließen
                    recht spontan eine Kappzugsäge. Was das Verleimen anbelangt muss ich mich daran erst
                    gewöhnen. Irgendwie vertraue ich einer Schraube eher, aber bis jetzt scheint alles
                    stabil.</p>
                    <a class="christbox" href="images/tritt03.JPG">
                        <img src="images/tritt03.JPG" alt="Tritt" />
                    </a>
                    <p>Zur Stabilisierung der Querlast ist ein Querbalken eingebaut. Diesen habe ich
                    zusätzlich mit Holzdübeln versehen.</p>
                    <a class="christbox" href="images/tritt04.JPG">
                        <img src="images/tritt04.JPG" alt="Tritt" />
                    </a>
                    <p>Von oben gesehen erahnt man noch mal den ursprünglichen Einsatz der Tritte als
                    Schubladenfront.</p>
                </section>
                <aside class="teaser"></aside>
                <div class="clear"></div>
            </div>
            <?php include $basePath . 'components/global/footer.php'; ?>
        </div>
    </body>
</html>
