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
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestStringToTrait;

/**
 * String to trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class StringToTraitTest extends AbstractTestCase {

    /**
     * Tests the setTo() method.
     *
     * @return void
     */
    public function testSetTo(): void {

        $obj = new TestStringToTrait();

        $obj->setTo("to");
        $this->assertEquals("to", $obj->getTo());
    }
}
