<?php
declare(strict_types=1);

namespace BreathTakinglyBinary\DynamicFactions;


use pocketmine\plugin\PluginBase;

class DynamicFactions extends PluginBase{

    /** @var DynamicFactions */
    private static $instance;

    /** @var FactionManager */
    private $factionManager;

    public function onEnable(){
        self::$instance = $this;
        $this->factionManager = new FactionManager();
        $this->getServer()->getCommandMap()->register("dynamicfactions", new BaseFactionCommand("faction", "", ["f"]));
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