<?php


namespace Kvlt\Flexit\Gui\Items;


use pocketmine\Player;

class Button implements GuiItem {

    private $title;

    public function __construct(string $title) {
        $this->title = $title;
    }

    function serialize(): array {
        return [
            "type" => "button",
            "text" => $this->title
        ];
    }

    function handle(Player $player, $val): mixed {
        return null;
    }

}