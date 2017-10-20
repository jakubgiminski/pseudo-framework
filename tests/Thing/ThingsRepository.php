<?php
declare(strict_types=1);

namespace Tests\Thing;

use Ramsey\Uuid\Uuid;

class ThingsRepository
{
    const NUM_ALL_THINGS = 25;

    public function getAll(): ThingsCollection
    {
        $things = [];

        for ($i = 0; $i < self::NUM_ALL_THINGS; $i++) {
            $things[] = new Thing(Uuid::uuid1()->toString());
        }

        return new ThingsCollection($things);
    }
}
