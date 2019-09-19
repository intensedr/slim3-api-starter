<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;
$capsule->addConnection($config['settings']['database']['mysql']);
$capsule->setAsGlobal();
$capsule->bootEloquent();