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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\DossiersCpta;

/**
 * Dossiers cpta test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class DossiersCptaTest extends AbstractTestCase {

    /**
     * Tests the setCheminDossierCpta() method.
     *
     * @return void
     */
    public function testSetCheminDossierCpta(): void {

        $obj = new DossiersCpta();

        $obj->setCheminDossierCpta("cheminDossierCpta");
        $this->assertEquals("cheminDossierCpta", $obj->getCheminDossierCpta());
    }

    /**
     * Tests the setNumDossierCpta() method.
     *
     * @return void
     */
    public function testSetNumDossierCpta(): void {

        $obj = new DossiersCpta();

        $obj->setNumDossierCpta("numDossierCpta");
        $this->assertEquals("numDossierCpta", $obj->getNumDossierCpta());
    }

    /**
     * Tests the setNumDossierFact() method.
     *
     * @return void
     */
    public function testSetNumDossierFact(): void {

        $obj = new DossiersCpta();

        $obj->setNumDossierFact("numDossierFact");
        $this->assertEquals("numDossierFact", $obj->getNumDossierFact());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DossiersCpta();

        $this->assertNull($obj->getCheminDossierCpta());
        $this->assertNull($obj->getNumDossierCpta());
        $this->assertNull($obj->getNumDossierFact());
    }
}
