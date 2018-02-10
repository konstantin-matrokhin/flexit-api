<?php


namespace Kvlt\Flexit\Gui\Items;


use pocketmine\Player;

class Label implements GuiItem {

    private $text;

    public function __construct($text) {
        $this->text = $text;
    }

    function serialize(): array {
        return [
            "type" => "label",
            "text" => $this->text
        ];
    }

    function handle(Player $player, $val): mixed {
        return null;
    }

}