<?php


namespace Kvlt\Flexit\Models;


use Kvlt\Flexit\DataAccess\Connection;
use Kvlt\Flexit\DataAccess\MemberFactory;
use Kvlt\Flexit\Utils\Log;
use pocketmine\plugin\PluginBase;

class Plugin extends PluginBase {

    /**
     * @var Connection
     */
    private $connection;

    public function __construct() {
        $this->connection = new Connection();
    }

    public function onLoad() {
        Log::i("Включаемся!");
    }

    public function onEnable() {
        MemberFactory::init();
    }

    public function onDisable() {
        Log::i("Выключаемся!");
    }

    public function getConnection(): Connection {
        return $this->connection;
    }

}