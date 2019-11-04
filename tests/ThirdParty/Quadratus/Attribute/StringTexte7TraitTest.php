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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTexte7Trait;

/**
 * Texte7 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTexte7TraitTest extends AbstractTestCase {

    /**
     * Tests the setTexte7() method.
     *
     * @return void
     */
    public function testSetTexte7() {

        $obj = new TestStringTexte7Trait();

        $obj->setTexte7("texte7");
        $this->assertEquals("texte7", $obj->getTexte7());
    }
}