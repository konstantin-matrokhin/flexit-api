<?php


namespace Kvlt\Flexit\Gui\Forms;


use Kvlt\Flexit\Gui\GUI;

class ModalWindow extends Window {

    private $id;

    public function __construct(string $title, int $id) {
        $this->id = $id;
        parent::__construct($title, $id, parent::FORM);
    }

}