<?php
$basePath = $_SERVER['DOCUMENT_ROOT'];
if(substr($basePath, -1, 1) != '/') { $basePath .= '/'; }
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include $basePath . 'components/global/head.php'; ?>
        <style>
            td { line-height:0; }
        </style>
    </head>
    <body>
        <div class="website">
            <?php include $basePath . 'components/global/header.php'; ?>
            <div id="main">
                <?php include $basePath . 'components/global/subnavi.php'; ?>
                <section class="content">
                    <h1>Dieses Bild besteht aus einem einzigen Bild</h1>
                    <p>7 requests  ❘  1.3 MB transferred  ❘  111 ms (onload: 134 ms, DOMContentLoaded: 81 ms)</p>
                    <table>
                        <tr>
                            <td><img src="images/lufiShuffled.png" /></td>
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
