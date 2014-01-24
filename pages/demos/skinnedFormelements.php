<?php
$basePath = $_SERVER['DOCUMENT_ROOT'];
if(substr($basePath, -1, 1) != '/') { $basePath .= '/'; }
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include $basePath . 'components/global/head.php'; ?>
        <link rel="stylesheet" href="/assets/stylesheets/form.css" />
        <script type="text/javascript" src="/assets/javascript/custom-form-elements.js"></script>
    </head>
    <body>
        <div class="website">
            <?php include $basePath . 'components/global/header.php'; ?>
            <div id="main">
                <?php include $basePath . 'components/global/subnavi.php'; ?>
                <section class="content" style="width:80%;">
                    <h1>Skinned Form Elements</h1>
                    <h2>input text</h2>
                    <div class="inputField">
                        <input type="text" value="lorem ipsum" />
                    </div>
                    <h2>textarea</h2>
                    <div class="inputField">
                        <textarea>lorem ipsum</textarea>
                    </div>
                    <h2>input radio</h2>
                    <div class="inputField">
                        <input type="radio" class="styled" name="radio" id="mr" /><label for="mr">Herr</label>
                        <input type="radio" class="styled" name="radio" id="mrs" /><label for="mrs">Frau</label>
                        <div class="clear"></div>
                    </div>
                    <h2>input checkbox</h2>
                    <div class="inputField">
                        <input type="checkbox" class="styled" id="lorem" checked="checked" /><label for="lorem">lorem</label>
                        <input type="checkbox" class="styled" id="ipsum" /><label for="ipsum">ipsum1</label>
                        <div class="clear"></div>
                    </div>
                    <h2>select skinned</h2>
                    <div class="inputField">
                        <select name="" class="styled">
                            <option value="">Lorem ipsum dolor sit.</option>
                            <option value="">Ea aperiam pariatur harum.</option>
                            <option value="">Reiciendis facere fuga nam.</option>
                            <option value="">Ipsa odio deserunt exercitationem.</option>
                        </select>
                    </div>
                    <h2>select unskinned</h2>
                    <div class="inputField">
                        <select name="">
                            <option value="">Lorem ipsum.</option>
                            <option value="">Quam quod?</option>
                            <option value="">Similique in?</option>
                            <option value="">Hic blanditiis?</option>
                            <option value="">Repudiandae molestiae.</option>
                        </select>
                    </div>
                        
                </section>
                <div class="clear"></div>
            </div>
            <?php include $basePath . 'components/global/footer.php'; ?>
        </div>
    </body>
</html>
