<?php
declare(strict_types=1);

namespace BreathTakinglyBinary\DynamicFactions;


use pocketmine\Player;

class Faction{


    private $id;

    /** @var string */
    private $name;

    /** @var int */
    private $strength = 0;

    /** @var string[] */
    private $members;

    /** @var array */
    private $enemies = [];

    /** @var array */
    private $allies = [];

    public function __construct(string $id, string $name, array $members = [], array $enemies = [], array $allies = []){
        $this->id = $id;
        $this->name = $name;
        $this->members = $members;
        $this->enemies = $enemies;
        $this->allies = $allies;
    }

    /**
     * @return string
     */
    public function getId() : string{
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName() : string{
        return $this->name;
    }

    public function isMember(Player $player) : bool{
        return isset($this->members[$player->getUniqueId()->toString()]);
    }

    public function addMember(Player $player) : bool{
        $uuid = $player->getUniqueId()->toString();
        $this->members[$uuid] = $uuid;
    }

    public function removeMember(Player $player) : bool{

    }

    public function isAlly(Faction $faction) : bool{
        return isset($this->allies[$faction->getId()]);
    }

    public function addAlly(Faction $faction) : void{
        $this->removeEnemy($faction);
        $this->allies[$faction->getId()] = $faction->getId();
    }

    public function removeAlly(Faction $faction) : void{
        unset($this->allies[$faction->getId()]);
    }

    public function isEnemy(Faction $faction) : bool{
        return isset($this->enemies[$faction->getId()]);
    }

    public function addEnemy(Faction $faction) : void{
        $this->removeAlly($faction);
        $this->enemies[$faction->getId()] = $faction->getId();
    }

    public function removeEnemy(Faction $faction) : void{
        unset($this->enemies[$faction->getId()]);
    }

}