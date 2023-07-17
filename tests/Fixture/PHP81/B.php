<?php

declare(strict_types=1);

namespace Fixture\PHP81;

class B
{
    public function __construct(
        private int $x
    ) {
    }

    function test() : int {
        return $this->x;
    }
}
