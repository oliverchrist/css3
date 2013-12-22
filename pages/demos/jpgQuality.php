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
                    <h1>Verschidene Komprimierungen eines jpgs</h1>
                    <h2>Qualität 90</h2>
                    <img src="images/loadingExample90.jpg">
                    <h2>Qualität 80</h2>
                    <img src="images/loadingExample80.jpg">
                    <h2>Qualität 70</h2>
                    <img src="images/loadingExample70.jpg">
                    <h2>Qualität 60</h2>
                    <img src="images/loadingExample60.jpg">
                    <h2>Qualität 50</h2>
                    <img src="images/loadingExample50.jpg">
                    <h2>Qualität 40</h2>
                    <img src="images/loadingExample40.jpg">
                    <h2>Qualität 30</h2>
                    <img src="images/loadingExample30.jpg">
                    <h2>Qualität 20</h2>
                    <img src="images/loadingExample20.jpg">
                    <h2>Qualität 10</h2>
                    <img src="images/loadingExample10.jpg">
                    <h2>Qualität 5</h2>
                    <img src="images/loadingExample5.jpg">

                </section>
                <aside class="teaser"></aside>
                <div class="clear"></div>
            </div>
            <?php include $basePath . 'components/global/footer.php'; ?>
        </div>
    </body>
</html>
