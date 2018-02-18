<?php


namespace Kvlt\Flexit\DataAccess;


use Doctrine\ORM\EntityManager;
use Doctrine\ORM\OptimisticLockException;
use Kvlt\Flexit\Models\FlexitMember;

class MemberFactory {

    /**
     * @var Connection
     */
    private static $con;

    /**
     * @var EntityManager
     */
    private static $em;

    public static function init(Connection $con) {
        self::$con = $con;
        self::$em = self::$con->getEntityManager();
    }

    public static function loadPlayer(string $name) {
        $q = self::$em->createQuery("SELECT FROM players WHERE player = :name");
        $q->setParameter(1, $name);
        $q->setMaxResults(1);
        return $q->getResult();
    }

    public static function savePlayer(FlexitMember $player) {
        try {
            self::$em->persist($player);
            self::$em->flush();
        } catch (OptimisticLockException $e) {
        }
    }

}