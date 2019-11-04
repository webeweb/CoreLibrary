<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatAz1020Trait;

/**
 * Az1020 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatAz1020TraitTest extends AbstractTestCase {

    /**
     * Tests the setAz1020() method.
     *
     * @return void
     */
    public function testSetAz1020() {

        $obj = new TestFloatAz1020Trait();

        $obj->setAz1020(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1020());
    }
}