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

class Task extends PluginTask {
  
  public $plugin;
  public $block;
  public $type;
  
  public function __construct(Main $plugin, Block $block, $type) {
    
    parent::__construct($plugin);
    $this->plugin = $plugin;
    $this->block = $block;
    $this->type = $type;
    }
    
  public function onRun($tick) {
    
    $tile = $this->block->getLevel()->getTile(new Vector3($this->block->getX(), $this->block->getY(), $this->block->getZ()));
    
    
    if($tile instanceof MobSpawner) {
      echo "Translating to $this->type";
      
      switch($this->type) {
        case "Zombie":
        
      $tile->setEntityId(32);
      break;
       
      case "Spider":
       $tile->setEntityId(35);
       break;

      case "IronGolem":
      $tile->setEntityId(20);
      break;
      
      case "Blaze":
      $tile->setEntityId(43);
      break;
      
      case "Criatura":
      $tile->setEntityId(47);
      break;
      
      case "Vaca":
      $tile->setEntityId(11);
      break;
      
      case "Slime":
      $tile->setEntityId(37);
      break;

      case "Enderman":
      $tile->setEntityId(38);
      }
     }
   }
 }