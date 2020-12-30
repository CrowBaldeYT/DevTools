<?php

declare(strict_types=1);

#%{Namespace}

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\Server;

class Main extends PluginBase implements Listener{

  public function onEnable(){
   $this->getServer()->getLogger()->info("Loaded Succesfully our Plugin");
  }
}
