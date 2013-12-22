<?php
$basePath = $_SERVER['DOCUMENT_ROOT'];
if(substr($basePath, -1, 1) != '/') { $basePath .= '/'; }
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include $basePath . 'components/global/head.php'; ?>
        <script type="text/javascript" src="/assets/javascript/talkingtime.js"></script>
    </head>
    <body>
        <div class="website">
            <?php include $basePath . 'components/global/header.php'; ?>
            <div id="main">
                <?php include $basePath . 'components/global/subnavi.php'; ?>
                <section class="content" style="width:80%;">
                    <h1>Redezeit app</h1>
                    <div class="talkingtime">
                        <div class="start">Start</div>
                        <div class="stop">Stop<span class="time"></span></div>
                        <div class="pause talker" data-time="0"><span class="name">Pause</span><span class="time"></span><div class="chart"></div></div>
                        <div class="newTalker">
                            <input type="text" /><div>Add</div><br>
                            <input type="checkbox" id="toTop" value="top"><label for="toTop">move active to top</label>
                        </div>
                    </div>
                    
                </section>
                <div class="clear"></div>
            </div>
            <?php include $basePath . 'components/global/footer.php'; ?>
        </div>
    </body>
</html>
