<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Traits\Floats;

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\Floats\TestFloatValueTrait;

/**
 * Float value trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Floats
 */
class FloatValueTraitTest extends AbstractTestCase {

    /**
     * Test setValue()
     *
     * @return void
     */
    public function testSetValue(): void {

        $obj = new TestFloatValueTrait();

        $obj->setValue(0.123456789);
        $this->assertEquals(0.123456789, $obj->getValue());
    }
}
