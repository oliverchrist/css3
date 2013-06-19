<?php
$basePath = $_SERVER['DOCUMENT_ROOT'];
if(substr($basePath, -1, 1) != '/') { $basePath .= '/'; }
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include $basePath . 'components/global/head.php'; ?>
        <style>
            .content img { float:left; width: 50%; height:50%; }
        </style>
        <script type="text/javascript" src="/assets/javascript/lazyload.js"></script>
    </head>
    <body>
        <div class="website">
            <?php include $basePath . 'components/global/header.php'; ?>
            <div id="main">
                <?php include $basePath . 'components/global/subnavi.php'; ?>
                <section class="content" style="width:80%;">
                    <h1>progessive jpg lazyload</h1>
                    <img src="/assets/images/global/trans.gif" data-lazyload="images/loadingExampleProgressive01.jpg" width="390" height="390">
                    <img src="/assets/images/global/trans.gif" data-lazyload="images/loadingExampleProgressive02.jpg" width="390" height="390">
                    <img src="/assets/images/global/trans.gif" data-lazyload="images/loadingExampleProgressive03.jpg" width="390" height="390">
                    <img src="/assets/images/global/trans.gif" data-lazyload="images/loadingExampleProgressive04.jpg" width="390" height="390">
                    <img src="/assets/images/global/trans.gif" data-lazyload="images/loadingExampleProgressive05.jpg" width="390" height="390">
                    <img src="/assets/images/global/trans.gif" data-lazyload="images/loadingExampleProgressive06.jpg" width="390" height="390">
                    <img src="/assets/images/global/trans.gif" data-lazyload="images/loadingExampleProgressive07.jpg" width="390" height="390">
                    <img src="/assets/images/global/trans.gif" data-lazyload="images/loadingExampleProgressive08.jpg" width="390" height="390">
                    <img src="/assets/images/global/trans.gif" data-lazyload="images/loadingExampleProgressive09.jpg" width="390" height="390">
                    <img src="/assets/images/global/trans.gif" data-lazyload="images/loadingExampleProgressive10.jpg" width="390" height="390">
                </section>
                <div class="clear"></div>
            </div>
            <?php include $basePath . 'components/global/footer.php'; ?>
        </div>
    </body>
</html>
