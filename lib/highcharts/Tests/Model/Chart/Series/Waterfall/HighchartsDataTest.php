<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Highcharts\Tests\Model\Chart\Series\Waterfall;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts data test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\Series\Waterfall
 * @version 5.0.14
 */
class HighchartsDataTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $events = new \WBW\Library\Highcharts\Model\Chart\Series\Waterfall\Data\HighchartsEvents();

        $exp = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 36.0, "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "drilldown" => "e3fd48c72943315f737d8a814fda4fd1", "events" => $events->jsonSerialize(), "id" => "b80bb7740288fda1f201890375a60c8f", "isIntermediateSum" => false, "isSum" => true, "labelrank" => 66.0, "name" => "b068931cc450442b63f5b3d276ea4297", "selected" => false, "x" => 25.0, "y" => 45.0];

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Waterfall\HighchartsData();
        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $obj->setColorIndex(36.0);
        $obj->setDataLabels(["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"]);
        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");
        $obj->setDrilldown("e3fd48c72943315f737d8a814fda4fd1");
        $obj->setEvents($events);
        $obj->setId("b80bb7740288fda1f201890375a60c8f");
        $obj->setIntermediateSum(false);
        $obj->setSum(true);
        $obj->setLabelrank(66.0);
        $obj->setName("b068931cc450442b63f5b3d276ea4297");
        $obj->setSelected(false);
        $obj->setX(25.0);
        $obj->setY(45.0);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests newEvents()
     *
     * @return void.
     */
    public function testNewEvents(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Waterfall\HighchartsData();

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\Series\Waterfall\Data\HighchartsEvents::class, $res);
    }

    /**
     * Tests setClassName()
     *
     * @return void.
     */
    public function testSetClassName(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Waterfall\HighchartsData();

        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $this->assertEquals("6f66e878c62db60568a3487869695820", $obj->getClassName());
    }

    /**
     * Tests setColor()
     *
     * @return void.
     */
    public function testSetColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Waterfall\HighchartsData();

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $this->assertEquals("70dda5dfb8053dc6d1c492574bce9bfd", $obj->getColor());
    }

    /**
     * Tests setColorIndex()
     *
     * @return void.
     */
    public function testSetColorIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Waterfall\HighchartsData();

        $obj->setColorIndex(28.0);
        $this->assertEquals(28.0, $obj->getColorIndex());
    }

    /**
     * Tests setDataLabels()
     *
     * @return void.
     */
    public function testSetDataLabels(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Waterfall\HighchartsData();

        $obj->setDataLabels(["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"]);
        $this->assertEquals(["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], $obj->getDataLabels());
    }

    /**
     * Tests setDescription()
     *
     * @return void.
     */
    public function testSetDescription(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Waterfall\HighchartsData();

        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");
        $this->assertEquals("67daf92c833c41c95db874e18fcb2786", $obj->getDescription());
    }

    /**
     * Tests setDrilldown()
     *
     * @return void.
     */
    public function testSetDrilldown(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Waterfall\HighchartsData();

        $obj->setDrilldown("e3fd48c72943315f737d8a814fda4fd1");
        $this->assertEquals("e3fd48c72943315f737d8a814fda4fd1", $obj->getDrilldown());
    }

    /**
     * Tests setEvents()
     *
     * @return void.
     */
    public function testSetEvents(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\Series\Waterfall\Data\HighchartsEvents mock.
        $events = new \WBW\Library\Highcharts\Model\Chart\Series\Waterfall\Data\HighchartsEvents();

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Waterfall\HighchartsData();

        $obj->setEvents($events);
        $this->assertSame($events, $obj->getEvents());
    }

    /**
     * Tests setId()
     *
     * @return void.
     */
    public function testSetId(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Waterfall\HighchartsData();

        $obj->setId("b80bb7740288fda1f201890375a60c8f");
        $this->assertEquals("b80bb7740288fda1f201890375a60c8f", $obj->getId());
    }

    /**
     * Tests setIsIntermediateSum()
     *
     * @return void.
     */
    public function testSetIsIntermediateSum(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Waterfall\HighchartsData();

        $obj->setIntermediateSum(false);
        $this->assertFalse($obj->getIntermediateSum());
    }

    /**
     * Tests setIsSum()
     *
     * @return void.
     */
    public function testSetIsSum(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Waterfall\HighchartsData();

        $obj->setSum(true);
        $this->assertTrue($obj->getSum());
    }

    /**
     * Tests setLabelrank()
     *
     * @return void.
     */
    public function testSetLabelrank(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Waterfall\HighchartsData();

        $obj->setLabelrank(83.0);
        $this->assertEquals(83.0, $obj->getLabelrank());
    }

    /**
     * Tests setName()
     *
     * @return void.
     */
    public function testSetName(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Waterfall\HighchartsData();

        $obj->setName("b068931cc450442b63f5b3d276ea4297");
        $this->assertEquals("b068931cc450442b63f5b3d276ea4297", $obj->getName());
    }

    /**
     * Tests setSelected()
     *
     * @return void.
     */
    public function testSetSelected(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Waterfall\HighchartsData();

        $obj->setSelected(true);
        $this->assertTrue($obj->getSelected());
    }

    /**
     * Tests setX()
     *
     * @return void.
     */
    public function testSetX(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Waterfall\HighchartsData();

        $obj->setX(65.0);
        $this->assertEquals(65.0, $obj->getX());
    }

    /**
     * Tests setY()
     *
     * @return void.
     */
    public function testSetY(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Waterfall\HighchartsData();

        $obj->setY(6.0);
        $this->assertEquals(6.0, $obj->getY());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Waterfall\HighchartsData();

        $this->assertNull($obj->getClassName());
        $this->assertNull($obj->getColor());
        $this->assertNull($obj->getColorIndex());
        $this->assertNull($obj->getDataLabels());
        $this->assertNull($obj->getDescription());
        $this->assertNull($obj->getDrilldown());
        $this->assertNull($obj->getEvents());
        $this->assertNull($obj->getId());
        $this->assertFalse($obj->getIntermediateSum());
        $this->assertFalse($obj->getSum());
        $this->assertNull($obj->getLabelrank());
        $this->assertNull($obj->getName());
        $this->assertFalse($obj->getSelected());
        $this->assertNull($obj->getX());
        $this->assertNull($obj->getY());
    }
}