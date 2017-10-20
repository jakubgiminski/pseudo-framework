<?php
declare(strict_types=1);

namespace PseudoFramework;

use League\Container\Container;
use Psr\Container\ContainerInterface;

class ContainerFactory
{
    public static function createFromConfig(array $config): ContainerInterface
    {
        $container = new Container();

        foreach ($config as $entry) {
            $container->add($entry);
        }

        return $container;
    }
}
