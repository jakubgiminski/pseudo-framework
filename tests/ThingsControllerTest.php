<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use PseudoFramework\Arrayable;
use PseudoFramework\Response\CollectionResponse;
use Tests\Thing\ThingsController;
use Tests\Thing\ThingsRepository;

class ThingsControllerTest extends TestCase
{
    public function testGetAllThings()
    {
        $controller = new ThingsController(new ThingsRepository());
        $response = $controller->getAll();

        self::assertInstanceOf(CollectionResponse::class, $response);
        self::assertInstanceOf(Arrayable::class, $response->getCollection());
        self::assertCount(
            ThingsRepository::NUM_ALL_THINGS,
            $response->getCollection()->toArray()
        );
    }
}
