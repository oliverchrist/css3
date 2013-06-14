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
                    <h1>session_id() und $_SERVER Superglobal</h1>
                    <?php
                    $a = session_id();
                    if(empty($a)) session_start();
                    echo "SID: ".SID."<br>session_id(): ".session_id()."<br>COOKIE: ".$_COOKIE["PHPSESSID"];
?>
                    <h1>$_SERVER</h1>
                    <pre>
                        <?php var_dump($_SERVER); ?>
                    </pre>
                </section>
                <aside class="teaser"></aside>
                <div class="clear"></div>
            </div>
            <?php include $basePath . 'components/global/footer.php'; ?>
        </div>
    </body>
</html>
