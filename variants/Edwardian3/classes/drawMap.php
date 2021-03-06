<?php
/*
	Copyright (C) 2018 Enriador & Oliver Auth

	This file is part of the Edwardian variant for vDiplomacy

	The Edwardian variant for vDiplomacy is free software: you can redistribute
	it and/or modify it under the terms of the GNU Affero General Public License
	as published by the Free Software Foundation, either version 3 of the License,
	or (at your option) any later version.

	The Edwardian variant for vDiplomacy is distributed in the hope that it will
	be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
	See the GNU General Public License for more details.

	You should have received a copy of the GNU Affero General Public License
	along with vDiplomacy. If not, see <http://www.gnu.org/licenses/>.

*/

defined('IN_CODE') or die('This script can not be run by itself.');

class CustomIcons_drawmap extends drawmap
{
	// Arrays for the custom icons:
	protected $unit_c =array(); // An array to store the owner of each territory
	protected $army_c =array(); // Custom army icons
	protected $fleet_c=array(); // Custom fleet icons

	// Load the custom icons...
	protected function loadImages()
	{
		global $Variant;

		$this->army_c[0]  = $this->loadImage('contrib/'.($this->smallmap ? 'small' : '' ).'army.png');
		$this->fleet_c[0] = $this->loadImage('contrib/'.($this->smallmap ? 'small' : '' ).'fleet.png');
		for ($i=1; $i<=count($Variant->countries); $i++) {
			$this->army_c[$i]  = $this->loadImage('variants/'.$Variant->name.'/resources/'.($this->smallmap ? 'small' : '' ).'army' .$Variant->countries[$i-1].'.png');
			$this->fleet_c[$i] = $this->loadImage('variants/'.$Variant->name.'/resources/'.($this->smallmap ? 'small' : '' ).'fleet'.$Variant->countries[$i-1].'.png');
		}
		parent::loadImages();
	}

	// Save the countryID for every colored Territory (and their coasts)
	public function colorTerritory($terrID, $countryID)
	{
		$this->unit_c[$terrID]=$countryID;
		foreach (preg_grep( "/^".$this->territoryNames[$terrID].".* Coast.$/", $this->territoryNames) as  $id=>$name)
			$this->unit_c[$id]=$countryID;
		parent::colorTerritory($terrID, $countryID);
	}

	// Overwrite the country if a unit needs to draw a flag (and don't draw the flag) -> we use custom icons instead
	public function countryFlag($terrName, $countryID)
	{
		$this->unit_c[$terrName]=$countryID;
	}

	// Draw the custom icons:
	public function addUnit($terrName, $unitType)
	{
		$this->army  = $this->army_c[$this->unit_c[$terrName]];
		$this->fleet = $this->fleet_c[$this->unit_c[$terrName]];
		parent::addUnit($terrName, $unitType);
	}

}

class Edwardian3Variant_drawMap extends CustomIcons_drawmap {

	protected $countryColors = array(
		0 => array(255, 194, 153), // Neutral
		1 => array(204,  63,  61), // Austria-Hungary
		2 => array(255, 153, 153), // Britain
		3 => array( 89, 153, 255), // France
		4 => array( 89,  89,  89), // Germany
		5 => array(117, 204,  71), // Italy
		6 => array(255, 245, 231), // Russia
		7 => array(201, 147,  92)  // Turkey
	);

	protected function resources() {

		global $Variant;

		if( $this->smallmap )
		{
			return array(
				'map'     =>'variants/'.$Variant->name.'/resources/smallmap.png',
				'army'    =>'contrib/smallarmy.png',
				'fleet'   =>'contrib/smallfleet.png',
				'names'   =>'variants/'.$Variant->name.'/resources/smallmapNames.png',
				'standoff'=>'images/icons/cross.png'
			);
		}
		else
		{
			return array(
				'map'     =>'variants/'.$Variant->name.'/resources/map.png',
				'army'    =>'contrib/army.png',
				'fleet'   =>'contrib/fleet.png',
				'names'   =>'variants/'.$Variant->name.'/resources/mapNames.png',
				'standoff'=>'images/icons/cross.png'
			);
		}
	}

}

?>
