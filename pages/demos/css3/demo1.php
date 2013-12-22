<?php
$basePath = $_SERVER['DOCUMENT_ROOT'];
if(substr($basePath, -1, 1) != '/') { $basePath .= '/'; }
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include $basePath . 'components/global/head.php'; ?>
        <link rel="stylesheet" href="/assets/stylesheets/demo1.css" />
        <script type="text/javascript" src="/assets/javascript/demo1.js"></script>
    </head>
    <body>
        <div class="website">
            <?php include $basePath . 'components/global/header.php'; ?>
            <div id="main">
                <?php include $basePath . 'components/global/subnavi.php'; ?>
                <section class="content">
                    <h1>Layer Demo</h1>
                    <p>Hier öffnet sich ein Layer indem er den aufrufenden Content auseinander schiebt. Die Besonderheit hier ist, daß versucht wird einen Effekt zu erzeugen, als hingen alle vier Layer zusammen, so als entfalte man ein Papier. Da es keine richtigen Verbindungspunkte zwischen den Flächen gibt ist der Effekt unter umständen etwas verwirrend.</p>
                    <div class="frame frameLeft">
                        <a href="#" class="anim">OP</a>
                    </div>
                    <div class="stageFrame">
                        <div class="stage">
                            <div class="col col1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                <a href="#" class="anim">CLO</a>
                            </div>
                            <div class="col col2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                <a href="#" class="anim">OSE</a>
                            </div>
                        </div>
                    </div>
                    <div class="frame frameRight">
                        <a href="#" class="anim">EN</a>
                    </div>
                </section>
                <aside class="teaser"></aside>
                <div class="clear"></div>
            </div>
            <?php include $basePath . 'components/global/footer.php'; ?>
        </div>
    </body>
</html>
