<?php
/**
 * Created by IntelliJ IDEA.
 * User: martin
 * Date: 19.09.15
 * Time: 14:42
 */
use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();

$routes->add('rpc', new Routing\Route('/rpc/v1/json', array(
    '_controller' => 'SVB\CBS\API\APIController::handleAction',
)));

return $routes;