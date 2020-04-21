<?php
declare(strict_types=1);

namespace BreathTakinglyBinary\DynamicFactions\events;


use BreathTakinglyBinary\DynamicFactions\Faction;
use pocketmine\event\Cancellable;
use pocketmine\event\Event;

abstract class FactionEvent extends Event implements Cancellable{

    private $faction;

    public function __construct(Faction $faction){
        $this->faction = $faction;
    }

    /**
     * @return Faction
     */
    public function getFaction() : Faction{
        return $this->faction;
    }
}