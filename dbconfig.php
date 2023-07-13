<?php
require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)
    ->withServiceAccount('cs306-5f9e2-firebase-adminsdk-qldov-7f6dcc9a7e.json')
    ->withDatabaseUri('https://cs306-5f9e2-default-rtdb.firebaseio.com/');

$database = $factory->createDatabase();

?>