<?php

namespace uleodev;

use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\event\Listener;
use pocketmine\event\block\BlockPlaceEvent;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\math\Vector3;
use pocketmine\item\Item;
use pocketmine\block\Block;
use pocketmine\tile\MobSpawner;
use pocketmine\scheduler\PluginTask;
use pocketmine\utils\Config;
use onebone\economyapi\EconomyAPI;

class Spawner implements Listener {
  
  public $plugin;
 
  
  public function __construct(Main $plugin) {
   // parent::__construct($plugin);
    $this->plugin = $plugin;
    
    }
    public function onPlace(BlockPlaceEvent $ev) {
          $p = $ev->getPlayer();

          $block = $ev->getBlock();
          $item = $ev->getItem();
          
          if($block->getId() == 52) {
            
            switch($item->getName()) {
              
              case "Gerador de Zombie":
              
                $this->plugin->getServer()->getScheduler()->scheduleDelayedTask(new Task($this->plugin, $block, "Zombie"), 20);
                break;
              case "Gerador de criatura":
              
                $this->plugin->getServer()->getScheduler()->scheduleDelayedTask(new Task($this->plugin, $block, "Criatura"), 20);
                break;
              
              case "Gerador de Aranha":
              
                $this->plugin->getServer()->getScheduler()->scheduleDelayedTask(new Task($this->plugin, $block, "Spider"), 20);
                break;
                
              case "Gerador de IronGolem":
              
                $this->plugin->getServer()->getScheduler()->scheduleDelayedTask(new Task($this->plugin, $block, "IronGolem"), 20);
                break;
                
              case "Gerador de Blaze":
              
                $this->plugin->getServer()->getScheduler()->scheduleDelayedTask(new Task($this->plugin, $block, "Blaze"), 20);
                break;
              
              case "Gerador de Vaca":
              
                $this->plugin->getServer()->getScheduler()->scheduleDelayedTask(new Task($this->plugin, $block, "Cow"), 20);
                break;
                
              case "Gerador de Slime":
              
                $this->plugin->getServer()->getScheduler()->scheduleDelayedTask(new Task($this->plugin, $block, "Slime"), 20);
                break;
                
              case "Gerador de Enderman":
              
                $this->plugin->getServer()->getScheduler()->scheduleDelayedTask(new Task($this->plugin, $block, "Enderman"), 20);
                break;
               }
             }
           }
  
 }