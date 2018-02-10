<?php


namespace Kvlt\Flexit\Gui\Forms;


class Form extends Window {

    public function __construct(string $title, int $id) {
        parent::__construct($title, $id);
        $this->setTemplate([
            "type" => "form",
            "title" => $title,
            "content" => null,
            "buttons" => []
        ]);
    }

    public function setText(string $text) {
        $this->set("content", $text);
    }

}