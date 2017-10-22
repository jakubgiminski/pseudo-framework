<?php
declare(strict_types=1);

namespace PseudoFrameworkTest\Thing;

use PseudoFramework\Controller;
use PseudoFramework\Response\CollectionResponse;

class ThingsController implements Controller
{
    private $thingsRepository;

    public function __construct(ThingsRepository $thingsRepository)
    {
        $this->thingsRepository = $thingsRepository;
    }

    public function getAll(): CollectionResponse
    {
        $things = $this->thingsRepository->getAll();

        return new CollectionResponse($things);
    }
}
