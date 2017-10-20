<?php
declare(strict_types=1);

namespace PseudoFramework\Response;

use PseudoFramework\Entity;

class EntityResponse extends Response
{
    public function __construct(Entity $entity)
    {
        parent::__construct($entity);
    }

    public function getEntity(): Entity
    {
        return $this->getContent();
    }
}
