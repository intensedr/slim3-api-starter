<?php

namespace App\Controllers;

use Interop\Container\ContainerInterface;

abstract class Controller
{
    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }
}