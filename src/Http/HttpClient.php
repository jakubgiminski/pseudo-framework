<?php
declare(strict_types=1);

namespace PseudoFramework\Http;

use PseudoFramework\Request\Request;

class HttpClient
{
    public function call(Endpoint $endpoint, Request $request = null)
    {
        $controllerName = $endpoint->getControllerName();
        $controller = new $controllerName(); // dependencies? :(

        $request = $request ?? new Request([]);
        $actionName = $endpoint->getActionName();

        return $controller->$actionName($request);
    }
}
