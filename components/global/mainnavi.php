<?php
$uri_parts = explode('/', $_SERVER["REQUEST_URI"]);
$jsonfile = file_get_contents($basePath . 'config/mainnavi.json');
$jsonarray = json_decode($jsonfile);
echo '<nav class="mainnavi">';
    foreach ($jsonarray->mainnavi as $key => $value) {
        $mainnavi_parts = explode('/', $value->href);
        #echo $mainnavi_parts[2];
        echo "<a href=\"$value->href\" target=\"$value->target\"";
        if($uri_parts[2] == $mainnavi_parts[2]){
            echo ' class="current"';
        }
        echo ">$value->label</a>";
    }
echo '</nav>';

#echo   "<div style=\"position:absolute; top:0; right:0;\">{$_SERVER["REQUEST_URI"]}, {$_SERVER["SCRIPT_NAME"]}, {$_SERVER["PHP_SELF"]}</div>";
?>
