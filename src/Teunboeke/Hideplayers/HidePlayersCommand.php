<?php

declare(strict_types=1);

namespace Teunboeke/hideplayers 
  
  use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\command\PluginIdentifiableCommand;
use pocketmine\utils\TextFormat as TF;
use pocketmine\utils\Config;
use Teunboeke\hideplayers\hide;

class HidePlayersCommand extends Command {
