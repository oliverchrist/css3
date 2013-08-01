<?php
require '../../de/christ/Mail.php';
use de\christ\Mail;
    
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
                <section class="content" style="width:80%;">
                    <h1>Email Test</h1>
                    <?php
                        $emailBody = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
                        $emailBodyHtml = file_get_contents('/home/christ/git/mym_hlk_prototype/app/emailMessage.html');
                        if(Mail::send('christ@mediaman.de', 'Email Test', $emailBody, $emailBodyHtml, 'christ@mediaman.de')) {
                            echo 'Ihre Email wurde versendet.';
                        }else{
                            echo 'Mail konnte nicht verschickt werden';
                        }                    
                    ?>
                </section>
                <div class="clear"></div>
            </div>
            <?php include $basePath . 'components/global/footer.php'; ?>
        </div>
    </body>
</html>
