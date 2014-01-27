<?php
$basePath = $_SERVER['DOCUMENT_ROOT'];
if(substr($basePath, -1, 1) != '/') { $basePath .= '/'; }
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include $basePath . 'components/global/head.php'; ?>
        <style>
            td { line-height:0; padding:0!important; border:none!important; }
        </style>
    </head>
    <body>
        <div class="website">
            <?php include $basePath . 'components/global/header.php'; ?>
            <div id="main">
                <?php include $basePath . 'components/global/subnavi.php'; ?>
                <section class="content">
                    <h1>Dieses Bild besteht aus einem einzigen Bild</h1>
                    <p>7 requests  ❘  1.2 MB transferred  ❘  110 ms (onload: 111 ms, DOMContentLoaded: 85 ms)</p>
                    <table>
                        <tr>
                            <td><img src="images/lufi.png" /></td>
                        </tr>
                    </table>
                </section>
                <aside class="teaser"></aside>
                <div class="clear"></div>
            </div>
            <?php include $basePath . 'components/global/footer.php'; ?>
        </div>
    </body>
</html>
