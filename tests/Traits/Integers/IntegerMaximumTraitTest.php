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

namespace WBW\Library\Common\Tests\Traits\Integers;

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\Integers\TestIntegerMaximumTrait;

/**
 * Integer maximum trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Integers
 */
class IntegerMaximumTraitTest extends AbstractTestCase {

    /**
     * Test setMaximum()
     *
     * @return void
     */
    public function testSetMaximum(): void {

        $obj = new TestIntegerMaximumTrait();

        $obj->setMaximum(1);
        $this->assertEquals(1, $obj->getMaximum());
    }
}
