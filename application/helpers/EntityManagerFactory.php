<?php

namespace Igor\Carrosjr\helpers;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;



require_once 'vendor/autoload.php';



class EntityManagerFactory
{
    /**
     * @return EntityManagerInterface
     * @throws ORMException
     */
    public function getEntityManager(): EntityManagerInterface
    {

            $config = Setup::createAnnotationMetadataConfiguration([__DIR__ . '\..\models'], true);
            $conn = [
                'dbname'=>'carrosjr',
                'user'=>'root',
                'password'=>'',
                'host'=>'localhost',
                'driver'=>'pdo_mysql'
            ];

            return EntityManager::create($conn, $config);

    }
}
