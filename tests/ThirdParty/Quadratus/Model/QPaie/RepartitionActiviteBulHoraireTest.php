<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\RepartitionActiviteBulHoraire;

/**
 * Repartition activite bul horaire test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class RepartitionActiviteBulHoraireTest extends AbstractTestCase {

    /**
     * Tests the setCodeService() method.
     *
     * @return void
     */
    public function testSetCodeService(): void {

        $obj = new RepartitionActiviteBulHoraire();

        $obj->setCodeService("codeService");
        $this->assertEquals("codeService", $obj->getCodeService());
    }

    /**
     * Tests the setIndicePeriode() method.
     *
     * @return void
     */
    public function testSetIndicePeriode(): void {

        $obj = new RepartitionActiviteBulHoraire();

        $obj->setIndicePeriode(10);
        $this->assertEquals(10, $obj->getIndicePeriode());
    }

    /**
     * Tests the setInterimaire() method.
     *
     * @return void
     */
    public function testSetInterimaire(): void {

        $obj = new RepartitionActiviteBulHoraire();

        $obj->setInterimaire(true);
        $this->assertEquals(true, $obj->getInterimaire());
    }

    /**
     * Tests the setNbHeures() method.
     *
     * @return void
     */
    public function testSetNbHeures(): void {

        $obj = new RepartitionActiviteBulHoraire();

        $obj->setNbHeures(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeures());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new RepartitionActiviteBulHoraire();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
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

        $obj = new RepartitionActiviteBulHoraire();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new RepartitionActiviteBulHoraire();

        $this->assertNull($obj->getCodeService());
        $this->assertNull($obj->getIndicePeriode());
        $this->assertNull($obj->getInterimaire());
        $this->assertNull($obj->getNbHeures());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPeriode());
    }
}
