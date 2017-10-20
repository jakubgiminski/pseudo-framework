<?php
declare(strict_types=1);

namespace PseudoFramework\Response;

use PseudoFramework\Arrayable;

class CollectionResponse
{
    private $collection;

    public function __construct(Arrayable $collection)
    {
        $this->collection = $collection;
    }

    public function getCollection(): Arrayable
    {
        return $this->collection;
    }
}
