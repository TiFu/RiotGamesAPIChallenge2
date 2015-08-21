<?php
class Ninja_Tabi extends Item {
	function __construct() {
		parent::__construct(3047, "Ninja Tabi", array("FlatArmorMod"=> 25,"FlatMovementSpeedMod"=> 45,), "3047.png", "+25 Armor<br><br><unique>UNIQUE Passive:</unique> Blocks 10% of the damage from basic attacks.<br><unique>UNIQUE Passive - Enhanced Movement:</unique> +45 Movement Speed<br><br><i>(Unique Passives with the same name don't stack.)</i>");
	}

	function applySpecial($champion, $enemy) {}
}
?>