<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();
$collection->add('WillCarryBundle_homepage', new Route('/hello/{name}', array(
    '_controller' => 'WillCarryBundle:Default:index',
)));

return $collection;
