<?php


namespace Kvlt\Flexit\Models;


interface Member {

    public function getId(): int;

    public function getName(): string;

    public function setName(string $name);

    public function getAuthData(): AuthData;

}