<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use WBW\Library\Quadratus\Model\QGI\CriteresListeEntPieceAc;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Criteres liste ent piece ac test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class CriteresListeEntPieceAcTest extends AbstractTestCase {

    /**
     * Tests setCode()
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new CriteresListeEntPieceAc();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new CriteresListeEntPieceAc();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests setNumLibelle()
     *
     * @return void
     */
    public function testSetNumLibelle(): void {

        $obj = new CriteresListeEntPieceAc();

        $obj->setNumLibelle("numLibelle");
        $this->assertEquals("numLibelle", $obj->getNumLibelle());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new CriteresListeEntPieceAc();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getNumLibelle());
    }
}
