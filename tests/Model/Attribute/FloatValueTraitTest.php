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
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestFloatValueTrait;

/**
 * Float value trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class FloatValueTraitTest extends AbstractTestCase {

    /**
     * Tests the setValue() method.
     *
     * @return void
     */
    public function testSetValue(): void {

        $obj = new TestFloatValueTrait();

        $obj->setValue(1.01);
        $this->assertEquals(1.01, $obj->getValue());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__constructor(): void {

        $obj = new TestFloatValueTrait();

        $this->assertNull($obj->getValue());
    }
}
