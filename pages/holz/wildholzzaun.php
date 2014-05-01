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
                    <h1>Wildholzzaun</h1>
                    <a class="christbox" href="images/wildholzzaun.JPG">
                        <img src="images/wildholzzaun.JPG" alt="Wildholzzaun" />
                    </a>
                    <p>Unser Garten führt am Haus vorbei auf die Straße. Diesen Weg wollten wir unserer
                    Tochter erschwehren. Genauso sollten möglichst keine Kinder an den Holzunterstand
                    gelangen, falls das gesetzte Holz umstürtzen sollte.</p>
                    <p>Für den Garten stand mir ein Wildholzzaun im Sinn. Das Holz ist nachhaltig im
                    Familiengarten erworben worden. Für die trockenen Füße des Zauns steht er rechts auf einem
                    Stein und links hängt er am Holzunterstand. Dort kann man den Zaun auch aushängen, falls
                    man z.B. mit dem Rasenmäher passieren möchte. Ansonsten ist es schneller auf der rechten
                    Seite wo der Zaun am niedrigsten ist einfach darüber zu klettern.</p>
                </section>
                <aside class="teaser"></aside>
                <div class="clear"></div>
            </div>
            <?php include $basePath . 'components/global/footer.php'; ?>
        </div>
    </body>
</html>
