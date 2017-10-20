<?php
declare(strict_types=1);

namespace Tests\Thing;

use PseudoFramework\Entity;

class Thing implements Entity
{
    private $id;

    public function __construct(string $id)
    {
        $this->id = $id;
    }

    public function getId(): string
    {
        return $this->id;
    }
}
