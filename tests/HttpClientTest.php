<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use PseudoFramework\Http\Endpoint;
use PseudoFramework\Http\HttpClient;
use PseudoFramework\Response\CollectionResponse;
use PseudoFramework\Response\Response;
use Tests\Thing\Thing;
use Tests\Thing\ThingsController;
use Tests\Thing\ThingsRepository;

class HttpClientTest extends TestCase
{
    private $httpClient;

    public function setUp()
    {
        $container = include __DIR__ . '/Thing/container.config.php';
        $this->httpClient = new HttpClient($container);
    }

    public function testCall()
    {
        $endpoint = Endpoint::get(
            '/things',
            ThingsController::class,
            'getAll'
        );

        $response = $this->httpClient->call($endpoint);
        self::assertInstanceOf(CollectionResponse::class, $response);
        $things = $response->getCollection()->toArray();
        self::assertCount(ThingsRepository::NUM_ALL_THINGS, $things);
        foreach ($things as $thing) {
            self::assertInstanceOf(Thing::class, $thing);
        }
    }
}
