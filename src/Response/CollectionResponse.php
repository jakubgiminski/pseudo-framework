<?php
declare(strict_types=1);

namespace PseudoFramework\Response;

use PseudoFramework\Arrayable;

class CollectionResponse extends Response
{
    public function __construct(Arrayable $collection)
    {
        parent::__construct($collection);
    }

    public function getCollection(): Arrayable
    {
        return $this->getContent();
    }
}
