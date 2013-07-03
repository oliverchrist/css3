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
                    <h1>Sprites</h1>
                    <p class="maxwidth">Hier sinniere ich über die Sinnhaftigkeit von großen Sprites. Ich habe erst ohne Bandbreiten Begrenzern experimentiert und dann mit Begrenzung auf 30 kB/s.</p>
                    <p class="maxwidth">Je nach Seitenaufruf variieren diese so stark, daß letztendlich gar kein unterschied zwischen der Sprite Lösung und der Lösung ohne Sprites erkennbar ist.</p>
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
                    
                </section>
                <aside class="teaser"></aside>
                <div class="clear"></div>
            </div>
            <?php include $basePath . 'components/global/footer.php'; ?>
        </div>
    </body>
</html>
