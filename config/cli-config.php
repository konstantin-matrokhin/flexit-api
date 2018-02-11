<?php

namespace Kvlt\Flexit\DataAccess {

    use Doctrine\ORM\Tools\Console\ConsoleRunner;

    $connection = new Connection();

    $entityManager = $connection->getEntityManager();

    return ConsoleRunner::createHelperSet($entityManager);

}