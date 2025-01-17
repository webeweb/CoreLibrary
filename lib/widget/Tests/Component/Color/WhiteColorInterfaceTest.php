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

namespace WBW\Library\Widget\Tests\Component\Color;

use WBW\Library\Widget\Component\Color\WhiteColorInterface;
use WBW\Library\Widget\Tests\AbstractTestCase;

/**
 * White color interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Component\Color
 */
class WhiteColorInterfaceTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("white", WhiteColorInterface::WHITE_COLOR_NAME);

        $this->assertEquals("#ffffff", WhiteColorInterface::WHITE_COLOR_VALUE);
    }
}
