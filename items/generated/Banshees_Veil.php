<?php
class Banshees_Veil extends Item {
	function __construct() {
		parent::__construct(3102, "Banshee's Veil", array("FlatHPPoolMod"=> 450,"FlatSpellBlockMod"=> 55,), "3102.png", "+450 Health<br>+55 Magic Resist<br>+100% Base Health Regeneration <br><br><unique>UNIQUE Passive:</unique> Grants a spell shield that blocks the next enemy ability. This shield refreshes after no damage is taken from enemy champions for 40 seconds.");
	}

	function applySpecial($champion, $enemy) {
		$champion->increaseStatPercentBase("hpregen", 1);	
	}
}
?>
