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

namespace WBW\Library\Highcharts\Tests\Model\Chart\Series\Polygon;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts data test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\Series\Polygon
 * @version 5.0.14
 */
class HighchartsDataTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $events = new \WBW\Library\Highcharts\Model\Chart\Series\Polygon\Data\HighchartsEvents();
        $marker = new \WBW\Library\Highcharts\Model\Chart\Series\Polygon\Data\HighchartsMarker();

        $exp = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 93.0, "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "drilldown" => "e3fd48c72943315f737d8a814fda4fd1", "events" => $events->jsonSerialize(), "id" => "b80bb7740288fda1f201890375a60c8f", "labelrank" => 39.0, "marker" => $marker->jsonSerialize(), "name" => "b068931cc450442b63f5b3d276ea4297", "selected" => true, "x" => 37.0, "y" => 10.0];

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Polygon\HighchartsData();
        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $obj->setColorIndex(93.0);
        $obj->setDataLabels(["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"]);
        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");
        $obj->setDrilldown("e3fd48c72943315f737d8a814fda4fd1");
        $obj->setEvents($events);
        $obj->setId("b80bb7740288fda1f201890375a60c8f");
        $obj->setLabelrank(39.0);
        $obj->setMarker($marker);
        $obj->setName("b068931cc450442b63f5b3d276ea4297");
        $obj->setSelected(true);
        $obj->setX(37.0);
        $obj->setY(10.0);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests newEvents()
     *
     * @return void.
     */
    public function testNewEvents(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Polygon\HighchartsData();

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\Series\Polygon\Data\HighchartsEvents::class, $res);
    }

    /**
     * Tests newMarker()
     *
     * @return void.
     */
    public function testNewMarker(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Polygon\HighchartsData();

        $res = $obj->newMarker();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\Series\Polygon\Data\HighchartsMarker::class, $res);
    }

    /**
     * Tests setClassName()
     *
     * @return void.
     */
    public function testSetClassName(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Polygon\HighchartsData();

        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $this->assertEquals("6f66e878c62db60568a3487869695820", $obj->getClassName());
    }

    /**
     * Tests setColor()
     *
     * @return void.
     */
    public function testSetColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Polygon\HighchartsData();

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $this->assertEquals("70dda5dfb8053dc6d1c492574bce9bfd", $obj->getColor());
    }

    /**
     * Tests setColorIndex()
     *
     * @return void.
     */
    public function testSetColorIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Polygon\HighchartsData();

        $obj->setColorIndex(36.0);
        $this->assertEquals(36.0, $obj->getColorIndex());
    }

    /**
     * Tests setDataLabels()
     *
     * @return void.
     */
    public function testSetDataLabels(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Polygon\HighchartsData();

        $obj->setDataLabels(["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"]);
        $this->assertEquals(["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], $obj->getDataLabels());
    }

    /**
     * Tests setDescription()
     *
     * @return void.
     */
    public function testSetDescription(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Polygon\HighchartsData();

        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");
        $this->assertEquals("67daf92c833c41c95db874e18fcb2786", $obj->getDescription());
    }

    /**
     * Tests setDrilldown()
     *
     * @return void.
     */
    public function testSetDrilldown(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Polygon\HighchartsData();

        $obj->setDrilldown("e3fd48c72943315f737d8a814fda4fd1");
        $this->assertEquals("e3fd48c72943315f737d8a814fda4fd1", $obj->getDrilldown());
    }

    /**
     * Tests setEvents()
     *
     * @return void.
     */
    public function testSetEvents(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\Series\Polygon\Data\HighchartsEvents mock.
        $events = new \WBW\Library\Highcharts\Model\Chart\Series\Polygon\Data\HighchartsEvents();

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Polygon\HighchartsData();

        $obj->setEvents($events);
        $this->assertSame($events, $obj->getEvents());
    }

    /**
     * Tests setId()
     *
     * @return void.
     */
    public function testSetId(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Polygon\HighchartsData();

        $obj->setId("b80bb7740288fda1f201890375a60c8f");
        $this->assertEquals("b80bb7740288fda1f201890375a60c8f", $obj->getId());
    }

    /**
     * Tests setLabelrank()
     *
     * @return void.
     */
    public function testSetLabelrank(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Polygon\HighchartsData();

        $obj->setLabelrank(13.0);
        $this->assertEquals(13.0, $obj->getLabelrank());
    }

    /**
     * Tests setMarker()
     *
     * @return void.
     */
    public function testSetMarker(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\Series\Polygon\Data\HighchartsMarker mock.
        $marker = new \WBW\Library\Highcharts\Model\Chart\Series\Polygon\Data\HighchartsMarker();

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Polygon\HighchartsData();

        $obj->setMarker($marker);
        $this->assertSame($marker, $obj->getMarker());
    }

    /**
     * Tests setName()
     *
     * @return void.
     */
    public function testSetName(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Polygon\HighchartsData();

        $obj->setName("b068931cc450442b63f5b3d276ea4297");
        $this->assertEquals("b068931cc450442b63f5b3d276ea4297", $obj->getName());
    }

    /**
     * Tests setSelected()
     *
     * @return void.
     */
    public function testSetSelected(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Polygon\HighchartsData();

        $obj->setSelected(true);
        $this->assertTrue($obj->getSelected());
    }

    /**
     * Tests setX()
     *
     * @return void.
     */
    public function testSetX(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Polygon\HighchartsData();

        $obj->setX(51.0);
        $this->assertEquals(51.0, $obj->getX());
    }

    /**
     * Tests setY()
     *
     * @return void.
     */
    public function testSetY(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Polygon\HighchartsData();

        $obj->setY(46.0);
        $this->assertEquals(46.0, $obj->getY());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Polygon\HighchartsData();

        $this->assertNull($obj->getClassName());
        $this->assertNull($obj->getColor());
        $this->assertNull($obj->getColorIndex());
        $this->assertNull($obj->getDataLabels());
        $this->assertNull($obj->getDescription());
        $this->assertNull($obj->getDrilldown());
        $this->assertNull($obj->getEvents());
        $this->assertNull($obj->getId());
        $this->assertNull($obj->getLabelrank());
        $this->assertNull($obj->getMarker());
        $this->assertNull($obj->getName());
        $this->assertFalse($obj->getSelected());
        $this->assertNull($obj->getX());
        $this->assertNull($obj->getY());
    }
}