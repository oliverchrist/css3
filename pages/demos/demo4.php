<?php
$basePath = '../../';
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include $basePath . 'components/global/head.php'; ?>
        <link rel="stylesheet" href="/assets/stylesheets/demo4.css" />
        <script type="text/javascript" src="/assets/javascript/demo4.js"></script>
    </head>
    <body>
        <div class="website">
            <?php include $basePath . 'components/global/header.php'; ?>
            <div id="main">
                <?php include $basePath . 'components/global/subnavi.php'; ?>
                <section class="content">
                    <h1>Ollis css3 Spielwiese</h1>
                    <p>Hier entsteht meine css3 Spielwiese, ohne Rücksicht auf veraltete Browser</p>
                    <div id="graph">
                    <?php
                    for ($i=0; $i < 500; $i++) { 
                        echo "<div class=\"line\" style=\"left:{$i}px\"></div>";
                    }
                    ?>
                    </div>
                </section>
                <aside class="teaser"></aside>
                <div class="clear"></div>
            </div>
            <?php include $basePath . 'components/global/footer.php'; ?>
        </div>
    </body>
</html>
