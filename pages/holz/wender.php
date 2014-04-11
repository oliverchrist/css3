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
                    <h1>Pfannen Wender</h1>
                    <a class="christbox" href="images/wender01.JPG">
                        <img src="images/wender01.JPG" alt="Wender" />
                    </a>
                    <p>Das interessante am Pfannenwender ist, daß es ein reines Axt und Feilen Projekt ist.
                    Keine Säge wurde hier eingesetzt oder irgendein Schleifwerkzeug außer einer Iwasaki
                    Bildhauerfeile.</p>
                    <a class="christbox" href="images/wender02.JPG">
                        <img src="images/wender02.JPG" alt="Tablet" />
                    </a>
                    <p>Auch wurde das Holz aus dem eigenen Garten verwendet, oder aus dem Garten der
                    Schwiegermutter. Der Griff schaut zugegebenermaßen etwas schief aus, was er auch ist, aber
                    manchmal gibt dies einem das Holz selbst vor. Für Rechtshänder scheint dies sogar nicht
                    von Nachteil zu sein.</p>
                </section>
                <aside class="teaser"></aside>
                <div class="clear"></div>
            </div>
            <?php include $basePath . 'components/global/footer.php'; ?>
        </div>
    </body>
</html>
