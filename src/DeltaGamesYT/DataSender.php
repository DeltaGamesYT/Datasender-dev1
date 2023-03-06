<?php

namespace DeltaGamesYT;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\Config;
use pocketmine\Player;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerCommandPreprocessEvent;
use pocketmine\event\player\PlayerPreLoginEvent;
use pocketmine\Server;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class MainClass extends PluginBase implements Listener{
    public function onEnable(){
        $this->getLogger()->info("DeltaGamesYT / DataSender Activado. Siguenos en GitHub: https://www.github.com/DeltaGamesYT");
    }
    public function onDisable(){
        $this->getLogger()->info("DeltaGamesYT / DataSender Desactivado. Siguenos en GitHub: https://www.github.com/DeltaGamesYT");
    }
    
     public function onCommand(CommandSender $sender, Command $command, $label, array $args){
        if($command == "dat"){
            $ip = $ev->getPlayer()->getAddressByName($args[1]);
            $cid = $ev->getPlayer()->getClientIdByName($args[1]);
        
        
        
        
            $sender->sendMessage("§aDatos del jugador: §a, IP: §b$ip , §aClientID: §b$cid");
        }
    }
    
    
    
    
    




?>
