<?php


namespace Kvlt\Flexit\DataAccess;


use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;
use Exception;

class Connection {

    private const DEV = true;

    /**
     * @var EntityManager
     */
    private $entityManager;

    public function __construct() {
        try {
//            $reflection = new ReflectionClass("FlexitMember");
//            $classPath = $reflection->getFileName();

            $path = [
                __DIR__ . "\..\Entity/"
            ];

            $conn = [
                "driver" => "pdo_mysql",
                "user" => "root",
                "password" => "",
                "dbname" => "players"
            ];

            $config = Setup::createAnnotationMetadataConfiguration($path, self::DEV, null, null, false);
            $this->entityManager = EntityManager::create($conn, $config);
        } catch (Exception $e) {
            echo $e->getTraceAsString();
        }

    }

    public function getEntityManager(): EntityManager {
        return $this->entityManager;
    }

}