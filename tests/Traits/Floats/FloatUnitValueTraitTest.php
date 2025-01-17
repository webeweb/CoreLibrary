<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Traits\Floats;

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\Floats\TestFloatUnitValueTrait;

/**
 * Float unit value trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Floats
 */
class FloatUnitValueTraitTest extends AbstractTestCase {

    /**
     * Test setUnitValue()
     *
     * @return void
     */
    public function testSetUnitValue(): void {

        $obj = new TestFloatUnitValueTrait();

        $obj->setUnitValue(0.1);
        $this->assertEquals(0.1, $obj->getUnitValue());
    }
}
