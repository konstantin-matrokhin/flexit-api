<?php


namespace Kvlt\Flexit\Entity;


interface Member {

    function getId(): int;

    function setId(int $id);

    function getName(): string;

    function setName(string $name);

    function getEmail(): string;

    function setEmail(string $email);

    function getTel(): string;

    function setTel(string $tel);

    function getCoins(): int;

    function setCoins(int $coins);

    function addCoins(int $coins);

    function withdrawCoins(int $coins);

    function getXp(): int;

    function setXp(int $xp);

    function addXp(int $xp);

    function withdrawXp(int $xp);

    function isRegistered(): bool;

    function setRegistered(bool $registered);

    function isAuthed(): bool;

    function setAuthed(bool $authed);

    //TODO change to Friend class
    function getFriends(): array;

    function addFriend($friend);

    function removeFriend($friend);

    function getPasswordHash(): string;

    function setPassword(string $password);

    function getGroup(): int;

    function setGroup(int $groupId);

    function getLastJoin(): float;

    function setLastJoin(float $time);

    function isBanned(): bool;

    function setBanned(bool $ban);

    function isMuted(): bool;

    function setMuted(bool $mute);

    function getBannedUntil(): float;

    function setBannedUntil(float $time);

}