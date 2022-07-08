<?php

namespace Alura\Doctrine\Helper;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

class EntityManagerFactory
{
    public function getEntityManager(): EntityManager
    {
        $rootDir = __DIR__ . '/../..';
        $config = ORMSetup::createAnnotationMetadataConfiguration([
            $rootDir . '/src'],
            true
        );

        $connection = [
            'driver' => 'pdo_sqlite',
            'path' => $rootDir . '/var/data/database.sqlite',
        ];

        return EntityManager::create($connection, $config);
    }
}