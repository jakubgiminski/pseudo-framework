<?php
declare(strict_types=1);

namespace PseudoFramework\Response;

use PseudoFramework\Entity;

class EntityResponse
{
    private $entity;

    public function __construct(Entity $entity)
    {
        $this->entity = $entity;
    }

    public function getEntity(): Entity
    {
        return $this->entity;
    }
}
