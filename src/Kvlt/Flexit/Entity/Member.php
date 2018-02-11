<?php


namespace Kvlt\Flexit\Entity;


interface Member {

    function getId(): int;

    function getName(): string;

    function setName(string $name);

    function getAuthData(): AuthData;

}