<?php
class Ardent_Censer extends Item {
	function __construct() {
		parent::__construct(3504, "Ardent Censer", array("FlatMagicDamageMod"=> 40,), "3504.png", "+40 Ability Power<br>+10% Cooldown Reduction<br><mana>+100% Base Mana Regen </mana><br><br><unique>UNIQUE Passive:</unique> +8% Movement Speed<br><unique>UNIQUE Passive:</unique> Your heals and shields on another allied champion grant them 15% Attack Speed and 30 magic damage on-hit for 6 seconds.<br><br><i>(This does not include regeneration effects or effects on yourself.)");
	}

	function applySpecial($champion, $enemy) {
		$champion->increaseStat("cdr", 10);
		$champion->increaseStatPercentBase("mpregen", 1);
		$champion->increaseStatPercentBase("movespeed", 0.08);
	}
}
?>
