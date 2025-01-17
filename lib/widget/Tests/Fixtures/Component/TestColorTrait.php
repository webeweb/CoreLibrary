<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2024 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Widget\Tests\Fixtures\Component;

use WBW\Library\Widget\Component\ColorTrait;

/**
 * Test color trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Fixtures\Component
 */
class TestColorTrait {

    use ColorTrait {
        setColor as public;
    }
}
