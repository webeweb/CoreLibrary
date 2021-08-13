<?php

/*
 * This file is part of the core-library-package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use WBW\Library\Quadratus\Model\QPaie\Organismes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Organismes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class OrganismesTest extends AbstractTestCase {

    /**
     * Tests the setCentrePayeur() method.
     *
     * @return void
     */
    public function testSetCentrePayeur(): void {

        $obj = new Organismes();

        $obj->setCentrePayeur("centrePayeur");
        $this->assertEquals("centrePayeur", $obj->getCentrePayeur());
    }

    /**
     * Tests the setCodeCatCadre() method.
     *
     * @return void
     */
    public function testSetCodeCatCadre(): void {

        $obj = new Organismes();

        $obj->setCodeCatCadre("codeCatCadre");
        $this->assertEquals("codeCatCadre", $obj->getCodeCatCadre());
    }

    /**
     * Tests the setCodeCentre() method.
     *
     * @return void
     */
    public function testSetCodeCentre(): void {

        $obj = new Organismes();

        $obj->setCodeCentre("codeCentre");
        $this->assertEquals("codeCentre", $obj->getCodeCentre());
    }

    /**
     * Tests the setCodeEtablissement() method.
     *
     * @return void
     */
    public function testSetCodeEtablissement(): void {

        $obj = new Organismes();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests the setCodeNonCadre() method.
     *
     * @return void
     */
    public function testSetCodeNonCadre(): void {

        $obj = new Organismes();

        $obj->setCodeNonCadre("codeNonCadre");
        $this->assertEquals("codeNonCadre", $obj->getCodeNonCadre());
    }

    /**
     * Tests the setCodeOrganisme() method.
     *
     * @return void
     */
    public function testSetCodeOrganisme(): void {

        $obj = new Organismes();

        $obj->setCodeOrganisme("codeOrganisme");
        $this->assertEquals("codeOrganisme", $obj->getCodeOrganisme());
    }

    /**
     * Tests the setCompteCharge() method.
     *
     * @return void
     */
    public function testSetCompteCharge(): void {

        $obj = new Organismes();

        $obj->setCompteCharge("compteCharge");
        $this->assertEquals("compteCharge", $obj->getCompteCharge());
    }

    /**
     * Tests the setCompteTiers() method.
     *
     * @return void
     */
    public function testSetCompteTiers(): void {

        $obj = new Organismes();

        $obj->setCompteTiers("compteTiers");
        $this->assertEquals("compteTiers", $obj->getCompteTiers());
    }

    /**
     * Tests the setCotAssedicParUrssaf() method.
     *
     * @return void
     */
    public function testSetCotAssedicParUrssaf(): void {

        $obj = new Organismes();

        $obj->setCotAssedicParUrssaf(true);
        $this->assertEquals(true, $obj->getCotAssedicParUrssaf());
    }

    /**
     * Tests the setCotitel() method.
     *
     * @return void
     */
    public function testSetCotitel(): void {

        $obj = new Organismes();

        $obj->setCotitel(true);
        $this->assertEquals(true, $obj->getCotitel());
    }

    /**
     * Tests the setDossCadre() method.
     *
     * @return void
     */
    public function testSetDossCadre(): void {

        $obj = new Organismes();

        $obj->setDossCadre("dossCadre");
        $this->assertEquals("dossCadre", $obj->getDossCadre());
    }

    /**
     * Tests the setDossNonCadre() method.
     *
     * @return void
     */
    public function testSetDossNonCadre(): void {

        $obj = new Organismes();

        $obj->setDossNonCadre("dossNonCadre");
        $this->assertEquals("dossNonCadre", $obj->getDossNonCadre());
    }

    /**
     * Tests the setEditionDucs() method.
     *
     * @return void
     */
    public function testSetEditionDucs(): void {

        $obj = new Organismes();

        $obj->setEditionDucs(true);
        $this->assertEquals(true, $obj->getEditionDucs());
    }

    /**
     * Tests the setGestionPaieDecaleeOc() method.
     *
     * @return void
     */
    public function testSetGestionPaieDecaleeOc(): void {

        $obj = new Organismes();

        $obj->setGestionPaieDecaleeOc(true);
        $this->assertEquals(true, $obj->getGestionPaieDecaleeOc());
    }

    /**
     * Tests the setGroupeInterne() method.
     *
     * @return void
     */
    public function testSetGroupeInterne(): void {

        $obj = new Organismes();

        $obj->setGroupeInterne("groupeInterne");
        $this->assertEquals("groupeInterne", $obj->getGroupeInterne());
    }

    /**
     * Tests the setIdIntervenant() method.
     *
     * @return void
     */
    public function testSetIdIntervenant(): void {

        $obj = new Organismes();

        $obj->setIdIntervenant("idIntervenant");
        $this->assertEquals("idIntervenant", $obj->getIdIntervenant());
    }

    /**
     * Tests the setJourExigible() method.
     *
     * @return void
     */
    public function testSetJourExigible(): void {

        $obj = new Organismes();

        $obj->setJourExigible("jourExigible");
        $this->assertEquals("jourExigible", $obj->getJourExigible());
    }

    /**
     * Tests the setJourLimiteDepot() method.
     *
     * @return void
     */
    public function testSetJourLimiteDepot(): void {

        $obj = new Organismes();

        $obj->setJourLimiteDepot("jourLimiteDepot");
        $this->assertEquals("jourLimiteDepot", $obj->getJourLimiteDepot());
    }

    /**
     * Tests the setJourReglement() method.
     *
     * @return void
     */
    public function testSetJourReglement(): void {

        $obj = new Organismes();

        $obj->setJourReglement("jourReglement");
        $this->assertEquals("jourReglement", $obj->getJourReglement());
    }

    /**
     * Tests the setMensTrim() method.
     *
     * @return void
     */
    public function testSetMensTrim(): void {

        $obj = new Organismes();

        $obj->setMensTrim("mensTrim");
        $this->assertEquals("mensTrim", $obj->getMensTrim());
    }

    /**
     * Tests the setNoAffiliation() method.
     *
     * @return void
     */
    public function testSetNoAffiliation(): void {

        $obj = new Organismes();

        $obj->setNoAffiliation("noAffiliation");
        $this->assertEquals("noAffiliation", $obj->getNoAffiliation());
    }

    /**
     * Tests the setOptiqueDucs() method.
     *
     * @return void
     */
    public function testSetOptiqueDucs(): void {

        $obj = new Organismes();

        $obj->setOptiqueDucs("optiqueDucs");
        $this->assertEquals("optiqueDucs", $obj->getOptiqueDucs());
    }

    /**
     * Tests the setPaiementEdiVlu() method.
     *
     * @return void
     */
    public function testSetPaiementEdiVlu(): void {

        $obj = new Organismes();

        $obj->setPaiementEdiVlu(true);
        $this->assertEquals(true, $obj->getPaiementEdiVlu());
    }

    /**
     * Tests the setPasTraiterEdi() method.
     *
     * @return void
     */
    public function testSetPasTraiterEdi(): void {

        $obj = new Organismes();

        $obj->setPasTraiterEdi(true);
        $this->assertEquals(true, $obj->getPasTraiterEdi());
    }

    /**
     * Tests the setRib() method.
     *
     * @return void
     */
    public function testSetRib(): void {

        $obj = new Organismes();

        $obj->setRib("rib");
        $this->assertEquals("rib", $obj->getRib());
    }

    /**
     * Tests the setTelepaiement() method.
     *
     * @return void
     */
    public function testSetTelepaiement(): void {

        $obj = new Organismes();

        $obj->setTelepaiement(true);
        $this->assertEquals(true, $obj->getTelepaiement());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Organismes();

        $this->assertNull($obj->getCentrePayeur());
        $this->assertNull($obj->getCodeCatCadre());
        $this->assertNull($obj->getCodeCentre());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeNonCadre());
        $this->assertNull($obj->getCodeOrganisme());
        $this->assertNull($obj->getCompteCharge());
        $this->assertNull($obj->getCompteTiers());
        $this->assertNull($obj->getCotAssedicParUrssaf());
        $this->assertNull($obj->getCotitel());
        $this->assertNull($obj->getDossCadre());
        $this->assertNull($obj->getDossNonCadre());
        $this->assertNull($obj->getEditionDucs());
        $this->assertNull($obj->getGestionPaieDecaleeOc());
        $this->assertNull($obj->getGroupeInterne());
        $this->assertNull($obj->getIdIntervenant());
        $this->assertNull($obj->getJourExigible());
        $this->assertNull($obj->getJourLimiteDepot());
        $this->assertNull($obj->getJourReglement());
        $this->assertNull($obj->getMensTrim());
        $this->assertNull($obj->getNoAffiliation());
        $this->assertNull($obj->getOptiqueDucs());
        $this->assertNull($obj->getPaiementEdiVlu());
        $this->assertNull($obj->getPasTraiterEdi());
        $this->assertNull($obj->getRib());
        $this->assertNull($obj->getTelepaiement());
    }
}
