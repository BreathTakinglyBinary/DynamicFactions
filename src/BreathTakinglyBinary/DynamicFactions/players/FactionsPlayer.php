<?php

declare(strict_types=1);

namespace BreathTakinglyBinary\DynamicFactions\players;

use BreathTakinglyBinary\DynamicFactions\DynamicFactions;
use BreathTakinglyBinary\DynamicFactions\Faction;
use BreathTakinglyBinary\DynamicFactions\FactionManager;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\utils\UUID;

class FactionsPlayer{

    public function __construct(UUID $uuid, string $username, ?string $faction, ?string $role){
        $this->uuid = $uuid;
        $this->username = $username;
        $this->faction = $faction;
        $this->role = $role;
    }

    public function getUuid() : UUID{
        return $this->uuid;
    }

    public function getUsername() : string{
        return $this->username;
    }

    public function setUsername(string $username) : void{
        $this->username = $username;
    }

    public function getFaction() : ?Faction{
        return $this->faction === null ? null : FactionManager::getInstance()->getFaction($this->faction);
    }

    public function setFaction(?Faction $faction) : void{
        $this->faction = $faction === null ? null : $faction->getId();
    }

    public function getRole() : ?string{
        return $this->role;
    }

    public function setRole(?string $role) : void{
        $this->role = $role;
    }

}