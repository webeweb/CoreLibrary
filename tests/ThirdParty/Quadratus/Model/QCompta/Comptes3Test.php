<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\Comptes3;

/**
 * Comptes3 test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class Comptes3Test extends AbstractTestCase {

    /**
     * Tests the setCodeSection() method.
     *
     * @return void
     */
    public function testSetCodeSection(): void {

        $obj = new Comptes3();

        $obj->setCodeSection("codeSection");
        $this->assertEquals("codeSection", $obj->getCodeSection());
    }

    /**
     * Tests the setNumeroCompte() method.
     *
     * @return void
     */
    public function testSetNumeroCompte(): void {

        $obj = new Comptes3();

        $obj->setNumeroCompte("numeroCompte");
        $this->assertEquals("numeroCompte", $obj->getNumeroCompte());
    }

    /**
     * Tests the setPourcentRepart() method.
     *
     * @return void
     */
    public function testSetPourcentRepart(): void {

        $obj = new Comptes3();

        $obj->setPourcentRepart(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentRepart());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Comptes3();

        $this->assertNull($obj->getCodeSection());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getPourcentRepart());
    }
}
