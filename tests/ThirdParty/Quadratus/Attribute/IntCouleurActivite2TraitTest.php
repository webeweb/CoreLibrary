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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntCouleurActivite2Trait;

/**
 * Couleur activite2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntCouleurActivite2TraitTest extends AbstractTestCase {

    /**
     * Tests the setCouleurActivite2() method.
     *
     * @return void
     */
    public function testSetCouleurActivite2() {

        $obj = new TestIntCouleurActivite2Trait();

        $obj->setCouleurActivite2(10);
        $this->assertEquals(10, $obj->getCouleurActivite2());
    }
}