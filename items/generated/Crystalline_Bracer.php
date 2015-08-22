<?php
class Crystalline_Bracer extends Item {
	function __construct() {
		parent::__construct(3801, "Crystalline Bracer", array("FlatHPPoolMod"=> 200,), "3801.png", "+200 Health<br>+50% Base Health Regen ");
	}

	function applySpecial($champion, $enemy) {
		$champion->increaseStatPercentBase("hpregen", 0,5);
	}
}
?>