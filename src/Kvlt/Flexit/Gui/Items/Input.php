<?php


namespace Kvlt\Flexit\Gui\Items;


use pocketmine\Player;

class Input implements GuiItem {

    private $placeholder;
    private $text;
    private $defaultText;

    public function __construct($text, $placeholder = "", $defaultText = "") {
        $this->text = $text;
        $this->placeholder = $placeholder;
        $this->defaultText = $defaultText;
    }

    function serialize(): array {
        return [
            "type" => "input",
            "text" => $this->text,
            "placeholder" => $this->placeholder,
            "default" => $this->defaultText
        ];
    }

    function handle(Player $player, $val): mixed {
        return null;
    }

}