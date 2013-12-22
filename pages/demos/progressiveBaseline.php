<?php
$basePath = $_SERVER['DOCUMENT_ROOT'];
if(substr($basePath, -1, 1) != '/') { $basePath .= '/'; }
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include $basePath . 'components/global/head.php'; ?>
        <style>
            .content img { float:left; }
        </style>
    </head>
    <body>
        <div class="website">
            <?php include $basePath . 'components/global/header.php'; ?>
            <div id="main">
                <?php include $basePath . 'components/global/subnavi.php'; ?>
                <section class="content" style="width:80%;">
                    <h1>progessive jpg vs baseline jpg</h1>
                    <img src="images/loadingExampleProgressive01.jpg" width="390" height="390">
                    <img src="images/loadingExampleBaseline01.jpg" width="390" height="390">
                    <img src="images/loadingExampleProgressive02.jpg" width="390" height="390">
                    <img src="images/loadingExampleBaseline02.jpg" width="390" height="390">
                    <img src="images/loadingExampleProgressive03.jpg" width="390" height="390">
                    <img src="images/loadingExampleBaseline03.jpg" width="390" height="390">
                    <img src="images/loadingExampleProgressive04.jpg" width="390" height="390">
                    <img src="images/loadingExampleBaseline04.jpg" width="390" height="390">
                    <img src="images/loadingExampleProgressive05.jpg" width="390" height="390">
                    <img src="images/loadingExampleBaseline05.jpg" width="390" height="390">
                </section>
                <div class="clear"></div>
            </div>
            <?php include $basePath . 'components/global/footer.php'; ?>
        </div>
    </body>
</html>
