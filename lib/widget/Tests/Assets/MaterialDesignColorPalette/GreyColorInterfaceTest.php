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

namespace WBW\Library\Widget\Tests\Assets\MaterialDesignColorPalette;

use WBW\Library\Widget\Assets\MaterialDesignColorPalette\GreyColorInterface;
use WBW\Library\Widget\Tests\AbstractTestCase;

/**
 * Grey color interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Assets\MaterialDesignColorPalette
 */
class GreyColorInterfaceTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("#fafafa", GreyColorInterface::GREY_COLOR_VALUE_50);
        $this->assertEquals("#f5f5f5", GreyColorInterface::GREY_COLOR_VALUE_100);
        $this->assertEquals("#eeeeee", GreyColorInterface::GREY_COLOR_VALUE_200);
        $this->assertEquals("#e0e0e0", GreyColorInterface::GREY_COLOR_VALUE_300);
        $this->assertEquals("#bdbdbd", GreyColorInterface::GREY_COLOR_VALUE_400);
        $this->assertEquals("#9e9e9e", GreyColorInterface::GREY_COLOR_VALUE_500);
        $this->assertEquals("#757575", GreyColorInterface::GREY_COLOR_VALUE_600);
        $this->assertEquals("#616161", GreyColorInterface::GREY_COLOR_VALUE_700);
        $this->assertEquals("#424242", GreyColorInterface::GREY_COLOR_VALUE_800);
        $this->assertEquals("#212121", GreyColorInterface::GREY_COLOR_VALUE_900);
    }
}
