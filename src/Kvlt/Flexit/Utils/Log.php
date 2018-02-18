<?php


namespace Kvlt\Flexit\Utils;


use pocketmine\Server;

class Log {

    private const PREFIX = "§7[§6FlexiteGG §6API§7]";

    public static function i(mixed $info) {
        Server::getInstance()->getLogger()->info(self::PREFIX . $info);
    }

}