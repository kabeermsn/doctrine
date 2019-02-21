<?php 

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

require_once __DIR__ . '/vendor/autoload.php';


// Setup Doctrine
$configuration = Setup::createAnnotationMetadataConfiguration(
    $paths = [__DIR__ . '/src/Entities'],
    $isDevMode = true
);

// Setup connection parameters
$connection_parameters = [
    'dbname' => 'test_doctrine',
    'user' => 'root',
    'password' => 'abc123',
    'host' => 'localhost',
    'driver' => 'pdo_mysql'
];

// Get the entity manager
$entity_manager = EntityManager::create($connection_parameters, $configuration);
