<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Highcharts\Tests\Model\Chart\Series\Funnel;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts data test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\Series\Funnel
 * @version 5.0.14
 */
class HighchartsDataTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $events = new \WBW\Library\Highcharts\Model\Chart\Series\Funnel\Data\HighchartsEvents();

        $exp = ["className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 6.0, "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "drilldown" => "e3fd48c72943315f737d8a814fda4fd1", "events" => $events->jsonSerialize(), "id" => "b80bb7740288fda1f201890375a60c8f", "labelrank" => 42.0, "legendIndex" => 65.0, "name" => "b068931cc450442b63f5b3d276ea4297", "selected" => false, "y" => 73.0];

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsData();
        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $obj->setColorIndex(6.0);
        $obj->setDataLabels(["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"]);
        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");
        $obj->setDrilldown("e3fd48c72943315f737d8a814fda4fd1");
        $obj->setEvents($events);
        $obj->setId("b80bb7740288fda1f201890375a60c8f");
        $obj->setLabelrank(42.0);
        $obj->setLegendIndex(65.0);
        $obj->setName("b068931cc450442b63f5b3d276ea4297");
        $obj->setSelected(false);
        $obj->setY(73.0);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests newEvents()
     *
     * @return void.
     */
    public function testNewEvents(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsData();

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\Series\Funnel\Data\HighchartsEvents::class, $res);
    }

    /**
     * Tests setClassName()
     *
     * @return void.
     */
    public function testSetClassName(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsData();

        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $this->assertEquals("6f66e878c62db60568a3487869695820", $obj->getClassName());
    }

    /**
     * Tests setColor()
     *
     * @return void.
     */
    public function testSetColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsData();

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $this->assertEquals("70dda5dfb8053dc6d1c492574bce9bfd", $obj->getColor());
    }

    /**
     * Tests setColorIndex()
     *
     * @return void.
     */
    public function testSetColorIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsData();

        $obj->setColorIndex(39.0);
        $this->assertEquals(39.0, $obj->getColorIndex());
    }

    /**
     * Tests setDataLabels()
     *
     * @return void.
     */
    public function testSetDataLabels(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsData();

        $obj->setDataLabels(["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"]);
        $this->assertEquals(["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], $obj->getDataLabels());
    }

    /**
     * Tests setDescription()
     *
     * @return void.
     */
    public function testSetDescription(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsData();

        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");
        $this->assertEquals("67daf92c833c41c95db874e18fcb2786", $obj->getDescription());
    }

    /**
     * Tests setDrilldown()
     *
     * @return void.
     */
    public function testSetDrilldown(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsData();

        $obj->setDrilldown("e3fd48c72943315f737d8a814fda4fd1");
        $this->assertEquals("e3fd48c72943315f737d8a814fda4fd1", $obj->getDrilldown());
    }

    /**
     * Tests setEvents()
     *
     * @return void.
     */
    public function testSetEvents(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\Series\Funnel\Data\HighchartsEvents mock.
        $events = new \WBW\Library\Highcharts\Model\Chart\Series\Funnel\Data\HighchartsEvents();

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsData();

        $obj->setEvents($events);
        $this->assertSame($events, $obj->getEvents());
    }

    /**
     * Tests setId()
     *
     * @return void.
     */
    public function testSetId(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsData();

        $obj->setId("b80bb7740288fda1f201890375a60c8f");
        $this->assertEquals("b80bb7740288fda1f201890375a60c8f", $obj->getId());
    }

    /**
     * Tests setLabelrank()
     *
     * @return void.
     */
    public function testSetLabelrank(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsData();

        $obj->setLabelrank(76.0);
        $this->assertEquals(76.0, $obj->getLabelrank());
    }

    /**
     * Tests setLegendIndex()
     *
     * @return void.
     */
    public function testSetLegendIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsData();

        $obj->setLegendIndex(29.0);
        $this->assertEquals(29.0, $obj->getLegendIndex());
    }

    /**
     * Tests setName()
     *
     * @return void.
     */
    public function testSetName(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsData();

        $obj->setName("b068931cc450442b63f5b3d276ea4297");
        $this->assertEquals("b068931cc450442b63f5b3d276ea4297", $obj->getName());
    }

    /**
     * Tests setSelected()
     *
     * @return void.
     */
    public function testSetSelected(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsData();

        $obj->setSelected(true);
        $this->assertTrue($obj->getSelected());
    }

    /**
     * Tests setY()
     *
     * @return void.
     */
    public function testSetY(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsData();

        $obj->setY(0.0);
        $this->assertEquals(0.0, $obj->getY());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Funnel\HighchartsData();

        $this->assertNull($obj->getClassName());
        $this->assertNull($obj->getColor());
        $this->assertNull($obj->getColorIndex());
        $this->assertNull($obj->getDataLabels());
        $this->assertNull($obj->getDescription());
        $this->assertNull($obj->getDrilldown());
        $this->assertNull($obj->getEvents());
        $this->assertNull($obj->getId());
        $this->assertNull($obj->getLabelrank());
        $this->assertNull($obj->getLegendIndex());
        $this->assertNull($obj->getName());
        $this->assertFalse($obj->getSelected());
        $this->assertNull($obj->getY());
    }
}
