<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Widget\Tests\Fixtures\Component\Color;

use WBW\Library\Widget\Component\Color\GreyColorTrait;

/**
 * Test grey color trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Fixtures\Component\Color
 */
class TestGreyColorTrait {

    use GreyColorTrait {
        setGreyColor as public;
    }
}
