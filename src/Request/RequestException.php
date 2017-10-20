<?php
declare(strict_types=1);

namespace PseudoFramework\Request;

class RequestException extends \Exception
{
    public static function parameterNotPresent(string $parameter): self
    {
        return new self("Parameter $parameter not present in the Request.");
    }
}
