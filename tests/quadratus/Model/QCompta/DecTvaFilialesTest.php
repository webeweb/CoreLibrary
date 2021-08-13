<?php

/*
 * This file is part of the core-library-package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QCompta;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QCompta\DecTvaFiliales;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Dec tva filiales test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class DecTvaFilialesTest extends AbstractTestCase {

    /**
     * Tests the setBtq() method.
     *
     * @return void
     */
    public function testSetBtq(): void {

        $obj = new DecTvaFiliales();

        $obj->setBtq("btq");
        $this->assertEquals("btq", $obj->getBtq());
    }

    /**
     * Tests the setCodePostal() method.
     *
     * @return void
     */
    public function testSetCodePostal(): void {

        $obj = new DecTvaFiliales();

        $obj->setCodePostal("codePostal");
        $this->assertEquals("codePostal", $obj->getCodePostal());
    }

    /**
     * Tests the setComplement() method.
     *
     * @return void
     */
    public function testSetComplement(): void {

        $obj = new DecTvaFiliales();

        $obj->setComplement("complement");
        $this->assertEquals("complement", $obj->getComplement());
    }

    /**
     * Tests the setCptFiliale() method.
     *
     * @return void
     */
    public function testSetCptFiliale(): void {

        $obj = new DecTvaFiliales();

        $obj->setCptFiliale("cptFiliale");
        $this->assertEquals("cptFiliale", $obj->getCptFiliale());
    }

    /**
     * Tests the setDateEntree() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEntree(): void {

        // Set a Date/time mock.
        $dateEntree = new DateTime("2018-09-10");

        $obj = new DecTvaFiliales();

        $obj->setDateEntree($dateEntree);
        $this->assertSame($dateEntree, $obj->getDateEntree());
    }

    /**
     * Tests the setDateSortie() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateSortie(): void {

        // Set a Date/time mock.
        $dateSortie = new DateTime("2018-09-10");

        $obj = new DecTvaFiliales();

        $obj->setDateSortie($dateSortie);
        $this->assertSame($dateSortie, $obj->getDateSortie());
    }

    /**
     * Tests the setDetentionDirecte() method.
     *
     * @return void
     */
    public function testSetDetentionDirecte(): void {

        $obj = new DecTvaFiliales();

        $obj->setDetentionDirecte(10.092018);
        $this->assertEquals(10.092018, $obj->getDetentionDirecte());
    }

    /**
     * Tests the setDetentionIndirecte() method.
     *
     * @return void
     */
    public function testSetDetentionIndirecte(): void {

        $obj = new DecTvaFiliales();

        $obj->setDetentionIndirecte(10.092018);
        $this->assertEquals(10.092018, $obj->getDetentionIndirecte());
    }

    /**
     * Tests the setFormeJuridique() method.
     *
     * @return void
     */
    public function testSetFormeJuridique(): void {

        $obj = new DecTvaFiliales();

        $obj->setFormeJuridique("formeJuridique");
        $this->assertEquals("formeJuridique", $obj->getFormeJuridique());
    }

    /**
     * Tests the setLibDoss() method.
     *
     * @return void
     */
    public function testSetLibDoss(): void {

        $obj = new DecTvaFiliales();

        $obj->setLibDoss("libDoss");
        $this->assertEquals("libDoss", $obj->getLibDoss());
    }

    /**
     * Tests the setNoDoss() method.
     *
     * @return void
     */
    public function testSetNoDoss(): void {

        $obj = new DecTvaFiliales();

        $obj->setNoDoss("noDoss");
        $this->assertEquals("noDoss", $obj->getNoDoss());
    }

    /**
     * Tests the setNomVoie() method.
     *
     * @return void
     */
    public function testSetNomVoie(): void {

        $obj = new DecTvaFiliales();

        $obj->setNomVoie("nomVoie");
        $this->assertEquals("nomVoie", $obj->getNomVoie());
    }

    /**
     * Tests the setNumUniq() method.
     *
     * @return void
     */
    public function testSetNumUniq(): void {

        $obj = new DecTvaFiliales();

        $obj->setNumUniq(10);
        $this->assertEquals(10, $obj->getNumUniq());
    }

    /**
     * Tests the setNumVoie() method.
     *
     * @return void
     */
    public function testSetNumVoie(): void {

        $obj = new DecTvaFiliales();

        $obj->setNumVoie("numVoie");
        $this->assertEquals("numVoie", $obj->getNumVoie());
    }

    /**
     * Tests the setSiren() method.
     *
     * @return void
     */
    public function testSetSiren(): void {

        $obj = new DecTvaFiliales();

        $obj->setSiren("siren");
        $this->assertEquals("siren", $obj->getSiren());
    }

    /**
     * Tests the setVille() method.
     *
     * @return void
     */
    public function testSetVille(): void {

        $obj = new DecTvaFiliales();

        $obj->setVille("ville");
        $this->assertEquals("ville", $obj->getVille());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DecTvaFiliales();

        $this->assertNull($obj->getBtq());
        $this->assertNull($obj->getCodePostal());
        $this->assertNull($obj->getComplement());
        $this->assertNull($obj->getCptFiliale());
        $this->assertNull($obj->getDateEntree());
        $this->assertNull($obj->getDateSortie());
        $this->assertNull($obj->getDetentionDirecte());
        $this->assertNull($obj->getDetentionIndirecte());
        $this->assertNull($obj->getFormeJuridique());
        $this->assertNull($obj->getLibDoss());
        $this->assertNull($obj->getNoDoss());
        $this->assertNull($obj->getNomVoie());
        $this->assertNull($obj->getNumUniq());
        $this->assertNull($obj->getNumVoie());
        $this->assertNull($obj->getSiren());
        $this->assertNull($obj->getVille());
    }
}
