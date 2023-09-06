<?php

declare(strict_types=1);

/**
 * Mockery (https://docs.mockery.io/)
 *
 * @copyright https://github.com/mockery/mockery/blob/HEAD/COPYRIGHT.md
 * @license   https://github.com/mockery/mockery/blob/HEAD/LICENSE BSD 3-Clause License
 * @link      https://github.com/mockery/mockery for the canonical source repository
 */

namespace PHP81;

class C
{
    public function __construct(
        private int $x = 1,
        private B $b = new B(1)
    ) {
    }

    public function test(): int
    {
        return $this->x + $this->b->test();
    }
}
