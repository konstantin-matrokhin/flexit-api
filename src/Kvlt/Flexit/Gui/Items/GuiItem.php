<?php


namespace Kvlt\Flexit\Gui\Items;


use pocketmine\Player;

interface GuiItem {

    function serialize(): array;

    function handle(Player $player, $val): mixed;

}