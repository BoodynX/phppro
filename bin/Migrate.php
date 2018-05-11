<?php declare(strict_types=1);

use Migrations\Migration201805090817;

define('ROOT_DIR', dirname(__DIR__));

require ROOT_DIR . '/vendor/autoload.php';

$injector = include(ROOT_DIR . '/src/Dependencies.php');

$connection = $injector->make('Doctrine\DBAL\Connection');

$migration = new Migration201805090817($connection);
$migration->migrate();

echo 'Finished running migrations' . PHP_EOL;