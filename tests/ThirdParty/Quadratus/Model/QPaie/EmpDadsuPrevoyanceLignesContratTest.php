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

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\EmpDadsuPrevoyanceLignesContrat;

/**
 * Emp dadsu prevoyance lignes contrat test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class EmpDadsuPrevoyanceLignesContratTest extends AbstractTestCase {

    /**
     * Tests the setCodeOption() method.
     *
     * @return void
     */
    public function testSetCodeOption(): void {

        $obj = new EmpDadsuPrevoyanceLignesContrat();

        $obj->setCodeOption("codeOption");
        $this->assertEquals("codeOption", $obj->getCodeOption());
    }

    /**
     * Tests the setCodeOrganisme() method.
     *
     * @return void
     */
    public function testSetCodeOrganisme(): void {

        $obj = new EmpDadsuPrevoyanceLignesContrat();

        $obj->setCodeOrganisme("codeOrganisme");
        $this->assertEquals("codeOrganisme", $obj->getCodeOrganisme());
    }

    /**
     * Tests the setCodePopulation() method.
     *
     * @return void
     */
    public function testSetCodePopulation(): void {

        $obj = new EmpDadsuPrevoyanceLignesContrat();

        $obj->setCodePopulation("codePopulation");
        $this->assertEquals("codePopulation", $obj->getCodePopulation());
    }

    /**
     * Tests the setNbEnfants() method.
     *
     * @return void
     */
    public function testSetNbEnfants(): void {

        $obj = new EmpDadsuPrevoyanceLignesContrat();

        $obj->setNbEnfants("nbEnfants");
        $this->assertEquals("nbEnfants", $obj->getNbEnfants());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new EmpDadsuPrevoyanceLignesContrat();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setRefContrat() method.
     *
     * @return void
     */
    public function testSetRefContrat(): void {

        $obj = new EmpDadsuPrevoyanceLignesContrat();

        $obj->setRefContrat("refContrat");
        $this->assertEquals("refContrat", $obj->getRefContrat());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new EmpDadsuPrevoyanceLignesContrat();

        $this->assertNull($obj->getCodeOption());
        $this->assertNull($obj->getCodeOrganisme());
        $this->assertNull($obj->getCodePopulation());
        $this->assertNull($obj->getNbEnfants());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getRefContrat());
    }
}
