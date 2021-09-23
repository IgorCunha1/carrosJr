<?php

use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Igor\Corrosjr\helpers\EntityManagerFactory;

// replace with file to your own project bootstrap
require_once 'vendor/autoload.php';

// replace with mechanism to retrieve EntityManager in your app
$entityManagerF = new \Igor\Carrosjr\helpers\EntityManagerFactory();
$entityManager = $entityManagerF->getEntityManager();

return ConsoleRunner::createHelperSet($entityManager);
