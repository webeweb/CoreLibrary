<?php

/*
 * This file is part of the core-library-package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\Proprete;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\Proprete\PointEmpPrimes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Point emp primes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class PointEmpPrimesTest extends AbstractTestCase {

    /**
     * Tests the setCodeAffaire() method.
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new PointEmpPrimes();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests the setCodeChantier() method.
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new PointEmpPrimes();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new PointEmpPrimes();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeCollaboValid() method.
     *
     * @return void
     */
    public function testSetCodeCollaboValid(): void {

        $obj = new PointEmpPrimes();

        $obj->setCodeCollaboValid("codeCollaboValid");
        $this->assertEquals("codeCollaboValid", $obj->getCodeCollaboValid());
    }

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new PointEmpPrimes();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setCodeEmploye() method.
     *
     * @return void
     */
    public function testSetCodeEmploye(): void {

        $obj = new PointEmpPrimes();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Tests the setCodePrime() method.
     *
     * @return void
     */
    public function testSetCodePrime(): void {

        $obj = new PointEmpPrimes();

        $obj->setCodePrime("codePrime");
        $this->assertEquals("codePrime", $obj->getCodePrime());
    }

    /**
     * Tests the setCodeTache() method.
     *
     * @return void
     */
    public function testSetCodeTache(): void {

        $obj = new PointEmpPrimes();

        $obj->setCodeTache("codeTache");
        $this->assertEquals("codeTache", $obj->getCodeTache());
    }

    /**
     * Tests the setCodeTacheTypeBt() method.
     *
     * @return void
     */
    public function testSetCodeTacheTypeBt(): void {

        $obj = new PointEmpPrimes();

        $obj->setCodeTacheTypeBt("codeTacheTypeBt");
        $this->assertEquals("codeTacheTypeBt", $obj->getCodeTacheTypeBt());
    }

    /**
     * Tests the setDateApplication() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateApplication(): void {

        // Set a Date/time mock.
        $dateApplication = new DateTime("2018-09-10");

        $obj = new PointEmpPrimes();

        $obj->setDateApplication($dateApplication);
        $this->assertSame($dateApplication, $obj->getDateApplication());
    }

    /**
     * Tests the setDateValidationSynchro() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateValidationSynchro(): void {

        // Set a Date/time mock.
        $dateValidationSynchro = new DateTime("2018-09-10");

        $obj = new PointEmpPrimes();

        $obj->setDateValidationSynchro($dateValidationSynchro);
        $this->assertSame($dateValidationSynchro, $obj->getDateValidationSynchro());
    }

    /**
     * Tests the setDefaut() method.
     *
     * @return void
     */
    public function testSetDefaut(): void {

        $obj = new PointEmpPrimes();

        $obj->setDefaut(true);
        $this->assertEquals(true, $obj->getDefaut());
    }

    /**
     * Tests the setEtat() method.
     *
     * @return void
     */
    public function testSetEtat(): void {

        $obj = new PointEmpPrimes();

        $obj->setEtat("etat");
        $this->assertEquals("etat", $obj->getEtat());
    }

    /**
     * Tests the setNbHeureMajoration() method.
     *
     * @return void
     */
    public function testSetNbHeureMajoration(): void {

        $obj = new PointEmpPrimes();

        $obj->setNbHeureMajoration(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeureMajoration());
    }

    /**
     * Tests the setNombrePrime() method.
     *
     * @return void
     */
    public function testSetNombrePrime(): void {

        $obj = new PointEmpPrimes();

        $obj->setNombrePrime(10.092018);
        $this->assertEquals(10.092018, $obj->getNombrePrime());
    }

    /**
     * Tests the setNumBt() method.
     *
     * @return void
     */
    public function testSetNumBt(): void {

        $obj = new PointEmpPrimes();

        $obj->setNumBt(10);
        $this->assertEquals(10, $obj->getNumBt());
    }

    /**
     * Tests the setNumeroPrime() method.
     *
     * @return void
     */
    public function testSetNumeroPrime(): void {

        $obj = new PointEmpPrimes();

        $obj->setNumeroPrime(10);
        $this->assertEquals(10, $obj->getNumeroPrime());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriode(): void {

        // Set a Date/time mock.
        $periode = new DateTime("2018-09-10");

        $obj = new PointEmpPrimes();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests the setTauxPrime() method.
     *
     * @return void
     */
    public function testSetTauxPrime(): void {

        $obj = new PointEmpPrimes();

        $obj->setTauxPrime(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxPrime());
    }

    /**
     * Tests the setTypeMajo() method.
     *
     * @return void
     */
    public function testSetTypeMajo(): void {

        $obj = new PointEmpPrimes();

        $obj->setTypeMajo("typeMajo");
        $this->assertEquals("typeMajo", $obj->getTypeMajo());
    }

    /**
     * Tests the setTypePrime() method.
     *
     * @return void
     */
    public function testSetTypePrime(): void {

        $obj = new PointEmpPrimes();

        $obj->setTypePrime("typePrime");
        $this->assertEquals("typePrime", $obj->getTypePrime());
    }

    /**
     * Tests the setUniqIdSynchro() method.
     *
     * @return void
     */
    public function testSetUniqIdSynchro(): void {

        $obj = new PointEmpPrimes();

        $obj->setUniqIdSynchro("uniqIdSynchro");
        $this->assertEquals("uniqIdSynchro", $obj->getUniqIdSynchro());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new PointEmpPrimes();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollaboValid());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getCodePrime());
        $this->assertNull($obj->getCodeTache());
        $this->assertNull($obj->getCodeTacheTypeBt());
        $this->assertNull($obj->getDateApplication());
        $this->assertNull($obj->getDateValidationSynchro());
        $this->assertNull($obj->getDefaut());
        $this->assertNull($obj->getEtat());
        $this->assertNull($obj->getNbHeureMajoration());
        $this->assertNull($obj->getNombrePrime());
        $this->assertNull($obj->getNumBt());
        $this->assertNull($obj->getNumeroPrime());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getTauxPrime());
        $this->assertNull($obj->getTypeMajo());
        $this->assertNull($obj->getTypePrime());
        $this->assertNull($obj->getUniqIdSynchro());
    }
}
