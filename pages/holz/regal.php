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
                    <div class="floatLeft">
                        <a class="christbox" href="images/regal01.JPG">
                            <img src="images/regal01Thumb.JPG" alt="Regal" />
                        </a>
                        <div class="thumbs">
                            <a href="images/regal02.JPG" class="christbox"><img src="images/regal02Thumb.JPG"></a>
                            <a href="images/regal03.JPG" class="christbox"><img src="images/regal03Thumb.JPG"></a>
                            <a href="images/regal04.JPG" class="christbox"><img src="images/regal04Thumb.JPG"></a>
                            <a href="images/regal05.JPG" class="christbox"><img src="images/regal05Thumb.JPG"></a>
                            <a href="images/regal06.JPG" class="christbox"><img src="images/regal06Thumb.JPG"></a>
                            <a href="images/regal07.JPG" class="christbox"><img src="images/regal07Thumb.JPG"></a>
                            <a href="images/regal08.JPG" class="christbox"><img src="images/regal08Thumb.JPG"></a>
                            <a href="images/regal09.JPG" class="christbox"><img src="images/regal09Thumb.JPG"></a>
                            <a href="images/regal10.JPG" class="christbox"><img src="images/regal10Thumb.JPG"></a>
                            <a href="images/regal11.JPG" class="christbox"><img src="images/regal11Thumb.JPG"></a>
                            <a href="images/regal12.JPG" class="christbox"><img src="images/regal12Thumb.JPG"></a>
                            <a href="images/regal13.JPG" class="christbox"><img src="images/regal13Thumb.JPG"></a>
                            <a href="images/regal14.JPG" class="christbox"><img src="images/regal14Thumb.JPG"></a>
                        </div>
                    </div>
                    <p>Im Grunde schaut dies ganz einfach aus, aber die Schwierigkeit liegt darin diese unregelmäßig gearteten Äste gerade an die Wand zu bekommen, auch so, daß das darauf liegende Brett später waagerecht ist und nicht wackelt. Das Brett stammt aus dem Baumarkt muss ich hier zugeben, es diente mal als Abdeckung für eine Heizung und wurde für das Regal recycled.</p>
                </section>
                <aside class="teaser"></aside>
                <div class="clear"></div>
            </div>
            <?php include $basePath . 'components/global/footer.php'; ?>
        </div>
    </body>
</html>
