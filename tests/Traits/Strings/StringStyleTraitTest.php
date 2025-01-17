<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Traits\Strings;

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\Strings\TestStringStyleTrait;

/**
 * String style trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Strings
 */
class StringStyleTraitTest extends AbstractTestCase {

    /**
     * Test setStyle()
     *
     * @return void
     */
    public function testSetStyle(): void {

        $obj = new TestStringStyleTrait();

        $obj->setStyle("style");
        $this->assertEquals("style", $obj->getStyle());
    }
}
