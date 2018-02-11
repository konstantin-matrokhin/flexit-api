<?php


namespace Kvlt\Flexit\DataAccess;


use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;
use Exception;
use Kvlt\Flexit\Entity\FlexitMember;
use ReflectionClass;

class Connection {

    private const DEV = true;

    /**
     * @var EntityManager
     */
    private $entityManager;

    public function __construct() {
        try {
            $member = new FlexitMember();
            $reflection = new ReflectionClass($member);
            $classPath = dirname($reflection->getFileName());

            $path = [
                $classPath
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