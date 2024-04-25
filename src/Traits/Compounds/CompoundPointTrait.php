<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Traits\Compounds;

use WBW\Library\Common\Traits\Floats\FloatXTrait;
use WBW\Library\Common\Traits\Floats\FloatYTrait;

/**
 * Compound point trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Traits\Compounds
 */
trait CompoundPointTrait {

    use FloatXTrait;
    use FloatYTrait;
}
