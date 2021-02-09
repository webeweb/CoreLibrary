<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Model\Attribute;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestStringColumnTrait;

/**
 * String column trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class StringColumnTraitTest extends AbstractTestCase {

    /**
     * Tests the setColumn() method.
     *
     * @return void
     */
    public function testSetColumn(): void {

        $obj = new TestStringColumnTrait();

        $obj->setColumn("column");
        $this->assertEquals("column", $obj->getColumn());
    }
}
