<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();
$collection->add('sf_tuts_jobeet_homepage', new Route('/hello/{name}', array(
    '_controller' => 'SfTutsJobeetBundle:Default:index',
)));

return $collection;
