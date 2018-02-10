<?php


namespace Kvlt\Flexit\Gui;

use Kvlt\Flexit\Gui\Forms\Window;
use pocketmine\Player;

class GUI {

    public static function open(Player $player, Window $window) {
        $window->send($player);
    }

}