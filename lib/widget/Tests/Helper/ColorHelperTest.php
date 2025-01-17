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

namespace WBW\Library\Widget\Tests\Helper;

use WBW\Library\Widget\Helper\ColorHelper;
use WBW\Library\Widget\Tests\AbstractTestCase;

/**
 * Color helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Helper
 */
class ColorHelperTest extends AbstractTestCase {

    /**
     * Test hexToRgba()
     *
     * @return void
     */
    public function testHexToRgba(): void {

        $this->assertNull(ColorHelper::hexToRgba(null));
        $this->assertNull(ColorHelper::hexToRgba(""));
        $this->assertNull(ColorHelper::hexToRgba("color"));

        $this->assertEquals("rgba(0, 0, 0, 0.00)", ColorHelper::hexToRgba("#000000", 0.00));
        $this->assertEquals("rgba(0, 0, 0, 0.00)", ColorHelper::hexToRgba("000000", 0.00));
        $this->assertEquals("rgba(0, 0, 0, 0.00)", ColorHelper::hexToRgba("#000", 0.00));
        $this->assertEquals("rgba(0, 0, 0, 0.00)", ColorHelper::hexToRgba("000", 0.00));

        $this->assertEquals("rgba(170, 170, 170, 0.50)", ColorHelper::hexToRgba("#AAAAAA", 0.50));
        $this->assertEquals("rgba(170, 170, 170, 0.50)", ColorHelper::hexToRgba("AAAAAA", 0.50));
        $this->assertEquals("rgba(170, 170, 170, 0.50)", ColorHelper::hexToRgba("#AAA", 0.50));
        $this->assertEquals("rgba(170, 170, 170, 0.50)", ColorHelper::hexToRgba("AAA", 0.50));

        $this->assertEquals("rgba(170, 170, 170, 0.50)", ColorHelper::hexToRgba("#aaaaaa", 0.50));
        $this->assertEquals("rgba(170, 170, 170, 0.50)", ColorHelper::hexToRgba("aaaaaa", 0.50));
        $this->assertEquals("rgba(170, 170, 170, 0.50)", ColorHelper::hexToRgba("#aaa", 0.50));
        $this->assertEquals("rgba(170, 170, 170, 0.50)", ColorHelper::hexToRgba("aaa", 0.50));

        $this->assertEquals("rgba(255, 255, 255, 1.00)", ColorHelper::hexToRgba("#FFFFFF"));
        $this->assertEquals("rgba(255, 255, 255, 1.00)", ColorHelper::hexToRgba("FFFFFF"));
        $this->assertEquals("rgba(255, 255, 255, 1.00)", ColorHelper::hexToRgba("#FFF"));
        $this->assertEquals("rgba(255, 255, 255, 1.00)", ColorHelper::hexToRgba("FFF"));
    }
}
