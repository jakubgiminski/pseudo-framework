<?php
declare(strict_types=1);

namespace PseudoFramework;

use PseudoFramework\Response\CollectionResponse;

interface Controller
{
    public function getAll(): CollectionResponse;
}
