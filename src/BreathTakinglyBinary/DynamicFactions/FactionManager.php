<?php
declare(strict_types=1);

namespace BreathTakinglyBinary\DynamicFactions;


class FactionManager{

    /** @var Faction[] */
    private $factions;

    public function __construct(){
    }

    /**
     * Used to add an existing Faction when Loading from a provider.
     *
     * @param Faction $faction
     */
    public function registerFaction(Faction $faction) : void{

    }

    public function createFaction(string $name) : void{

    }

    public function disbandFaction(Faction $faction) : void{

    }

    public function getFactionByName(string $name) : ?Faction{

    }

    public function getFactionByID(string $id) : ?Faction{

    }

}