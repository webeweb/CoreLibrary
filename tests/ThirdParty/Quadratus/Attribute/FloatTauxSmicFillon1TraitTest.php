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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatTauxSmicFillon1Trait;

/**
 * Taux smic fillon1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatTauxSmicFillon1TraitTest extends AbstractTestCase {

    /**
     * Tests the setTauxSmicFillon1() method.
     *
     * @return void
     */
    public function testSetTauxSmicFillon1() {

        $obj = new TestFloatTauxSmicFillon1Trait();

        $obj->setTauxSmicFillon1(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxSmicFillon1());
    }
}