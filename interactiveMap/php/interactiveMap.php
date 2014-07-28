<?php
if(!in_array('header.php', get_required_files())){
    chdir(dirname(__FILE__).'/../..');
    require_once('header.php');
}

class IAmap {

    protected $mapName;

    public function __construct($variant, $mapName = 'IA_smallmap.png') {
        $this->Variant = $variant;

        $this->mapName = $mapName;
    }

    protected $Variant;

    protected $map;
    protected $territoryPositions;
    protected $usedColors;

    public function drawMap() {
        if (!file_exists('variants/' . $this->Variant->name . '/interactiveMap/' . $this->mapName)) {
            ini_set("memory_limit", "1024M");

            $this->map = $this->loadMap();

            $this->territoryPositions = $this->getTerritoryPositions();
            $this->usedColors = $this->getColors();


            $this->colorTerritories();


            $cC = $this->coloredCorrectly();
            if ($cC != null)
                die($cC);

            $this->saveMap();
        }
    }

    protected $sourceMapName = 'smallmap.png';

    protected function loadMap($mapName = '') {
        $mapName = ($mapName == '') ? $this->sourceMapName : $mapName;

        $map = imagecreatefrompng('variants/' . $this->Variant->name . '/interactiveMap/' . $mapName);

        $map2 = imagecreatetruecolor(imagesx($map), imagesy($map));

        imagecopyresampled($map2, $map, 0, 0, 0, 0, imagesx($map), imagesy($map), imagesx($map), imagesy($map));

        imagedestroy($map);

        return $map2;
    }

    protected function getTerritoryPositions() {
        global $DB;

        $territoryPositionsSQL = "SELECT id, coast, smallMapX, smallMapY FROM wD_Territories WHERE mapID=" . $this->Variant->mapID;

        $territoryPositions = array();
        $tabl = $DB->sql_tabl($territoryPositionsSQL);
        while (list($terrID, $coast, $x, $y) = $DB->tabl_row($tabl)) {
            if ($coast != 'Child') {
                $territoryPositions[$terrID] = array(intval($x), intval($y));
            }
        }

        return $territoryPositions;
    }

    protected function getColors() {
        $colors = array();

        $colors[0] = array(//black borders
            'r' => 0,
            'g' => 0,
            'b' => 0
        );

        foreach ($this->territoryPositions as $terrID => $terrPos) {
            $rgb = imagecolorat($this->map, $terrPos[0], $terrPos[1]);
            $colors[$terrID] = array(
                'r' => ($rgb >> 16) & 0xFF,
                'g' => ($rgb >> 8) & 0xFF,
                'b' => $rgb & 0xFF
            );
        }

        return $colors;
    }

    protected function colorTerritories() {
        foreach ($this->territoryPositions as $terrID => $terrPos) {
            $this->usedColors[$terrID] = $this->colorTerritory($terrID);
            $color = imagecolorallocate($this->map, $this->usedColors[$terrID]['r'], $this->usedColors[$terrID]['g'], $this->usedColors[$terrID]['b']);
            imagefill($this->map, $terrPos[0], $terrPos[1], $color);
        }
    }

    protected function colorTerritory($terrID) {
        $territories = array_keys($this->usedColors, $this->usedColors[$terrID]);
        if (count($territories) > 1) {
            return $this->newColor();
        } else {
            return $this->usedColors[$terrID];
        }
    }

    protected function newColor() {

        $newColor = array(
            'r' => 255,
            'g' => 255,
            'b' => 255
        );

        for (; $newColor['r'] >= 0; $newColor['r']--) {
            if (in_array($newColor, $this->usedColors)) {
                for (; $newColor['g'] >= 0; $newColor['g']--) {
                    if (in_array($newColor, $this->usedColors)) {
                        for (; $newColor['b'] >= 0; $newColor['b']--) {
                            if (!in_array($newColor, $this->usedColors)) {
                                return $newColor;
                            }
                        }
                    } else {
                        return $newColor;
                    }
                }
            } else {
                return $newColor;
            }
        }

        return $newColor;
    }

    protected function coloredCorrectly() {
        $this->usedColors = $this->getColors();
        foreach ($this->usedColors as $color) {
            $territories = array_keys($this->usedColors, $color);
            if (count($territories) > 1) {
                return "Unable to load " . $this->mapName . " </br> The following territories aren't separated by a border: (only IDs)</br>" . print_r($territories, TRUE) . "</br> Please report this to an admin!";
            }
        }
        return null;
    }

    protected function saveMap() {
        imagepng($this->map, 'variants/' . $this->Variant->name . '/interactiveMap/' . $this->mapName);
        imagedestroy($this->map);
    }

