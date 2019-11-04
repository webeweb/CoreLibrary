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

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeGeneric10DateLimiteTrait;

/**
 * Generic10 date limite trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeGeneric10DateLimiteTraitTest extends AbstractTestCase {

    /**
     * Tests the setGeneric10DateLimite() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetGeneric10DateLimite() {

        // Set a Date/time mock.
        $generic10DateLimite = new DateTime("2018-09-10");

        $obj = new TestDateTimeGeneric10DateLimiteTrait();

        $obj->setGeneric10DateLimite($generic10DateLimite);
        $this->assertSame($generic10DateLimite, $obj->getGeneric10DateLimite());
    }
}