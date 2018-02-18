<?php

namespace Kvlt\Flexit\DataAccess {

    use Doctrine\ORM\OptimisticLockException;
    use Doctrine\ORM\Tools\Console\ConsoleRunner;
    use Kvlt\Flexit\Models\FlexitMember;
    use Kvlt\Flexit\Models\Member;

    $connection = new Connection();
    $entityManager = $connection->getEntityManager();

    $member = new FlexitMember();
    $member->setName("kvlt");
    $member->getAuthData()->setEmail("remillary@gmail.com");
    MemberFactory::init($connection);
    MemberFactory::savePlayer($member);

    return ConsoleRunner::createHelperSet($entityManager);

}