<?php
$basePath = $_SERVER['DOCUMENT_ROOT'];
if(substr($basePath, -1, 1) != '/') { $basePath .= '/'; }
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include $basePath . 'components/global/head.php'; ?>
        <link rel="stylesheet" href="/assets/stylesheets/demo3.css" />
        <script type="text/javascript" src="/assets/javascript/demo3.js"></script>
    </head>
    <body>
        <div class="website">
            <?php include $basePath . 'components/global/header.php'; ?>
            <div id="main">
                <?php include $basePath . 'components/global/subnavi.php'; ?>
                <section class="content">
                    <h1>Sinuskurve</h1>
                    <p>Die Sinuskurve besteht auf 500 div Elementen, welche per Javasrcipt animiert werden. Die Demo versucht aus den starren Boxen auszubrechen, zeigt aber auch gleichzeitig die Grenzen eines solchen Unterfangens auf, da die Rechenleistung des Computers hier schnell an ihr Ende kommt.</p>
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
