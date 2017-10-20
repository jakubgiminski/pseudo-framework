<?php
declare(strict_types=1);

namespace PseudoFramework\Request;

class Request
{
    private $parameters;

    public function __construct(array $parameters = null)
    {
        $this->parameters = $parameters ?? [];
    }

    public function getParameter(string $parameterName): string
    {
        if (!isset($this->parameters[$parameterName])) {
            throw RequestException::parameterNotPresent($parameterName);
        }

        return $this->parameters[$parameterName];
    }
}