    public function serveMap() {
        require_once('lib/html.php');
        
        define('DELETECACHE', 0);

        libHTML::serveImage('variants/' . $this->Variant->name . '/interactiveMap/' . $this->mapName);
    }

    public function createMapData() {
        if (!file_exists('variants/' . $this->Variant->name . '/cache/IA_mapData.map')) {
            ini_set("memory_limit", "1024M");
            set_time_limit(30);

            $colors = array();

            $map = imagecreatefrompng('variants/' . $this->Variant->name . '/interactiveMap/' . $this->mapName);

            $territoryPositions = $this->getTerritoryPositions();

            foreach ($territoryPositions as $terrID => $terrPos) {
                $colors[imagecolorat($map, $terrPos[0], $terrPos[1])]["ID"] = $terrID;
                $colors[imagecolorat($map, $terrPos[0], $terrPos[1])]["Positions"][] = $terrPos;
                imagefill($map, $terrPos[0], $terrPos[1], 0);
            }

            for ($y = 0; $y < imagesy($map); $y++) {
                for ($x = 0; $x < imagesx($map); $x++) {
                    $color = imagecolorat($map, $x, $y);
                    if ($color != 0) {
                        if (isset($colors[$color]["ID"])) {
                            $colors[$color]["Positions"][] = array($x, $y);
                            imagefill($map, $x, $y, 0);
                        }
                    }
                }
            }
            imagedestroy($map);
            //var_dump($colors);

            $terrColorPos = array();

            foreach ($colors as $content) {
                $terrColorPos[$content["ID"]] = $content["Positions"];
            }
            //var_dump($terrColorPos);

            file_put_contents('variants/' . $this->Variant->name . '/cache/IA_mapData.map', json_encode($terrColorPos));
        }
    }

    public function serveMapData() {
        echo file_get_contents('variants/' . $this->Variant->name . '/cache/IA_mapData.map');
    }
    
    protected function jsLoadBasicIAScripts() {
        libHTML::$footerIncludes[] = '../interactiveMap/javascript_1.0/interactiveMap.js';
	libHTML::$footerIncludes[] = '../interactiveMap/javascript_1.0/interactiveMapDraw.js';
	libHTML::$footerIncludes[] = '../interactiveMap/javascript_1.0/interactiveMapOrders.js';
	libHTML::$footerIncludes[] = '../interactiveMap/javascript_1.0/interactiveMapButtons.js';
    }
    
    protected function jsAutoloadScripts($IApath) {
        $directoryContent = scandir(l_r($IApath));
        
        foreach($directoryContent as $filename){
                if(pathinfo($IApath.'/'.$filename, PATHINFO_EXTENSION) == 'js')
                        libHTML::$footerIncludes[] = '../'.$IApath.'/'.$filename;
        }
    }
    
    protected function jsFooterScript() {
        global $User;
        
        if(isset($User->pointNClick)){    
            libHTML::$footerScript[] = 'interactiveMap.options.scrollbars = '.($User->scrollbars=='Yes' ? 'true' : 'false');
            libHTML::$footerScript[] = 'interactiveMap.options.greyOut = '.($User->terrGrey=='off' ? 'false' : 'true');
            libHTML::$footerScript[] = 'interactiveMap.options.unitGreyOut = '.($User->terrGrey=='all' ? 'true' : 'false');
            libHTML::$footerScript[] = 'interactiveMap.options.greyOutIntensity = 0.'.$User->greyOut;
        }
			
	libHTML::$footerScript[]   = 'loadIA();';
    }
    
    public function jsLoadInteractiveMap() {
        global $Game;
        
        $IApath = l_r('variants/'.$Game->Variant->name.'/interactiveMap');
        
        if(!file_exists($IApath)) return; //interactiveMap-feature not implemented for this variant
        
        $this->jsLoadBasicIAScripts();
        
        $this->jsAutoloadScripts($IApath);
        
        $this->jsFooterScript();
    }
}

function getIAmapObject(){
    $variant = loadVariant();
    
    $IAmapClassName = 'IAmap';
    if(file_exists('variants/' . $variant->name . '/interactiveMap/interactiveMap.php')){
        require_once 'variants/' . $variant->name . '/interactiveMap/interactiveMap.php';
        $IAmapClassName =  $variant->name.'Variant_IAmap';
    }
    
    return new $IAmapClassName($variant);
}

function loadVariant() {
    if (isset($_REQUEST['gameID'])) {
        return libVariant::loadFromGameID($_REQUEST['gameID']);
    } elseif (isset($_REQUEST['variantID'])) {
        return libVariant::loadFromVariantID($_REQUEST['variantID']);
    } else {
        die("No gameID/variantID");
    }
}

?>