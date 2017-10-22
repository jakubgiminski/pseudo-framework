<?php
declare(strict_types=1);

use League\Container\Container;
use PseudoFrameworkTest\Thing\ThingsController;
use PseudoFrameworkTest\Thing\ThingsRepository;

$container = new Container();

$container
    ->add(ThingsController::class)
    ->withArgument(new ThingsRepository());

return $container;
