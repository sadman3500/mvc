<?php

use Core\Routing\ControllerInterface;
namespace Core\Controller;

interface ArgumentResolverInterface {
    public static function getArguments(ControllerInterface $controller);
}