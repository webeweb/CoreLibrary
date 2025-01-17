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

use WBW\Library\Widget\Component\Color\PinkColorInterface;
use WBW\Library\Widget\Tests\AbstractTestCase;
use WBW\Library\Widget\Tests\Fixtures\Component\Color\TestPinkColorTrait;

/**
 * Pink color trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Component\Color
 */
class PinkColorTraitTest extends AbstractTestCase {

    /**
     * Test setPinkColor()
     *
     * @return void
     */
    public function testSetPinkColor(): void {

        // Set a Pink color mock.
        $pinkColor = $this->getMockBuilder(PinkColorInterface::class)->getMock();

        $obj = new TestPinkColorTrait();

        $obj->setPinkColor($pinkColor);
        $this->assertSame($pinkColor, $obj->getPinkColor());
    }
}
