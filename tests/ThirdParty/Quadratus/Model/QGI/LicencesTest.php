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

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\Licences;

/**
 * Licences test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class LicencesTest extends AbstractTestCase {

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new Licences();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeClientDistr() method.
     *
     * @return void
     */
    public function testSetCodeClientDistr(): void {

        $obj = new Licences();

        $obj->setCodeClientDistr("codeClientDistr");
        $this->assertEquals("codeClientDistr", $obj->getCodeClientDistr());
    }

    /**
     * Tests the setCodeProduit() method.
     *
     * @return void
     */
    public function testSetCodeProduit(): void {

        $obj = new Licences();

        $obj->setCodeProduit("codeProduit");
        $this->assertEquals("codeProduit", $obj->getCodeProduit());
    }

    /**
     * Tests the setCommentaire() method.
     *
     * @return void
     */
    public function testSetCommentaire(): void {

        $obj = new Licences();

        $obj->setCommentaire("commentaire");
        $this->assertEquals("commentaire", $obj->getCommentaire());
    }

    /**
     * Tests the setCpVille() method.
     *
     * @return void
     */
    public function testSetCpVille(): void {

        $obj = new Licences();

        $obj->setCpVille("cpVille");
        $this->assertEquals("cpVille", $obj->getCpVille());
    }

    /**
     * Tests the setDateCreation() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCreation(): void {

        // Set a Date/time mock.
        $dateCreation = new DateTime("2018-09-10");

        $obj = new Licences();

        $obj->setDateCreation($dateCreation);
        $this->assertSame($dateCreation, $obj->getDateCreation());
    }

    /**
     * Tests the setDemo() method.
     *
     * @return void
     */
    public function testSetDemo(): void {

        $obj = new Licences();

        $obj->setDemo(true);
        $this->assertEquals(true, $obj->getDemo());
    }

    /**
     * Tests the setLicence() method.
     *
     * @return void
     */
    public function testSetLicence(): void {

        $obj = new Licences();

        $obj->setLicence("licence");
        $this->assertEquals("licence", $obj->getLicence());
    }

    /**
     * Tests the setNomClient() method.
     *
     * @return void
     */
    public function testSetNomClient(): void {

        $obj = new Licences();

        $obj->setNomClient("nomClient");
        $this->assertEquals("nomClient", $obj->getNomClient());
    }

    /**
     * Tests the setNombrePostes() method.
     *
     * @return void
     */
    public function testSetNombrePostes(): void {

        $obj = new Licences();

        $obj->setNombrePostes(10);
        $this->assertEquals(10, $obj->getNombrePostes());
    }

    /**
     * Tests the setOption1() method.
     *
     * @return void
     */
    public function testSetOption1(): void {

        $obj = new Licences();

        $obj->setOption1("option1");
        $this->assertEquals("option1", $obj->getOption1());
    }

    /**
     * Tests the setOption2() method.
     *
     * @return void
     */
    public function testSetOption2(): void {

        $obj = new Licences();

        $obj->setOption2("option2");
        $this->assertEquals("option2", $obj->getOption2());
    }

    /**
     * Tests the setOption3() method.
     *
     * @return void
     */
    public function testSetOption3(): void {

        $obj = new Licences();

        $obj->setOption3("option3");
        $this->assertEquals("option3", $obj->getOption3());
    }

    /**
     * Tests the setOption4() method.
     *
     * @return void
     */
    public function testSetOption4(): void {

        $obj = new Licences();

        $obj->setOption4("option4");
        $this->assertEquals("option4", $obj->getOption4());
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

        $obj = new Licences();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests the setSupport() method.
     *
     * @return void
     */
    public function testSetSupport(): void {

        $obj = new Licences();

        $obj->setSupport("support");
        $this->assertEquals("support", $obj->getSupport());
    }

    /**
     * Tests the setTypeReseau() method.
     *
     * @return void
     */
    public function testSetTypeReseau(): void {

        $obj = new Licences();

        $obj->setTypeReseau("typeReseau");
        $this->assertEquals("typeReseau", $obj->getTypeReseau());
    }

    /**
     * Tests the setVersion() method.
     *
     * @return void
     */
    public function testSetVersion(): void {

        $obj = new Licences();

        $obj->setVersion("version");
        $this->assertEquals("version", $obj->getVersion());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Licences();

        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeClientDistr());
        $this->assertNull($obj->getCodeProduit());
        $this->assertNull($obj->getCommentaire());
        $this->assertNull($obj->getCpVille());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getDemo());
        $this->assertNull($obj->getLicence());
        $this->assertNull($obj->getNomClient());
        $this->assertNull($obj->getNombrePostes());
        $this->assertNull($obj->getOption1());
        $this->assertNull($obj->getOption2());
        $this->assertNull($obj->getOption3());
        $this->assertNull($obj->getOption4());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getSupport());
        $this->assertNull($obj->getTypeReseau());
        $this->assertNull($obj->getVersion());
    }
}
