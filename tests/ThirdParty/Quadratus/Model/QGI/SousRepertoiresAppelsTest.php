<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\SousRepertoiresAppels;

/**
 * Sous repertoires appels test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class SousRepertoiresAppelsTest extends AbstractTestCase {

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new SousRepertoiresAppels();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new SousRepertoiresAppels();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setNiveauLigne() method.
     *
     * @return void
     */
    public function testSetNiveauLigne(): void {

        $obj = new SousRepertoiresAppels();

        $obj->setNiveauLigne(10);
        $this->assertEquals(10, $obj->getNiveauLigne());
    }

    /**
     * Tests the setNumeroLigne() method.
     *
     * @return void
     */
    public function testSetNumeroLigne(): void {

        $obj = new SousRepertoiresAppels();

        $obj->setNumeroLigne(10);
        $this->assertEquals(10, $obj->getNumeroLigne());
    }

    /**
     * Tests the setProprietes() method.
     *
     * @return void
     */
    public function testSetProprietes(): void {

        $obj = new SousRepertoiresAppels();

        $obj->setProprietes("proprietes");
        $this->assertEquals("proprietes", $obj->getProprietes());
    }

    /**
     * Tests the setUniqId() method.
     *
     * @return void
     */
    public function testSetUniqId(): void {

        $obj = new SousRepertoiresAppels();

        $obj->setUniqId("uniqId");
        $this->assertEquals("uniqId", $obj->getUniqId());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new SousRepertoiresAppels();

        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getNiveauLigne());
        $this->assertNull($obj->getNumeroLigne());
        $this->assertNull($obj->getProprietes());
        $this->assertNull($obj->getUniqId());
    }
}
