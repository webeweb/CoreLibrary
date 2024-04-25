<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2024 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Widget\Tests\Fixtures\Component;

use WBW\Library\Widget\Component\NavigationNodeTrait;

/**
 * Test navigationNode trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Fixtures\Component
 */
class TestNavigationNodeTrait {

    use NavigationNodeTrait {
        setNavigationNode as public;
    }
}
