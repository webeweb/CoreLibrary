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

use WBW\Library\Quadratus\Model\QGI\Fonctions;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Fonctions test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class FonctionsTest extends AbstractTestCase {

    /**
     * Tests setCode()
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new Fonctions();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new Fonctions();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Fonctions();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getLibelle());
    }
}
