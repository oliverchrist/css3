<?php
class Subnavi {
    private $uri_parts;
    
    function __construct() {
        $this->uri_parts = explode('/', $_SERVER["REQUEST_URI"]);
    }
    
    function generateSubnavi($start_folder_counter, $start_folder){
        $jsonfile = file_get_contents($GLOBALS['basePath'] . $start_folder . '_config.json');
        $jsonarray = json_decode($jsonfile);
        foreach ($jsonarray->subnavi as $key => $value) {
            #echo end($uri_parts);
            #echo $this->uri_parts[$start_folder_counter + 1] .', '. str_replace('/', '', $value->href);
            $isCurrent = $this->uri_parts[$start_folder_counter + 1] == str_replace('/', '', $value->href);
            echo "<a href=\"/{$start_folder}{$value->href}\" target=\"$value->target\"";
            if($isCurrent){
                echo ' class="current"';
            }
            echo ">$value->label</a>";
            if(isset($value->isSubfolder) && $value->isSubfolder && $isCurrent && $start_folder_counter < 4){
                echo '<div>';
                #echo $start_folder_counter + 1 .', '. $start_folder . $this->uri_parts[$start_folder_counter + 1] . '/';
                $this->generateSubnavi($start_folder_counter + 1, $start_folder . $this->uri_parts[$start_folder_counter + 1] . '/');
                echo '</div>';
            }
        }
    }
    
    public function writeNavi(){
        echo '<nav class="subnavi">';
        if(count($this->uri_parts) >= 4){
            $this->generateSubnavi(2, 'pages/' . $this->uri_parts[2] . '/');
        }else{
            echo '&nbsp;';
        }
        echo '</nav>';
    }
}

$subnavigation = new Subnavi();
$subnavigation->writeNavi();
?>
