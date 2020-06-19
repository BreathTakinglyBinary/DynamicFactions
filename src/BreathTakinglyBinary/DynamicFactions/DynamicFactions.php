<?php
declare(strict_types=1);

namespace BreathTakinglyBinary\DynamicFactions;

use BreathTakinglyBinary\DynamicFactions\commands\BaseFactionCommand;
use pocketmine\plugin\PluginBase;

class DynamicFactions extends PluginBase{

    /** @var DynamicFactions */
    private static $instance;

    /** @var FactionManager */
    private $factionManager;

    public function onEnable() : void{
        self::$instance = $this;
        $this->factionManager = new FactionManager();
        $this->getServer()->getCommandMap()->register("dynamicfactions", new BaseFactionCommand(
            $this,
            "faction",
            "The Main Faction command",
            ["f", "factions"]
        ));
    }

    /**
     * @return DynamicFactions|null
     */
    public static function getInstance() : ?DynamicFactions{
        return self::$instance;
    }

    /**
     * @return FactionManager
     */
    public function getFactionManager() : FactionManager{
        return $this->factionManager;
    }
}