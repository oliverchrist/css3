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
                    <h1>Submit Reducer Target</h1>
                    <p><?php echo $_POST['text'] . '<br>' . $_POST['clicks'] ?></p>
                </section>
                <aside class="teaser"></aside>
                <div class="clear"></div>
            </div>
            <?php include $basePath . 'components/global/footer.php'; ?>
        </div>
    </body>
</html>
