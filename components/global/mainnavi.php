<?php
$jsonfile = file_get_contents($basePath . 'config/subnavi.json');
$jsonarray = json_decode($jsonfile);

echo '<nav class="mainnavi">';
    foreach ($jsonarray->subnavi as $key => $value) {
        echo "<a href=\"$value->href\" target=\"$value->target\">$value->label</a>";
    }
echo '</nav>';
?>
