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
        <script>
            $(document).ready(function(){
                $('#shuffle tr td:even').each(function(){
                    var t = $(this); 
                    t.append(t.next().find('img'));
                    t.next().append(t.find('img:first-child'));
                });
                $('#shuffle tr:odd').each(function(){
                    $(this).css('transform', 'rotateY(180deg)');
                });
            });
        </script>
    </head>
    <body>
        <div class="website">
            <?php include $basePath . 'components/global/header.php'; ?>
            <div id="main">
                <?php include $basePath . 'components/global/subnavi.php'; ?>
                <section class="content">
                    <h1>Dieses Bild besteht aus 64 Einzelbildern</h1>
                    <p>70 requests  ❘  1.2 MB transferred  ❘  164 ms (onload: 166 ms, DOMContentLoaded: 110 ms)</p>
                    <table id="shuffle">
                        <tr>
                            <td><img src="images/lufi-0-0.png" /></td>
                            <td><img src="images/lufi-1-0.png" /></td>
                            <td><img src="images/lufi-2-0.png" /></td>
                            <td><img src="images/lufi-3-0.png" /></td>
                            <td><img src="images/lufi-4-0.png" /></td>
                            <td><img src="images/lufi-5-0.png" /></td>
                            <td><img src="images/lufi-6-0.png" /></td>
                            <td><img src="images/lufi-7-0.png" /></td>
                        </tr>
                        <tr>
                            <td><img src="images/lufi-0-1.png" /></td>
                            <td><img src="images/lufi-1-1.png" /></td>
                            <td><img src="images/lufi-2-1.png" /></td>
                            <td><img src="images/lufi-3-1.png" /></td>
                            <td><img src="images/lufi-4-1.png" /></td>
                            <td><img src="images/lufi-5-1.png" /></td>
                            <td><img src="images/lufi-6-1.png" /></td>
                            <td><img src="images/lufi-7-1.png" /></td>
                        </tr>
                        <tr>
                            <td><img src="images/lufi-0-2.png" /></td>
                            <td><img src="images/lufi-1-2.png" /></td>
                            <td><img src="images/lufi-2-2.png" /></td>
                            <td><img src="images/lufi-3-2.png" /></td>
                            <td><img src="images/lufi-4-2.png" /></td>
                            <td><img src="images/lufi-5-2.png" /></td>
                            <td><img src="images/lufi-6-2.png" /></td>
                            <td><img src="images/lufi-7-2.png" /></td>
                        </tr>
                        <tr>
                            <td><img src="images/lufi-0-3.png" /></td>
                            <td><img src="images/lufi-1-3.png" /></td>
                            <td><img src="images/lufi-2-3.png" /></td>
                            <td><img src="images/lufi-3-3.png" /></td>
                            <td><img src="images/lufi-4-3.png" /></td>
                            <td><img src="images/lufi-5-3.png" /></td>
                            <td><img src="images/lufi-6-3.png" /></td>
                            <td><img src="images/lufi-7-3.png" /></td>
                        </tr>
                        <tr>
                            <td><img src="images/lufi-0-4.png" /></td>
                            <td><img src="images/lufi-1-4.png" /></td>
                            <td><img src="images/lufi-2-4.png" /></td>
                            <td><img src="images/lufi-3-4.png" /></td>
                            <td><img src="images/lufi-4-4.png" /></td>
                            <td><img src="images/lufi-5-4.png" /></td>
                            <td><img src="images/lufi-6-4.png" /></td>
                            <td><img src="images/lufi-7-4.png" /></td>
                        </tr>
                        <tr>
                            <td><img src="images/lufi-0-5.png" /></td>
                            <td><img src="images/lufi-1-5.png" /></td>
                            <td><img src="images/lufi-2-5.png" /></td>
                            <td><img src="images/lufi-3-5.png" /></td>
                            <td><img src="images/lufi-4-5.png" /></td>
                            <td><img src="images/lufi-5-5.png" /></td>
                            <td><img src="images/lufi-6-5.png" /></td>
                            <td><img src="images/lufi-7-5.png" /></td>
                        </tr>
                        <tr>
                            <td><img src="images/lufi-0-6.png" /></td>
                            <td><img src="images/lufi-1-6.png" /></td>
                            <td><img src="images/lufi-2-6.png" /></td>
                            <td><img src="images/lufi-3-6.png" /></td>
                            <td><img src="images/lufi-4-6.png" /></td>
                            <td><img src="images/lufi-5-6.png" /></td>
                            <td><img src="images/lufi-6-6.png" /></td>
                            <td><img src="images/lufi-7-6.png" /></td>
                        </tr>
                        <tr>
                            <td><img src="images/lufi-0-7.png" /></td>
                            <td><img src="images/lufi-1-7.png" /></td>
                            <td><img src="images/lufi-2-7.png" /></td>
                            <td><img src="images/lufi-3-7.png" /></td>
                            <td><img src="images/lufi-4-7.png" /></td>
                            <td><img src="images/lufi-5-7.png" /></td>
                            <td><img src="images/lufi-6-7.png" /></td>
                            <td><img src="images/lufi-7-7.png" /></td>
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
