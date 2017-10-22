<?php
declare(strict_types=1);

namespace PseudoFrameworkTest\Thing;

use PseudoFramework\Arrayable;

class ThingsCollection implements Arrayable
{
    private $things;

    public function __construct(array $things = null)
    {
        $this->things = $things ?? [];
    }

    public function toArray(): array
    {
        return $this->things;
    }
}
