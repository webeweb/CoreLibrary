<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use DateTime;
use Throwable;
use WBW\Library\Quadratus\Model\QPaie\LignesAtb;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Lignes atb test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class LignesAtbTest extends AbstractTestCase {

    /**
     * Test setDateVersement()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateVersement(): void {

        // Set a Date/time mock.
        $dateVersement = new DateTime("2018-09-10");

        $obj = new LignesAtb();

        $obj->setDateVersement($dateVersement);
        $this->assertSame($dateVersement, $obj->getDateVersement());
    }

    /**
     * Test setMontant()
     *
     * @return void
     */
    public function testSetMontant(): void {

        $obj = new LignesAtb();

        $obj->setMontant(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant());
    }

    /**
     * Test setMontantCotis()
     *
     * @return void
     */
    public function testSetMontantCotis(): void {

        $obj = new LignesAtb();

        $obj->setMontantCotis(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantCotis());
    }

    /**
     * Test setMontantEuroOuFranc()
     *
     * @return void
     */
    public function testSetMontantEuroOuFranc(): void {

        $obj = new LignesAtb();

        $obj->setMontantEuroOuFranc("montantEuroOuFranc");
        $this->assertEquals("montantEuroOuFranc", $obj->getMontantEuroOuFranc());
    }

    /**
     * Test setNumLigne()
     *
     * @return void
     */
    public function testSetNumLigne(): void {

        $obj = new LignesAtb();

        $obj->setNumLigne("numLigne");
        $this->assertEquals("numLigne", $obj->getNumLigne());
    }

    /**
     * Test setNumeroAttestation()
     *
     * @return void
     */
    public function testSetNumeroAttestation(): void {

        $obj = new LignesAtb();

        $obj->setNumeroAttestation("numeroAttestation");
        $this->assertEquals("numeroAttestation", $obj->getNumeroAttestation());
    }

    /**
     * Test setPeriodeDeb()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPeriodeDeb(): void {

        // Set a Date/time mock.
        $periodeDeb = new DateTime("2018-09-10");

        $obj = new LignesAtb();

        $obj->setPeriodeDeb($periodeDeb);
        $this->assertSame($periodeDeb, $obj->getPeriodeDeb());
    }

    /**
     * Test setPeriodeFin()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPeriodeFin(): void {

        // Set a Date/time mock.
        $periodeFin = new DateTime("2018-09-10");

        $obj = new LignesAtb();

        $obj->setPeriodeFin($periodeFin);
        $this->assertSame($periodeFin, $obj->getPeriodeFin());
    }

    /**
     * Test setPsEuroOuFranc()
     *
     * @return void
     */
    public function testSetPsEuroOuFranc(): void {

        $obj = new LignesAtb();

        $obj->setPsEuroOuFranc("psEuroOuFranc");
        $this->assertEquals("psEuroOuFranc", $obj->getPsEuroOuFranc());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new LignesAtb();

        $this->assertNull($obj->getDateVersement());
        $this->assertNull($obj->getMontant());
        $this->assertNull($obj->getMontantCotis());
        $this->assertNull($obj->getMontantEuroOuFranc());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getNumeroAttestation());
        $this->assertNull($obj->getPsEuroOuFranc());
        $this->assertNull($obj->getPeriodeDeb());
        $this->assertNull($obj->getPeriodeFin());
    }
}
