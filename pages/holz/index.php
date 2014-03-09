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
                    <p>Die Grund Philosophie besteht darin möglichst auf Motor betriebenes Werkzeug zu
                    verzichten, sowie auf gekauftes Holz. Auch klaue ich das Holz nicht, sondern nutze
                    Grünholz aus dem Garten oder Holz vom Sperrmüll.</p>
                    <p>Meine Werkzeuge waren von daher im
                    wesentlichen ein Beil, ein Handbohrer, eine Japan Säge, Schnitzmesser,
                    Feilen und Schraubendreher.</p>
                    <p>Als Familienvater merkte ich recht bald, daß meine Zeit, welche ich im Workshop
                    verbringen kann, durchaus begrenzt ist. Die Philosophie kein Motor betriebenes Werkzeug zu
                    nutzen wurde deshalb überholt. Als wesentliche Werkzeuge nutze ich nun eine Zug Kappsäge,
                    Akku Bohrschrauber, Stichsäge und Bandschleifer.</p>
                    <p>Gerne besitzen würde ich noch eine Bandsäge, eine Kreissäge, eine Abrichte, einen
                    Exzenterschleifer und eine Oberfräse.</p>
                </section>
                <aside class="teaser"></aside>
                <div class="clear"></div>
            </div>
            <?php include $basePath . 'components/global/footer.php'; ?>
        </div>
    </body>
</html>
