<?php

namespace Kvlt\Flexit\DataAccess {

    use Doctrine\ORM\OptimisticLockException;
    use Doctrine\ORM\Tools\Console\ConsoleRunner;
    use Kvlt\Flexit\Models\FlexitMember;

    $connection = new Connection();
    $entityManager = $connection->getEntityManager();

//    $member = new FlexitMember();
//    $member->setName("tester");
//    $member->getAuthData()->setPassword("12345");
//
//    try {
//        $entityManager->merge($member);
//        $entityManager->flush();
//    } catch (OptimisticLockException $e) {  }

    return ConsoleRunner::createHelperSet($entityManager);

}