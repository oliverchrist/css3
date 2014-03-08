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
                    <h1>Tafel Tisch</h1>
                    <a class="christbox" href="images/tisch00.JPG">
                        <img src="images/tisch00.JPG" alt="Tisch" />
                    </a>
                    <p>Der Tafel Tisch misst 375x105cm. Die Idee dafür war Heiligabend mit 12 Personen bei uns
                    zu Hause zu feiern. Alles Holz ist wiederverwertetes Holz. Lediglich die Leisten welche
                    die Tischbeine halten habe ich im Baumarkt gekauft.</p>
                    <a class="christbox" href="images/tisch01.JPG">
                        <img src="images/tisch01.JPG" alt="Tisch" />
                    </a>
                    <p>Die Tafel besteht aus zwei Tischen wie man im ersten Bild sehen kann. Der erste welchen
                    ich gebaut hatte maß 210cm. Diesen schaffte ich mit meiner Frau aus dem Werkkeller in den
                    Nebenraum. Danach war uns klar, daß es nicht ganz einfach sein wird ihn in das Wohnzimmer
                    zu bekommen. Der Zweite Tisch war dann nur noch 165cm lang. Die Oberfläche sieht auf dem
                    Foto schrecklich aus. Das liegt daran, daß ich nach dem gesammten Projekt feststellen
                    mußte, daß ich einen Hobel benutzt hatte, in welchem das Hobeleisen falsch herum
                    eingesetzt war.</p>
                    <a class="christbox" href="images/tisch02.JPG">
                        <img src="images/tisch02.JPG" alt="Tisch" />
                    </a>
                    <p>Das gesammte Projekt ist mit Handwerkzeugen gebaut mit Außnahme eines Akku
                    Bohrschraubers und eines Bandschleifers. Das heißt das Holz ist Handgehobelt und mit der
                    Hand gesägt.</p>
                    <a class="christbox" href="images/tisch03.JPG">
                        <img src="images/tisch03.JPG" alt="Tisch" />
                    </a>
                    <p>Der erste Tisch war noch ungeschliffen und ohne Holzbehandlung. Auch die Kanten wurden
                    nicht gebrochen. Wenn man eine Weile an so einem Tisch gesessen hat, eventuell auch mit
                    dem Laptop, kommt man recht zügig auf die Idee, daß die Kanten gebrochen werden
                    müssen.</p>
                    <a class="christbox" href="images/tisch04.JPG">
                        <img src="images/tisch04.JPG" alt="Tisch" />
                    </a>
                    <p>Der zweite kleinere Tisch geht in dieser Perspektive etwas unter, aber man sieht auch
                    hier schon, daß etwas mehr Zeit für die Oberfläche verwendet wurde.</p>
                    <a class="christbox" href="images/tisch05.JPG">
                        <img src="images/tisch05.JPG" alt="Tisch" />
                    </a>
                    <p>Die Kanten wurden mit einem Hobel gebrochen und mit der Handfeile nachbearbeitet. Die
                    Oberfläche mit einem Bandschleifer bearbeitet. Ich glaube hier war der Tisch sogar noch
                    unbehandelt</p>
                </section>
                <aside class="teaser"></aside>
                <div class="clear"></div>
            </div>
            <?php include $basePath . 'components/global/footer.php'; ?>
        </div>
    </body>
</html>
