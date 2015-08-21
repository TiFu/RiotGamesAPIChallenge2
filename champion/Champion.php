<?php
class Champion {
	private $name; // Champion name
	private $stats = array();	// additional stats (items etc)
	private $baseStats = array(); // baseStats of this champion
	private itemInventory = array();
	private $picture;

	function __construct($champName) {
		$this->name = $champName;
		// get champData out of api by name (can't look up api definition atm but will when i'm back) and safe it in $baseStats
		$this->baseStats["magicdamage"] = 0; // set ap
		$this->baseStats["cdr"] = 0;
		$this->baseStats["percentattackspeed"] = 0;
	}	

	function increaseStat($statName, $statValue) {
		$this->stats[$statName] = $this->stats[$statName] + $statValue;
		if ($statName = "cdr") {
			$this->stats["cdr"] = min($this->stats["cdr"], 40);
		}
	}

	function calculateAttackSpeed() {
		return 0.625 / (1-$this->baseStats["attackspeedoffset"]) * (1 + $this->stats["percentattackspeed"]);
	}
	
	function increaseStatPercentBase($statName, $statValue) {
		$this->stats[$statName] = $this->stats[$statName] + $statValue * $this->baseStats[$statName];
	}

	function addItem($item) {
		if (is_a($item, "Item") {
			$this->itemInventory[] = $item; // addItem at the end
			return true;	
		} else {
			return false;
		}
	}
	
	function getStat($name) {
		return $this->stats[$name];
	}

	function getStats() {
		return $this->stats;
	}

	function recalculateStats() {
		$stats = $baseStats;
		usort($itemInventory, array('Item', 'compareTo'));
		foreach($itemInventory as $item) {
			$item->apply($this);
		}
	}

	function evaluateChampion() {
		// do some fancy formular to determine "the worth" of a champion.
	}
}
?>
