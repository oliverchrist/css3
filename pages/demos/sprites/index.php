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
                    <h1>Sprites: Sinn oder Unsinn</h1>
                    <p class="maxwidth">Hier sinniere ich über die Sinnhaftigkeit von großen Sprites. Dazu habe ich erst ohne Bandbreiten Begrenzern experimentiert und dann mit Begrenzung auf 30 kB/s.</p>
                    <h2>64 Einzelbilder auf einer Seite</h2>
                    <p>70 requests  ❘  1.2 MB transferred  ❘  151 ms (onload: 153 ms, DOMContentLoaded: 101 ms)<br>
                       70 requests  ❘  1.2 MB transferred  ❘  42.27 s (onload: 42.30 s, DOMContentLoaded: 1.04 s)<br>
                        <a href="sprites1.php">Sprite Demo 1</a>
                    </p>
                    <h2>Das gleiche Bild mit einem Sprite aufgebaut</h2>
                    <p>7 requests  ❘  1.2 MB transferred  ❘  110 ms (onload: 111 ms, DOMContentLoaded: 85 ms)<br>
                       7 requests  ❘  1.2 MB transferred  ❘  41.28 s (onload: 41.31 s, DOMContentLoaded: 1.02s)<br>
                        <a href="sprites2.php">Sprite Demo 2</a>
                    </p>
                    <h2>64 Einzelbilder gemischt</h2>
                    <p>70 requests  ❘  1.2 MB transferred  ❘  164 ms (onload: 166 ms, DOMContentLoaded: 110 ms)<br>
                       70 requests  ❘  1.2 MB transferred  ❘  42.68 s (onload: 42.72 s, DOMContentLoaded: 1.12 s)<br>
                        <a href="sprites3.php">Sprite Demo 3</a>
                    </p>
                    <h2>Ein gemischtes Sprite</h2>
                    <p>7 requests  ❘  1.3 MB transferred  ❘  111 ms (onload: 134 ms, DOMContentLoaded: 81 ms)<br>
                       7 requests  ❘  1.3 MB transferred  ❘  45.58 s (onload: 45.59 s, DOMContentLoaded: 1.00 s)<br>
                        <a href="sprites4.php">Sprite Demo 4</a>
                    </p>
                    <p class="maxwidth">Heute habe ich einen weiteren Test gemacht mit Demo 1 und Demo 2 und 70000 B/s</p>
                    <table>
                        <thead>
                            <tr>
                                <th>Demo 1 onload</th><th>Demo 2 onload</th><th>Ersparnis mit Sprites</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>18.43</td><td>18.05</td><td>0.38 s = 0,979381443</td>
                            </tr><tr>
                                <td>18.49</td><td>18.04</td><td>0.45 s = 0,97566252</td>
                            </tr><tr>
                                <td>18.42</td><td style="color:red">22.27</td><td style="color:red">- 3,85 s = 1,209011944</td>
                            </tr><tr>
                                <td>18.53</td><td>18.09</td><td>0.44 s = 0,976254722</td>
                            </tr><tr>
                                <td>18.42</td><td>18.33</td><td>0.09 s = 0,995114007</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>18,458</td><td>18,956/18,1275</td><td>0,34 = 0,982094485</td>
                            </tr>
                        </tfoot>
                    </table>
                    <p class="maxwidth">Fairerweise klammere ich den rot markierten Ausreißer sogar aus. Die Zeitersparnis beträgt somit ca. 1,8%</p>
                    <p class="maxwidth">Hier lasse ich nicht gelten, dass sich diese Ersparnis mit anderen Optimierungen aufaddierbar wäre. Ich habe hier schon recht kritisch das Thema betrachtet.
                        Man kann das noch weiter zugunsten der nicht Sprite Variante verschieben, indem man mehr Content Bilder miteinbezieht. Die Beispielseite besteht ja praktisch nur
                        aus Sprites. Realistischer ist aber, daß den Großteil einer Website Content Bilder ausmachen, zumindest bei unseren kunden. Geht man von 10% für Sprites aus und 90% für den Rest werden aus
                        0.34 Sekunden Ersparnis 0,034 s sprich 35 ms. Das Ergebnis verschiebt sich also immer mehr Zugunsten der Variante ohne Sprites umso geringer der Anteil an dem
                        Gesamtgewicht der Seite ist und je langsamer die Seite geladen wird.</p>
                    <p class="maxwidth">Warum optimiert nun aber google oder facebook? In meinen Augen aus den gleichen Gründen, warum die Näherin in Bangladesch nur einen Bruchteil des Endpreises ihres hergestellten Produktes bekommt.
                        Irgendwo in der Kette verdient jemand daran, was sich durch einen extrem hohe Stückzahl bemerkbar macht. Befindet sich eine Website also in einem Zustand in welchem
                        die übertragenen Daten keine Kostenrolle spielen, halte ich Sprites für vergebene Liebes mühe und ich vergleiche sie gerne erneut mit dem Schwimmer, welcher sich seine 
                        Körperbehaarung rasiert aber im Bademantel schwimmt.</p>
                </section>
                <aside class="teaser"></aside>
                <div class="clear"></div>
            </div>
            <?php include $basePath . 'components/global/footer.php'; ?>
        </div>
    </body>
</html>
