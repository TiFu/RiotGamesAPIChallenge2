<?php
class Dervish_Blade extends Item {
	function __construct() {
		parent::__construct(3137, "Dervish Blade", array("PercentAttackSpeedMod"=> 0.5,"FlatSpellBlockMod"=> 45,), "3137.png", "+50% Attack Speed<br>+45 Magic Resist<br>+10% Cooldown Reduction<br><br><active>UNIQUE Active - Quicksilver:</active> Removes all debuffs, and if champion is melee, also grants +50% bonus Movement Speed for 1 second (90 second cooldown).");
	}

	function applySpecial($champion, $enemy) {}
}
?>