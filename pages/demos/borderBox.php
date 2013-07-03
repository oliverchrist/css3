<?php
$basePath = $_SERVER['DOCUMENT_ROOT'];
if(substr($basePath, -1, 1) != '/') { $basePath .= '/'; }
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include $basePath . 'components/global/head.php'; ?>
        <style>
            .c0 { width:33.3%; height:300px; background:yellow; position:relative; margin-top:100px; }
            .c1 { width:50%; position:relative; padding-right:20px; float:left; }
            .c2  { width:100%; position:absolute; bottom:0; background:red; display:table; }
        </style>
    </head>
    <body>
        <div class="website">
            <?php include $basePath . 'components/global/header.php'; ?>
            <div id="main">
                <?php include $basePath . 'components/global/subnavi.php'; ?>
                <section class="content" style="width:80%;">
                    <h1>box-sizing: border-box FF Test</h1>
                    <div class="c0">
                        <div class="c1">
                            <img src="images/loadingExample40.jpg" width="100%" />
                            <div class="c2">Lorem ipsum.</div>
                        </div>
                        <div class="c1">
                            <img src="images/loadingExample40.jpg" width="100%" />
                            <div class="c2">Lorem ipsum.</div>
                        </div>
                    </div>
                </section>
                <div class="clear"></div>
            </div>
            <?php include $basePath . 'components/global/footer.php'; ?>
        </div>
    </body>
</html>
