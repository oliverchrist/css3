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
                    <h1>Tisch</h1>
                    <a class="floatLeft christbox" href="images/tisch.JPG">
                        <img src="images/tischThumb.JPG" alt="Tisch" />
                    </a>
                    <p>Das ist mein erstes Grünholz Projekt. Alle Verbindungen sind geschraubt. Alle Löcher sind mit einem Handbohrer vorgebohrt und mit der Hand verschraubt. Das sind 32 Schraubverbindungen. Auch hier ist die Kunst gewesen am Ende einen halbwegs geraden Tisch hinzubekommen. Mit einem Winkeleisen oder der Wasserwaage kommt man hier nicht weit, außer bei der Auflagefläche. Die Äste stammen aus dem Garten meiner Schwiegermutter und die Auflage aus einer Schublade vom Sperrmüll. Der Kuchen ist von der Tante :).</p>
                </section>
                <aside class="teaser"></aside>
                <div class="clear"></div>
            </div>
            <?php include $basePath . 'components/global/footer.php'; ?>
        </div>
    </body>
</html>
