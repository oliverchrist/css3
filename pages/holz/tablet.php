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
                    <h1>Tablet Halterung</h1>
                    <a class="christbox" href="images/tablet01.JPG">
                        <img src="images/tablet01.JPG" alt="Tritt" />
                    </a>
                    <p>Als wir unser erstes Tablet in Besitz nahmen, sind uns natürlich schnell Zubehör wie
                    Tablet Hülle und Halterung ins Auge gefallen. Ich dachte so eine Halterung wäre doch ein
                    schönes Holzprojekt. Zu der Zeit arbeitete ich gerne mit Wildholz und Handwerkzeugen. Das
                    Loch ist also mit dem Handbohrer gebohrt und die Einkerbungen mit der Japansäge und der
                    Schnitzaxt/Schnitzmesser bearbeitet.</p>
                    <a class="christbox" href="images/tablet02.JPG">
                        <img src="images/tablet02.JPG" alt="Tablet" />
                    </a>
                    <p>Die Schwierigkeit beim Wildholzbau liegt darin mit dem unregelmäßigen Baumaterial
                    gerade Ergebnisse zu erzielen. Da Handwerkzeuge sehr langsam Material abtragen (zumindest
                    bei mir), ist deren Vorteil, dass man sich langsam seinem Ziel nähern kann, ohne darüber
                    hinaus zu schießen.</p>
                    <a class="christbox" href="images/tablet03.JPG">
                        <img src="images/tablet03.JPG" alt="Tablet" />
                    </a>
                    <p>Hier noch mal mit einem quer gestellten Tablet. Wie man auf den Bildern sieht, gibt es
                    eine steilere und eine flachere Stellung.</p>
                    <a class="christbox" href="images/tablet04.JPG">
                        <img src="images/tablet04.JPG" alt="Tablet" />
                    </a>
                    <p>Von der Seite kann man es noch besser sehen.</p>
                    <a class="christbox" href="images/tablet05.JPG">
                        <img src="images/tablet05.JPG" alt="Tablet" />
                    </a>
                    <p>Eigentlich ein sehr einfaches Projekt, insofern man den passenden Ast gefunden hat.
                    Gerade deshalb mag ich dieses Projekt sehr. Als Liebhaber von Holz ist für mich das Design
                    perfekt, da es hauptsächlich die natürliche Struktur des Holzes wiedergibt. Und es ist
                    wirklich praktisch und ich nutze die Halterung regelmäßig.</p>
                </section>
                <aside class="teaser"></aside>
                <div class="clear"></div>
            </div>
            <?php include $basePath . 'components/global/footer.php'; ?>
        </div>
    </body>
</html>
