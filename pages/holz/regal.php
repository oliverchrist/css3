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
                    <h1>Regal</h1>
                    <a class="floatLeft christbox" href="images/regal01.JPG">
                        <img src="images/regal01Thumb.JPG" alt="Regal" />
                    </a>
                    <p>Im Grunde schaut dies ganz einfach aus, aber die Schwierigkeit liegt darin diese unregelmäßig gearteten Äste gerade an die Wand zu bekommen, auch so, daß das darauf liegende Brett später waagerecht ist und nicht wackelt. Das Brett stammt aus dem Baumarkt muss ich hier zugeben, es diente mal als Abdeckung für eine Heizung und wurde für das Regal recycled.</p>
                </section>
                <aside class="teaser"></aside>
                <div class="clear"></div>
            </div>
            <?php include $basePath . 'components/global/footer.php'; ?>
        </div>
    </body>
</html>
