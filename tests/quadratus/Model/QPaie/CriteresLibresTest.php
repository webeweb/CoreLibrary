<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QPaie\CriteresLibres;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Criteres libres test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class CriteresLibresTest extends AbstractTestCase {

    /**
     * Tests the setCase1() method.
     *
     * @return void
     */
    public function testSetCase1(): void {

        $obj = new CriteresLibres();

        $obj->setCase1(true);
        $this->assertEquals(true, $obj->getCase1());
    }

    /**
     * Tests the setCase10() method.
     *
     * @return void
     */
    public function testSetCase10(): void {

        $obj = new CriteresLibres();

        $obj->setCase10(true);
        $this->assertEquals(true, $obj->getCase10());
    }

    /**
     * Tests the setCase11() method.
     *
     * @return void
     */
    public function testSetCase11(): void {

        $obj = new CriteresLibres();

        $obj->setCase11(true);
        $this->assertEquals(true, $obj->getCase11());
    }

    /**
     * Tests the setCase12() method.
     *
     * @return void
     */
    public function testSetCase12(): void {

        $obj = new CriteresLibres();

        $obj->setCase12(true);
        $this->assertEquals(true, $obj->getCase12());
    }

    /**
     * Tests the setCase13() method.
     *
     * @return void
     */
    public function testSetCase13(): void {

        $obj = new CriteresLibres();

        $obj->setCase13(true);
        $this->assertEquals(true, $obj->getCase13());
    }

    /**
     * Tests the setCase14() method.
     *
     * @return void
     */
    public function testSetCase14(): void {

        $obj = new CriteresLibres();

        $obj->setCase14(true);
        $this->assertEquals(true, $obj->getCase14());
    }

    /**
     * Tests the setCase15() method.
     *
     * @return void
     */
    public function testSetCase15(): void {

        $obj = new CriteresLibres();

        $obj->setCase15(true);
        $this->assertEquals(true, $obj->getCase15());
    }

    /**
     * Tests the setCase16() method.
     *
     * @return void
     */
    public function testSetCase16(): void {

        $obj = new CriteresLibres();

        $obj->setCase16(true);
        $this->assertEquals(true, $obj->getCase16());
    }

    /**
     * Tests the setCase17() method.
     *
     * @return void
     */
    public function testSetCase17(): void {

        $obj = new CriteresLibres();

        $obj->setCase17(true);
        $this->assertEquals(true, $obj->getCase17());
    }

    /**
     * Tests the setCase18() method.
     *
     * @return void
     */
    public function testSetCase18(): void {

        $obj = new CriteresLibres();

        $obj->setCase18(true);
        $this->assertEquals(true, $obj->getCase18());
    }

    /**
     * Tests the setCase19() method.
     *
     * @return void
     */
    public function testSetCase19(): void {

        $obj = new CriteresLibres();

        $obj->setCase19(true);
        $this->assertEquals(true, $obj->getCase19());
    }

    /**
     * Tests the setCase2() method.
     *
     * @return void
     */
    public function testSetCase2(): void {

        $obj = new CriteresLibres();

        $obj->setCase2(true);
        $this->assertEquals(true, $obj->getCase2());
    }

    /**
     * Tests the setCase20() method.
     *
     * @return void
     */
    public function testSetCase20(): void {

        $obj = new CriteresLibres();

        $obj->setCase20(true);
        $this->assertEquals(true, $obj->getCase20());
    }

    /**
     * Tests the setCase3() method.
     *
     * @return void
     */
    public function testSetCase3(): void {

        $obj = new CriteresLibres();

        $obj->setCase3(true);
        $this->assertEquals(true, $obj->getCase3());
    }

    /**
     * Tests the setCase4() method.
     *
     * @return void
     */
    public function testSetCase4(): void {

        $obj = new CriteresLibres();

        $obj->setCase4(true);
        $this->assertEquals(true, $obj->getCase4());
    }

    /**
     * Tests the setCase5() method.
     *
     * @return void
     */
    public function testSetCase5(): void {

        $obj = new CriteresLibres();

        $obj->setCase5(true);
        $this->assertEquals(true, $obj->getCase5());
    }

    /**
     * Tests the setCase6() method.
     *
     * @return void
     */
    public function testSetCase6(): void {

        $obj = new CriteresLibres();

        $obj->setCase6(true);
        $this->assertEquals(true, $obj->getCase6());
    }

    /**
     * Tests the setCase7() method.
     *
     * @return void
     */
    public function testSetCase7(): void {

        $obj = new CriteresLibres();

        $obj->setCase7(true);
        $this->assertEquals(true, $obj->getCase7());
    }

    /**
     * Tests the setCase8() method.
     *
     * @return void
     */
    public function testSetCase8(): void {

        $obj = new CriteresLibres();

        $obj->setCase8(true);
        $this->assertEquals(true, $obj->getCase8());
    }

    /**
     * Tests the setCase9() method.
     *
     * @return void
     */
    public function testSetCase9(): void {

        $obj = new CriteresLibres();

        $obj->setCase9(true);
        $this->assertEquals(true, $obj->getCase9());
    }

    /**
     * Tests the setDate1() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate1(): void {

        // Set a Date/time mock.
        $date1 = new DateTime("2018-09-10");

        $obj = new CriteresLibres();

        $obj->setDate1($date1);
        $this->assertSame($date1, $obj->getDate1());
    }

    /**
     * Tests the setDate10() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate10(): void {

        // Set a Date/time mock.
        $date10 = new DateTime("2018-09-10");

        $obj = new CriteresLibres();

        $obj->setDate10($date10);
        $this->assertSame($date10, $obj->getDate10());
    }

    /**
     * Tests the setDate11() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate11(): void {

        // Set a Date/time mock.
        $date11 = new DateTime("2018-09-10");

        $obj = new CriteresLibres();

        $obj->setDate11($date11);
        $this->assertSame($date11, $obj->getDate11());
    }

    /**
     * Tests the setDate12() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate12(): void {

        // Set a Date/time mock.
        $date12 = new DateTime("2018-09-10");

        $obj = new CriteresLibres();

        $obj->setDate12($date12);
        $this->assertSame($date12, $obj->getDate12());
    }

    /**
     * Tests the setDate13() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate13(): void {

        // Set a Date/time mock.
        $date13 = new DateTime("2018-09-10");

        $obj = new CriteresLibres();

        $obj->setDate13($date13);
        $this->assertSame($date13, $obj->getDate13());
    }

    /**
     * Tests the setDate14() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate14(): void {

        // Set a Date/time mock.
        $date14 = new DateTime("2018-09-10");

        $obj = new CriteresLibres();

        $obj->setDate14($date14);
        $this->assertSame($date14, $obj->getDate14());
    }

    /**
     * Tests the setDate15() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate15(): void {

        // Set a Date/time mock.
        $date15 = new DateTime("2018-09-10");

        $obj = new CriteresLibres();

        $obj->setDate15($date15);
        $this->assertSame($date15, $obj->getDate15());
    }

    /**
     * Tests the setDate16() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate16(): void {

        // Set a Date/time mock.
        $date16 = new DateTime("2018-09-10");

        $obj = new CriteresLibres();

        $obj->setDate16($date16);
        $this->assertSame($date16, $obj->getDate16());
    }

    /**
     * Tests the setDate17() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate17(): void {

        // Set a Date/time mock.
        $date17 = new DateTime("2018-09-10");

        $obj = new CriteresLibres();

        $obj->setDate17($date17);
        $this->assertSame($date17, $obj->getDate17());
    }

    /**
     * Tests the setDate18() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate18(): void {

        // Set a Date/time mock.
        $date18 = new DateTime("2018-09-10");

        $obj = new CriteresLibres();

        $obj->setDate18($date18);
        $this->assertSame($date18, $obj->getDate18());
    }

    /**
     * Tests the setDate19() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate19(): void {

        // Set a Date/time mock.
        $date19 = new DateTime("2018-09-10");

        $obj = new CriteresLibres();

        $obj->setDate19($date19);
        $this->assertSame($date19, $obj->getDate19());
    }

    /**
     * Tests the setDate2() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate2(): void {

        // Set a Date/time mock.
        $date2 = new DateTime("2018-09-10");

        $obj = new CriteresLibres();

        $obj->setDate2($date2);
        $this->assertSame($date2, $obj->getDate2());
    }

    /**
     * Tests the setDate20() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate20(): void {

        // Set a Date/time mock.
        $date20 = new DateTime("2018-09-10");

        $obj = new CriteresLibres();

        $obj->setDate20($date20);
        $this->assertSame($date20, $obj->getDate20());
    }

    /**
     * Tests the setDate3() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate3(): void {

        // Set a Date/time mock.
        $date3 = new DateTime("2018-09-10");

        $obj = new CriteresLibres();

        $obj->setDate3($date3);
        $this->assertSame($date3, $obj->getDate3());
    }

    /**
     * Tests the setDate4() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate4(): void {

        // Set a Date/time mock.
        $date4 = new DateTime("2018-09-10");

        $obj = new CriteresLibres();

        $obj->setDate4($date4);
        $this->assertSame($date4, $obj->getDate4());
    }

    /**
     * Tests the setDate5() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate5(): void {

        // Set a Date/time mock.
        $date5 = new DateTime("2018-09-10");

        $obj = new CriteresLibres();

        $obj->setDate5($date5);
        $this->assertSame($date5, $obj->getDate5());
    }

    /**
     * Tests the setDate6() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate6(): void {

        // Set a Date/time mock.
        $date6 = new DateTime("2018-09-10");

        $obj = new CriteresLibres();

        $obj->setDate6($date6);
        $this->assertSame($date6, $obj->getDate6());
    }

    /**
     * Tests the setDate7() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate7(): void {

        // Set a Date/time mock.
        $date7 = new DateTime("2018-09-10");

        $obj = new CriteresLibres();

        $obj->setDate7($date7);
        $this->assertSame($date7, $obj->getDate7());
    }

    /**
     * Tests the setDate8() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate8(): void {

        // Set a Date/time mock.
        $date8 = new DateTime("2018-09-10");

        $obj = new CriteresLibres();

        $obj->setDate8($date8);
        $this->assertSame($date8, $obj->getDate8());
    }

    /**
     * Tests the setDate9() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate9(): void {

        // Set a Date/time mock.
        $date9 = new DateTime("2018-09-10");

        $obj = new CriteresLibres();

        $obj->setDate9($date9);
        $this->assertSame($date9, $obj->getDate9());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new CriteresLibres();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setTexte1() method.
     *
     * @return void
     */
    public function testSetTexte1(): void {

        $obj = new CriteresLibres();

        $obj->setTexte1("texte1");
        $this->assertEquals("texte1", $obj->getTexte1());
    }

    /**
     * Tests the setTexte10() method.
     *
     * @return void
     */
    public function testSetTexte10(): void {

        $obj = new CriteresLibres();

        $obj->setTexte10("texte10");
        $this->assertEquals("texte10", $obj->getTexte10());
    }

    /**
     * Tests the setTexte11() method.
     *
     * @return void
     */
    public function testSetTexte11(): void {

        $obj = new CriteresLibres();

        $obj->setTexte11("texte11");
        $this->assertEquals("texte11", $obj->getTexte11());
    }

    /**
     * Tests the setTexte12() method.
     *
     * @return void
     */
    public function testSetTexte12(): void {

        $obj = new CriteresLibres();

        $obj->setTexte12("texte12");
        $this->assertEquals("texte12", $obj->getTexte12());
    }

    /**
     * Tests the setTexte13() method.
     *
     * @return void
     */
    public function testSetTexte13(): void {

        $obj = new CriteresLibres();

        $obj->setTexte13("texte13");
        $this->assertEquals("texte13", $obj->getTexte13());
    }

    /**
     * Tests the setTexte14() method.
     *
     * @return void
     */
    public function testSetTexte14(): void {

        $obj = new CriteresLibres();

        $obj->setTexte14("texte14");
        $this->assertEquals("texte14", $obj->getTexte14());
    }

    /**
     * Tests the setTexte15() method.
     *
     * @return void
     */
    public function testSetTexte15(): void {

        $obj = new CriteresLibres();

        $obj->setTexte15("texte15");
        $this->assertEquals("texte15", $obj->getTexte15());
    }

    /**
     * Tests the setTexte16() method.
     *
     * @return void
     */
    public function testSetTexte16(): void {

        $obj = new CriteresLibres();

        $obj->setTexte16("texte16");
        $this->assertEquals("texte16", $obj->getTexte16());
    }

    /**
     * Tests the setTexte17() method.
     *
     * @return void
     */
    public function testSetTexte17(): void {

        $obj = new CriteresLibres();

        $obj->setTexte17("texte17");
        $this->assertEquals("texte17", $obj->getTexte17());
    }

    /**
     * Tests the setTexte18() method.
     *
     * @return void
     */
    public function testSetTexte18(): void {

        $obj = new CriteresLibres();

        $obj->setTexte18("texte18");
        $this->assertEquals("texte18", $obj->getTexte18());
    }

    /**
     * Tests the setTexte19() method.
     *
     * @return void
     */
    public function testSetTexte19(): void {

        $obj = new CriteresLibres();

        $obj->setTexte19("texte19");
        $this->assertEquals("texte19", $obj->getTexte19());
    }

    /**
     * Tests the setTexte2() method.
     *
     * @return void
     */
    public function testSetTexte2(): void {

        $obj = new CriteresLibres();

        $obj->setTexte2("texte2");
        $this->assertEquals("texte2", $obj->getTexte2());
    }

    /**
     * Tests the setTexte20() method.
     *
     * @return void
     */
    public function testSetTexte20(): void {

        $obj = new CriteresLibres();

        $obj->setTexte20("texte20");
        $this->assertEquals("texte20", $obj->getTexte20());
    }

    /**
     * Tests the setTexte3() method.
     *
     * @return void
     */
    public function testSetTexte3(): void {

        $obj = new CriteresLibres();

        $obj->setTexte3("texte3");
        $this->assertEquals("texte3", $obj->getTexte3());
    }

    /**
     * Tests the setTexte4() method.
     *
     * @return void
     */
    public function testSetTexte4(): void {

        $obj = new CriteresLibres();

        $obj->setTexte4("texte4");
        $this->assertEquals("texte4", $obj->getTexte4());
    }

    /**
     * Tests the setTexte5() method.
     *
     * @return void
     */
    public function testSetTexte5(): void {

        $obj = new CriteresLibres();

        $obj->setTexte5("texte5");
        $this->assertEquals("texte5", $obj->getTexte5());
    }

    /**
     * Tests the setTexte6() method.
     *
     * @return void
     */
    public function testSetTexte6(): void {

        $obj = new CriteresLibres();

        $obj->setTexte6("texte6");
        $this->assertEquals("texte6", $obj->getTexte6());
    }

    /**
     * Tests the setTexte7() method.
     *
     * @return void
     */
    public function testSetTexte7(): void {

        $obj = new CriteresLibres();

        $obj->setTexte7("texte7");
        $this->assertEquals("texte7", $obj->getTexte7());
    }

    /**
     * Tests the setTexte8() method.
     *
     * @return void
     */
    public function testSetTexte8(): void {

        $obj = new CriteresLibres();

        $obj->setTexte8("texte8");
        $this->assertEquals("texte8", $obj->getTexte8());
    }

    /**
     * Tests the setTexte9() method.
     *
     * @return void
     */
    public function testSetTexte9(): void {

        $obj = new CriteresLibres();

        $obj->setTexte9("texte9");
        $this->assertEquals("texte9", $obj->getTexte9());
    }

    /**
     * Tests the setValeur1() method.
     *
     * @return void
     */
    public function testSetValeur1(): void {

        $obj = new CriteresLibres();

        $obj->setValeur1(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur1());
    }

    /**
     * Tests the setValeur10() method.
     *
     * @return void
     */
    public function testSetValeur10(): void {

        $obj = new CriteresLibres();

        $obj->setValeur10(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur10());
    }

    /**
     * Tests the setValeur11() method.
     *
     * @return void
     */
    public function testSetValeur11(): void {

        $obj = new CriteresLibres();

        $obj->setValeur11(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur11());
    }

    /**
     * Tests the setValeur12() method.
     *
     * @return void
     */
    public function testSetValeur12(): void {

        $obj = new CriteresLibres();

        $obj->setValeur12(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur12());
    }

    /**
     * Tests the setValeur13() method.
     *
     * @return void
     */
    public function testSetValeur13(): void {

        $obj = new CriteresLibres();

        $obj->setValeur13(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur13());
    }

    /**
     * Tests the setValeur14() method.
     *
     * @return void
     */
    public function testSetValeur14(): void {

        $obj = new CriteresLibres();

        $obj->setValeur14(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur14());
    }

    /**
     * Tests the setValeur15() method.
     *
     * @return void
     */
    public function testSetValeur15(): void {

        $obj = new CriteresLibres();

        $obj->setValeur15(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur15());
    }

    /**
     * Tests the setValeur16() method.
     *
     * @return void
     */
    public function testSetValeur16(): void {

        $obj = new CriteresLibres();

        $obj->setValeur16(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur16());
    }

    /**
     * Tests the setValeur17() method.
     *
     * @return void
     */
    public function testSetValeur17(): void {

        $obj = new CriteresLibres();

        $obj->setValeur17(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur17());
    }

    /**
     * Tests the setValeur18() method.
     *
     * @return void
     */
    public function testSetValeur18(): void {

        $obj = new CriteresLibres();

        $obj->setValeur18(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur18());
    }

    /**
     * Tests the setValeur19() method.
     *
     * @return void
     */
    public function testSetValeur19(): void {

        $obj = new CriteresLibres();

        $obj->setValeur19(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur19());
    }

    /**
     * Tests the setValeur2() method.
     *
     * @return void
     */
    public function testSetValeur2(): void {

        $obj = new CriteresLibres();

        $obj->setValeur2(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur2());
    }

    /**
     * Tests the setValeur20() method.
     *
     * @return void
     */
    public function testSetValeur20(): void {

        $obj = new CriteresLibres();

        $obj->setValeur20(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur20());
    }

    /**
     * Tests the setValeur3() method.
     *
     * @return void
     */
    public function testSetValeur3(): void {

        $obj = new CriteresLibres();

        $obj->setValeur3(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur3());
    }

    /**
     * Tests the setValeur4() method.
     *
     * @return void
     */
    public function testSetValeur4(): void {

        $obj = new CriteresLibres();

        $obj->setValeur4(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur4());
    }

    /**
     * Tests the setValeur5() method.
     *
     * @return void
     */
    public function testSetValeur5(): void {

        $obj = new CriteresLibres();

        $obj->setValeur5(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur5());
    }

    /**
     * Tests the setValeur6() method.
     *
     * @return void
     */
    public function testSetValeur6(): void {

        $obj = new CriteresLibres();

        $obj->setValeur6(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur6());
    }

    /**
     * Tests the setValeur7() method.
     *
     * @return void
     */
    public function testSetValeur7(): void {

        $obj = new CriteresLibres();

        $obj->setValeur7(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur7());
    }

    /**
     * Tests the setValeur8() method.
     *
     * @return void
     */
    public function testSetValeur8(): void {

        $obj = new CriteresLibres();

        $obj->setValeur8(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur8());
    }

    /**
     * Tests the setValeur9() method.
     *
     * @return void
     */
    public function testSetValeur9(): void {

        $obj = new CriteresLibres();

        $obj->setValeur9(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur9());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new CriteresLibres();

        $this->assertNull($obj->getCase1());
        $this->assertNull($obj->getCase10());
        $this->assertNull($obj->getCase11());
        $this->assertNull($obj->getCase12());
        $this->assertNull($obj->getCase13());
        $this->assertNull($obj->getCase14());
        $this->assertNull($obj->getCase15());
        $this->assertNull($obj->getCase16());
        $this->assertNull($obj->getCase17());
        $this->assertNull($obj->getCase18());
        $this->assertNull($obj->getCase19());
        $this->assertNull($obj->getCase2());
        $this->assertNull($obj->getCase20());
        $this->assertNull($obj->getCase3());
        $this->assertNull($obj->getCase4());
        $this->assertNull($obj->getCase5());
        $this->assertNull($obj->getCase6());
        $this->assertNull($obj->getCase7());
        $this->assertNull($obj->getCase8());
        $this->assertNull($obj->getCase9());
        $this->assertNull($obj->getDate1());
        $this->assertNull($obj->getDate10());
        $this->assertNull($obj->getDate11());
        $this->assertNull($obj->getDate12());
        $this->assertNull($obj->getDate13());
        $this->assertNull($obj->getDate14());
        $this->assertNull($obj->getDate15());
        $this->assertNull($obj->getDate16());
        $this->assertNull($obj->getDate17());
        $this->assertNull($obj->getDate18());
        $this->assertNull($obj->getDate19());
        $this->assertNull($obj->getDate2());
        $this->assertNull($obj->getDate20());
        $this->assertNull($obj->getDate3());
        $this->assertNull($obj->getDate4());
        $this->assertNull($obj->getDate5());
        $this->assertNull($obj->getDate6());
        $this->assertNull($obj->getDate7());
        $this->assertNull($obj->getDate8());
        $this->assertNull($obj->getDate9());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getTexte1());
        $this->assertNull($obj->getTexte10());
        $this->assertNull($obj->getTexte11());
        $this->assertNull($obj->getTexte12());
        $this->assertNull($obj->getTexte13());
        $this->assertNull($obj->getTexte14());
        $this->assertNull($obj->getTexte15());
        $this->assertNull($obj->getTexte16());
        $this->assertNull($obj->getTexte17());
        $this->assertNull($obj->getTexte18());
        $this->assertNull($obj->getTexte19());
        $this->assertNull($obj->getTexte2());
        $this->assertNull($obj->getTexte20());
        $this->assertNull($obj->getTexte3());
        $this->assertNull($obj->getTexte4());
        $this->assertNull($obj->getTexte5());
        $this->assertNull($obj->getTexte6());
        $this->assertNull($obj->getTexte7());
        $this->assertNull($obj->getTexte8());
        $this->assertNull($obj->getTexte9());
        $this->assertNull($obj->getValeur1());
        $this->assertNull($obj->getValeur10());
        $this->assertNull($obj->getValeur11());
        $this->assertNull($obj->getValeur12());
        $this->assertNull($obj->getValeur13());
        $this->assertNull($obj->getValeur14());
        $this->assertNull($obj->getValeur15());
        $this->assertNull($obj->getValeur16());
        $this->assertNull($obj->getValeur17());
        $this->assertNull($obj->getValeur18());
        $this->assertNull($obj->getValeur19());
        $this->assertNull($obj->getValeur2());
        $this->assertNull($obj->getValeur20());
        $this->assertNull($obj->getValeur3());
        $this->assertNull($obj->getValeur4());
        $this->assertNull($obj->getValeur5());
        $this->assertNull($obj->getValeur6());
        $this->assertNull($obj->getValeur7());
        $this->assertNull($obj->getValeur8());
        $this->assertNull($obj->getValeur9());
    }
}
