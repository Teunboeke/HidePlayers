<?php

namespace Teunboeke\hideplayers;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\utils\Config;

class Hide extends PluginBase implements Listener{
  
  	public function onEnable() {
              $this->getServer()->getCommandMap()->register("hideplayers", new HidePlayerCommand($this));
            $this->getServer()->getCommandMap()->register("showplayers", new ShowPlayerCommand($this));
      		$this->saveResource("settings.yml");
  		$settings = new Config($this->getDataFolder() . "settings.yml", Config::YAML); 
          }
  
  	public function onDisable() {
     }
  
  }
