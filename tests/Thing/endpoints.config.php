<?php
declare(strict_types=1);

use PseudoFramework\Http\Endpoint;
use PseudoFrameworkTest\Thing\ThingsController;

$getThingsEndpoint = Endpoint::get(
    '/things',
    ThingsController::class,
    'getAll'
);

return [
    $getThingsEndpoint,
];
