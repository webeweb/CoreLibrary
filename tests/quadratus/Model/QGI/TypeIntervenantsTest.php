<?php

/*
 * This file is part of the core-library-package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use WBW\Library\Quadratus\Model\QGI\TypeIntervenants;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Type intervenants test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class TypeIntervenantsTest extends AbstractTestCase {

    /**
     * Tests the setAccesLibre() method.
     *
     * @return void
     */
    public function testSetAccesLibre(): void {

        $obj = new TypeIntervenants();

        $obj->setAccesLibre(true);
        $this->assertEquals(true, $obj->getAccesLibre());
    }

    /**
     * Tests the setCode() method.
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new TypeIntervenants();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests the setIncrementAuto() method.
     *
     * @return void
     */
    public function testSetIncrementAuto(): void {

        $obj = new TypeIntervenants();

        $obj->setIncrementAuto(true);
        $this->assertEquals(true, $obj->getIncrementAuto());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new TypeIntervenants();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setPrefixe() method.
     *
     * @return void
     */
    public function testSetPrefixe(): void {

        $obj = new TypeIntervenants();

        $obj->setPrefixe("prefixe");
        $this->assertEquals("prefixe", $obj->getPrefixe());
    }

    /**
     * Tests the setProchainNumero() method.
     *
     * @return void
     */
    public function testSetProchainNumero(): void {

        $obj = new TypeIntervenants();

        $obj->setProchainNumero(10);
        $this->assertEquals(10, $obj->getProchainNumero());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TypeIntervenants();

        $this->assertNull($obj->getAccesLibre());
        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getIncrementAuto());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getPrefixe());
        $this->assertNull($obj->getProchainNumero());
    }
}
