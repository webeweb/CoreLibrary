<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QCompta;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QCompta\Centres;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Centres test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class CentresTest extends AbstractTestCase {

    /**
     * Tests the setAdresseRue1() method.
     *
     * @return void
     */
    public function testSetAdresseRue1(): void {

        $obj = new Centres();

        $obj->setAdresseRue1("adresseRue1");
        $this->assertEquals("adresseRue1", $obj->getAdresseRue1());
    }

    /**
     * Tests the setAdresseRue2() method.
     *
     * @return void
     */
    public function testSetAdresseRue2(): void {

        $obj = new Centres();

        $obj->setAdresseRue2("adresseRue2");
        $this->assertEquals("adresseRue2", $obj->getAdresseRue2());
    }

    /**
     * Tests the setAdresseVille() method.
     *
     * @return void
     */
    public function testSetAdresseVille(): void {

        $obj = new Centres();

        $obj->setAdresseVille("adresseVille");
        $this->assertEquals("adresseVille", $obj->getAdresseVille());
    }

    /**
     * Tests the setCentreInactif() method.
     *
     * @return void
     */
    public function testSetCentreInactif(): void {

        $obj = new Centres();

        $obj->setCentreInactif(true);
        $this->assertEquals(true, $obj->getCentreInactif());
    }

    /**
     * Tests the setCleRepartition() method.
     *
     * @return void
     */
    public function testSetCleRepartition(): void {

        $obj = new Centres();

        $obj->setCleRepartition("cleRepartition");
        $this->assertEquals("cleRepartition", $obj->getCleRepartition());
    }

    /**
     * Tests the setCode() method.
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new Centres();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
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

        $obj = new Centres();

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

        $obj = new Centres();

        $obj->setDateDevis($dateDevis);
        $this->assertSame($dateDevis, $obj->getDateDevis());
    }

    /**
     * Tests the setDescription() method.
     *
     * @return void
     */
    public function testSetDescription(): void {

        $obj = new Centres();

        $obj->setDescription("description");
        $this->assertEquals("description", $obj->getDescription());
    }

    /**
     * Tests the setIntitule() method.
     *
     * @return void
     */
    public function testSetIntitule(): void {

        $obj = new Centres();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests the setMargeDirecte() method.
     *
     * @return void
     */
    public function testSetMargeDirecte(): void {

        $obj = new Centres();

        $obj->setMargeDirecte(true);
        $this->assertEquals(true, $obj->getMargeDirecte());
    }

    /**
     * Tests the setNiveauRepartition() method.
     *
     * @return void
     */
    public function testSetNiveauRepartition(): void {

        $obj = new Centres();

        $obj->setNiveauRepartition("niveauRepartition");
        $this->assertEquals("niveauRepartition", $obj->getNiveauRepartition());
    }

    /**
     * Tests the setOrdreEdition() method.
     *
     * @return void
     */
    public function testSetOrdreEdition(): void {

        $obj = new Centres();

        $obj->setOrdreEdition(10);
        $this->assertEquals(10, $obj->getOrdreEdition());
    }

    /**
     * Tests the setRepartitionAna() method.
     *
     * @return void
     */
    public function testSetRepartitionAna(): void {

        $obj = new Centres();

        $obj->setRepartitionAna("repartitionAna");
        $this->assertEquals("repartitionAna", $obj->getRepartitionAna());
    }

    /**
     * Tests the setRepartitionAuto() method.
     *
     * @return void
     */
    public function testSetRepartitionAuto(): void {

        $obj = new Centres();

        $obj->setRepartitionAuto(true);
        $this->assertEquals(true, $obj->getRepartitionAuto());
    }

    /**
     * Tests the setResponsable() method.
     *
     * @return void
     */
    public function testSetResponsable(): void {

        $obj = new Centres();

        $obj->setResponsable("responsable");
        $this->assertEquals("responsable", $obj->getResponsable());
    }

    /**
     * Tests the setRestrictions() method.
     *
     * @return void
     */
    public function testSetRestrictions(): void {

        $obj = new Centres();

        $obj->setRestrictions("restrictions");
        $this->assertEquals("restrictions", $obj->getRestrictions());
    }

    /**
     * Tests the setSuiviAnneeRecolte() method.
     *
     * @return void
     */
    public function testSetSuiviAnneeRecolte(): void {

        $obj = new Centres();

        $obj->setSuiviAnneeRecolte(true);
        $this->assertEquals(true, $obj->getSuiviAnneeRecolte());
    }

    /**
     * Tests the setSuperficie() method.
     *
     * @return void
     */
    public function testSetSuperficie(): void {

        $obj = new Centres();

        $obj->setSuperficie(10.092018);
        $this->assertEquals(10.092018, $obj->getSuperficie());
    }

    /**
     * Tests the setTypeCentre() method.
     *
     * @return void
     */
    public function testSetTypeCentre(): void {

        $obj = new Centres();

        $obj->setTypeCentre("typeCentre");
        $this->assertEquals("typeCentre", $obj->getTypeCentre());
    }

    /**
     * Tests the setTypeSuivi() method.
     *
     * @return void
     */
    public function testSetTypeSuivi(): void {

        $obj = new Centres();

        $obj->setTypeSuivi("typeSuivi");
        $this->assertEquals("typeSuivi", $obj->getTypeSuivi());
    }

    /**
     * Tests the setTypeSuiviAutreTexte() method.
     *
     * @return void
     */
    public function testSetTypeSuiviAutreTexte(): void {

        $obj = new Centres();

        $obj->setTypeSuiviAutreTexte("typeSuiviAutreTexte");
        $this->assertEquals("typeSuiviAutreTexte", $obj->getTypeSuiviAutreTexte());
    }

    /**
     * Tests the setTypeSuiviAutreValeur() method.
     *
     * @return void
     */
    public function testSetTypeSuiviAutreValeur(): void {

        $obj = new Centres();

        $obj->setTypeSuiviAutreValeur(10.092018);
        $this->assertEquals(10.092018, $obj->getTypeSuiviAutreValeur());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Centres();

        $this->assertNull($obj->getAdresseRue1());
        $this->assertNull($obj->getAdresseRue2());
        $this->assertNull($obj->getAdresseVille());
        $this->assertNull($obj->getCentreInactif());
        $this->assertNull($obj->getCleRepartition());
        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getDateDevis());
        $this->assertNull($obj->getDescription());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getMargeDirecte());
        $this->assertNull($obj->getNiveauRepartition());
        $this->assertNull($obj->getOrdreEdition());
        $this->assertNull($obj->getRepartitionAna());
        $this->assertNull($obj->getRepartitionAuto());
        $this->assertNull($obj->getResponsable());
        $this->assertNull($obj->getRestrictions());
        $this->assertNull($obj->getSuiviAnneeRecolte());
        $this->assertNull($obj->getSuperficie());
        $this->assertNull($obj->getTypeCentre());
        $this->assertNull($obj->getTypeSuivi());
        $this->assertNull($obj->getTypeSuiviAutreTexte());
        $this->assertNull($obj->getTypeSuiviAutreValeur());
    }
}
