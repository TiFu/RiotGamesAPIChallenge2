<?php
class Chain_Vest extends Item {
	function __construct() {
		parent::__construct(1031, "Chain Vest", array("FlatArmorMod"=> 40,), "1031.png", "+40 Armor");
	}

	function applySpecial($champion, $enemy) {}
}
?>