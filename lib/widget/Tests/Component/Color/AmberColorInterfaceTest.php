<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Widget\Tests\Component\Color;

use WBW\Library\Widget\Component\Color\AmberColorInterface;
use WBW\Library\Widget\Tests\AbstractTestCase;

/**
 * Amber color interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Component\Color
 */
class AmberColorInterfaceTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("amber", AmberColorInterface::AMBER_COLOR_NAME);
    }
}
