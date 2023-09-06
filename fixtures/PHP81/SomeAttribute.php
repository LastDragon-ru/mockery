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

use Fixture\PHP81\stdClass;

#[\Attribute(\Attribute::TARGET_PARAMETER)]
class SomeAttribute
{
    public function __construct(
        public object $param = new stdClass()
    ) {
    }
}
