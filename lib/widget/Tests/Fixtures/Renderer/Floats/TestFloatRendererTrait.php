<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Widget\Tests\Fixtures\Renderer\Floats;

use WBW\Library\Widget\Renderer\Floats\FloatRendererTrait;

/**
 * Test float renderer trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Fixtures\Renderer\Floats
 */
class TestFloatRendererTrait {

    use FloatRendererTrait {
        renderFloat as public;
        renderPercent as public;
        renderPrice as public;
    }
}
