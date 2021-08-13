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
use WBW\Library\Quadratus\Model\Proprete\DevisEntetes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Devis entetes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class DevisEntetesTest extends AbstractTestCase {

    /**
     * Tests the setBtq() method.
     *
     * @return void
     */
    public function testSetBtq(): void {

        $obj = new DevisEntetes();

        $obj->setBtq("btq");
        $this->assertEquals("btq", $obj->getBtq());
    }

    /**
     * Tests the setCivilite() method.
     *
     * @return void
     */
    public function testSetCivilite(): void {

        $obj = new DevisEntetes();

        $obj->setCivilite("civilite");
        $this->assertEquals("civilite", $obj->getCivilite());
    }

    /**
     * Tests the setClientProspect() method.
     *
     * @return void
     */
    public function testSetClientProspect(): void {

        $obj = new DevisEntetes();

        $obj->setClientProspect(true);
        $this->assertEquals(true, $obj->getClientProspect());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new DevisEntetes();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeCommercial() method.
     *
     * @return void
     */
    public function testSetCodeCommercial(): void {

        $obj = new DevisEntetes();

        $obj->setCodeCommercial("codeCommercial");
        $this->assertEquals("codeCommercial", $obj->getCodeCommercial());
    }

    /**
     * Tests the setCodePays() method.
     *
     * @return void
     */
    public function testSetCodePays(): void {

        $obj = new DevisEntetes();

        $obj->setCodePays("codePays");
        $this->assertEquals("codePays", $obj->getCodePays());
    }

    /**
     * Tests the setCodePostal() method.
     *
     * @return void
     */
    public function testSetCodePostal(): void {

        $obj = new DevisEntetes();

        $obj->setCodePostal("codePostal");
        $this->assertEquals("codePostal", $obj->getCodePostal());
    }

    /**
     * Tests the setComplement() method.
     *
     * @return void
     */
    public function testSetComplement(): void {

        $obj = new DevisEntetes();

        $obj->setComplement("complement");
        $this->assertEquals("complement", $obj->getComplement());
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

        $obj = new DevisEntetes();

        $obj->setDateCreation($dateCreation);
        $this->assertSame($dateCreation, $obj->getDateCreation());
    }

    /**
     * Tests the setDateDevis() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDevis(): void {

        // Set a Date/time mock.
        $dateDevis = new DateTime("2018-09-10");

        $obj = new DevisEntetes();

        $obj->setDateDevis($dateDevis);
        $this->assertSame($dateDevis, $obj->getDateDevis());
    }

    /**
     * Tests the setDateModification() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateModification(): void {

        // Set a Date/time mock.
        $dateModification = new DateTime("2018-09-10");

        $obj = new DevisEntetes();

        $obj->setDateModification($dateModification);
        $this->assertSame($dateModification, $obj->getDateModification());
    }

    /**
     * Tests the setEtat() method.
     *
     * @return void
     */
    public function testSetEtat(): void {

        $obj = new DevisEntetes();

        $obj->setEtat("etat");
        $this->assertEquals("etat", $obj->getEtat());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new DevisEntetes();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setLienDocument() method.
     *
     * @return void
     */
    public function testSetLienDocument(): void {

        $obj = new DevisEntetes();

        $obj->setLienDocument("lienDocument");
        $this->assertEquals("lienDocument", $obj->getLienDocument());
    }

    /**
     * Tests the setMontantHt() method.
     *
     * @return void
     */
    public function testSetMontantHt(): void {

        $obj = new DevisEntetes();

        $obj->setMontantHt(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantHt());
    }

    /**
     * Tests the setNomAdresse() method.
     *
     * @return void
     */
    public function testSetNomAdresse(): void {

        $obj = new DevisEntetes();

        $obj->setNomAdresse("nomAdresse");
        $this->assertEquals("nomAdresse", $obj->getNomAdresse());
    }

    /**
     * Tests the setNomSuite() method.
     *
     * @return void
     */
    public function testSetNomSuite(): void {

        $obj = new DevisEntetes();

        $obj->setNomSuite("nomSuite");
        $this->assertEquals("nomSuite", $obj->getNomSuite());
    }

    /**
     * Tests the setNomSuite2() method.
     *
     * @return void
     */
    public function testSetNomSuite2(): void {

        $obj = new DevisEntetes();

        $obj->setNomSuite2("nomSuite2");
        $this->assertEquals("nomSuite2", $obj->getNomSuite2());
    }

    /**
     * Tests the setNomSuite3() method.
     *
     * @return void
     */
    public function testSetNomSuite3(): void {

        $obj = new DevisEntetes();

        $obj->setNomSuite3("nomSuite3");
        $this->assertEquals("nomSuite3", $obj->getNomSuite3());
    }

    /**
     * Tests the setNomVille() method.
     *
     * @return void
     */
    public function testSetNomVille(): void {

        $obj = new DevisEntetes();

        $obj->setNomVille("nomVille");
        $this->assertEquals("nomVille", $obj->getNomVille());
    }

    /**
     * Tests the setNomVoie() method.
     *
     * @return void
     */
    public function testSetNomVoie(): void {

        $obj = new DevisEntetes();

        $obj->setNomVoie("nomVoie");
        $this->assertEquals("nomVoie", $obj->getNomVoie());
    }

    /**
     * Tests the setNumDevis() method.
     *
     * @return void
     */
    public function testSetNumDevis(): void {

        $obj = new DevisEntetes();

        $obj->setNumDevis("numDevis");
        $this->assertEquals("numDevis", $obj->getNumDevis());
    }

    /**
     * Tests the setNumVoie() method.
     *
     * @return void
     */
    public function testSetNumVoie(): void {

        $obj = new DevisEntetes();

        $obj->setNumVoie("numVoie");
        $this->assertEquals("numVoie", $obj->getNumVoie());
    }

    /**
     * Tests the setNumeroPj() method.
     *
     * @return void
     */
    public function testSetNumeroPj(): void {

        $obj = new DevisEntetes();

        $obj->setNumeroPj(10);
        $this->assertEquals(10, $obj->getNumeroPj());
    }

    /**
     * Tests the setReference1() method.
     *
     * @return void
     */
    public function testSetReference1(): void {

        $obj = new DevisEntetes();

        $obj->setReference1("reference1");
        $this->assertEquals("reference1", $obj->getReference1());
    }

    /**
     * Tests the setReference2() method.
     *
     * @return void
     */
    public function testSetReference2(): void {

        $obj = new DevisEntetes();

        $obj->setReference2("reference2");
        $this->assertEquals("reference2", $obj->getReference2());
    }

    /**
     * Tests the setReference3() method.
     *
     * @return void
     */
    public function testSetReference3(): void {

        $obj = new DevisEntetes();

        $obj->setReference3("reference3");
        $this->assertEquals("reference3", $obj->getReference3());
    }

    /**
     * Tests the setReference4() method.
     *
     * @return void
     */
    public function testSetReference4(): void {

        $obj = new DevisEntetes();

        $obj->setReference4("reference4");
        $this->assertEquals("reference4", $obj->getReference4());
    }

    /**
     * Tests the setTauxTva() method.
     *
     * @return void
     */
    public function testSetTauxTva(): void {

        $obj = new DevisEntetes();

        $obj->setTauxTva(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxTva());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DevisEntetes();

        $this->assertNull($obj->getBtq());
        $this->assertNull($obj->getCivilite());
        $this->assertNull($obj->getClientProspect());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCommercial());
        $this->assertNull($obj->getCodePays());
        $this->assertNull($obj->getCodePostal());
        $this->assertNull($obj->getComplement());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getDateDevis());
        $this->assertNull($obj->getDateModification());
        $this->assertNull($obj->getEtat());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getLienDocument());
        $this->assertNull($obj->getMontantHt());
        $this->assertNull($obj->getNomAdresse());
        $this->assertNull($obj->getNomSuite());
        $this->assertNull($obj->getNomSuite2());
        $this->assertNull($obj->getNomSuite3());
        $this->assertNull($obj->getNomVille());
        $this->assertNull($obj->getNomVoie());
        $this->assertNull($obj->getNumDevis());
        $this->assertNull($obj->getNumVoie());
        $this->assertNull($obj->getNumeroPj());
        $this->assertNull($obj->getReference1());
        $this->assertNull($obj->getReference2());
        $this->assertNull($obj->getReference3());
        $this->assertNull($obj->getReference4());
        $this->assertNull($obj->getTauxTva());
    }
}
