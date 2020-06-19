<?php

declare(strict_types=1);

namespace BreathTakinglyBinary\DynamicFactions\events\management;

use BreathTakinglyBinary\DynamicFactions\events\FactionEvent;
use BreathTakinglyBinary\DynamicFactions\Faction;
use BreathTakinglyBinary\DynamicFactions\players\FactionsPlayer;
use pocketmine\event\Cancellable;
use pocketmine\Player;

class FactionInviteEvent extends FactionEvent implements Cancellable{

    /**
     * @var FactionsPlayer
     */
    private $invitedBy;

    /**
     * @var Player
     */
    private $invited;

    public function __construct(Faction $faction, FactionsPlayer $invitedBy, Player $invited){
        parent::__construct($faction);
        $this->invitedBy = $invitedBy;
        $this->invited = $invited;
    }

    public function getInvitedBy() : Player{
        return $this->invited;
    }

}