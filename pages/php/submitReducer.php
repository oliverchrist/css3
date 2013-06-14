<?php
$basePath = $_SERVER['DOCUMENT_ROOT'];
if(substr($basePath, -1, 1) != '/') { $basePath .= '/'; }
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include $basePath . 'components/global/head.php'; ?>
        <script>
        $(function(){
            $('#senden').click(function(e){
                $('#clicks').val(1 + $('#clicks').val());
                e.preventDefault();
                $('form').submit();
            });
            var submited = false;
            $('form').submit(function(e){
                e.preventDefault();
                if(submited == false){
                    console.log('submit');
                    submited = true;
                }else{
                    console.log('kein submit mehr');
                }
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
                    <h1>Submit Reducer</h1>
                    <p>Der Submit Reducer verhindert per Javascript ein mehrmaliges abschicken eines Formulars</p>
                    <div class="tx-powermail-pi1 form">
                        <form action="submitReducerTarget.php" method="post">
                            <input type="text" name="text" />
                            <input type="hidden" value="0" name="clicks" id="clicks" />
                            <input type="button" id="senden" value="abschicken" />
                        </form>
                    </div>
                </section>
                <aside class="teaser"></aside>
                <div class="clear"></div>
            </div>
            <?php include $basePath . 'components/global/footer.php'; ?>
        </div>
    </body>
</html>
