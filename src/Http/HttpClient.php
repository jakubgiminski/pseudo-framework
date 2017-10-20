<?php
declare(strict_types=1);

namespace PseudoFramework\Http;

use PseudoFramework\Request\Request;
use PseudoFramework\Response\Response;
use Psr\Container\ContainerInterface;

class HttpClient
{
    private $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function call(Endpoint $endpoint, array $parameters = []): Response
    {
        $controllerName = $endpoint->getControllerName();
        $controller = $this->container->get($controllerName);
        $actionName = $endpoint->getActionName();
        $request = new Request($parameters);

        return $controller->$actionName($request);
    }
}
