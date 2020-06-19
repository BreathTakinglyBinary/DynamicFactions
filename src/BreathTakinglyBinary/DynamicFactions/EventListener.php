<?php

declare(strict_types=1);

namespace BreathTakinglyBinary\DynamicFactions;

use pocketmine\event\Listener;

class EventListener implements Listener{

    public function __construct(DynamicFactions $plugin){
        $this->plugin = $plugin;
    }



}