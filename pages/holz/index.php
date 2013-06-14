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
                    <h1>Holzwerken</h1>
                    <p>Hier stelle ich mein Hobby Holzwerken vor</p>
                    <p>Die Grundphilosophie besteht darin möglichst auf motorbetriebenes Werkzeug zu verzichten, sowie auf gekauftes Holz. Auch klaue ich das Holz nicht, sondern nutze Grünholz aus dem Garten oder Holz vom Sperrmüll.</p>
                    <p>Meine Werkzeuge sind von daher im Wesentlichen ein Beil (von daher das Logo), ein Handbohrer, eine Japansäge, Schnitzmesser, Feilen und Schraubendreher.</p>
                </section>
                <aside class="teaser"></aside>
                <div class="clear"></div>
            </div>
            <?php include $basePath . 'components/global/footer.php'; ?>
        </div>
    </body>
</html>
