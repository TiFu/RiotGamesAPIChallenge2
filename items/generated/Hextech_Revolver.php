<?php
class Hextech_Revolver extends Item {
	function __construct() {
		parent::__construct(3145, "Hextech Revolver", array("FlatMagicDamageMod"=> 40,), "3145.png", "+40 Ability Power<br><br><unique>UNIQUE Passive:</unique> +12% Spell Vamp<br><br><i>(Spell Vamp: Abilities heal for a percentage of the damage they deal. Area of Effect spells only grant one-third of the healing from Spell Vamp.)</i>");
	}

	function applySpecial($champion, $enemy) {}
}
?>