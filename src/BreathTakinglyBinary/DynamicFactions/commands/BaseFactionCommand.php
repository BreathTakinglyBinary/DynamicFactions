<?php
declare(strict_types=1);

namespace BreathTakinglyBinary\DynamicFactions;


use CortexPE\Commando\args\BaseArgument;
use CortexPE\Commando\BaseCommand;
use pocketmine\command\CommandSender;

class BaseFactionCommand extends BaseCommand{

    /**
     * This is where all the arguments, permissions, sub-commands, etc would be registered
     */
    protected function prepare() : void{
        $subCommands = [

        ];
        foreach($subCommands as $subCommand){
            $this->registerSubCommand($subCommand);
        }
    }

    /**
     * @param CommandSender  $sender
     * @param string         $aliasUsed
     * @param BaseArgument[] $args
     */
    public function onRun(CommandSender $sender, string $aliasUsed, array $args) : void{
        // TODO: Implement onRun() method.
    }
}