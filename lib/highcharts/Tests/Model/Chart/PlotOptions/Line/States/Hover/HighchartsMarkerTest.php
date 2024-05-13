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

namespace WBW\Library\Highcharts\Tests\Model\Chart\PlotOptions\Line\States\Hover;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts marker test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\PlotOptions\Line\States\Hover
 * @version 5.0.14
 */
class HighchartsMarkerTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $exp = ["enabled" => false, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "height" => 36.0, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 96.0, "radius" => 55.0, "states" => "34d955a0df5f7af9c9b4e4dccb3c3564", "symbol" => "triangle-down", "width" => 28.0];

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Line\States\Hover\HighchartsMarker();
        $obj->setEnabled(false);
        $obj->setFillColor("1fde055d3ff900e04ca08bc82066d7fd");
        $obj->setHeight(36.0);
        $obj->setLineColor("c2580eebfdbdb9fc629f50cc147c3f63");
        $obj->setLineWidth(96.0);
        $obj->setRadius(55.0);
        $obj->setStates("34d955a0df5f7af9c9b4e4dccb3c3564");
        $obj->setSymbol("triangle-down");
        $obj->setWidth(28.0);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests setEnabled()
     *
     * @return void.
     */
    public function testSetEnabled(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Line\States\Hover\HighchartsMarker();

        $obj->setEnabled(true);
        $this->assertEquals(true, $obj->getEnabled());
    }

    /**
     * Tests setFillColor()
     *
     * @return void.
     */
    public function testSetFillColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Line\States\Hover\HighchartsMarker();

        $obj->setFillColor("1fde055d3ff900e04ca08bc82066d7fd");
        $this->assertEquals("1fde055d3ff900e04ca08bc82066d7fd", $obj->getFillColor());
    }

    /**
     * Tests setHeight()
     *
     * @return void.
     */
    public function testSetHeight(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Line\States\Hover\HighchartsMarker();

        $obj->setHeight(37.0);
        $this->assertEquals(37.0, $obj->getHeight());
    }

    /**
     * Tests setLineColor()
     *
     * @return void.
     */
    public function testSetLineColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Line\States\Hover\HighchartsMarker();

        $obj->setLineColor("c2580eebfdbdb9fc629f50cc147c3f63");
        $this->assertEquals("c2580eebfdbdb9fc629f50cc147c3f63", $obj->getLineColor());
    }

    /**
     * Tests setLineWidth()
     *
     * @return void.
     */
    public function testSetLineWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Line\States\Hover\HighchartsMarker();

        $obj->setLineWidth(57.0);
        $this->assertEquals(57.0, $obj->getLineWidth());
    }

    /**
     * Tests setRadius()
     *
     * @return void.
     */
    public function testSetRadius(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Line\States\Hover\HighchartsMarker();

        $obj->setRadius(70.0);
        $this->assertEquals(70.0, $obj->getRadius());
    }

    /**
     * Tests setStates()
     *
     * @return void.
     */
    public function testSetStates(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Line\States\Hover\HighchartsMarker();

        $obj->setStates("34d955a0df5f7af9c9b4e4dccb3c3564");
        $this->assertEquals("34d955a0df5f7af9c9b4e4dccb3c3564", $obj->getStates());
    }

    /**
     * Tests setSymbol()
     *
     * @return void.
     */
    public function testSetSymbol(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Line\States\Hover\HighchartsMarker();

        $obj->setSymbol("triangle-down");
        $this->assertEquals("triangle-down", $obj->getSymbol());
    }

    /**
     * Tests setWidth()
     *
     * @return void.
     */
    public function testSetWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Line\States\Hover\HighchartsMarker();

        $obj->setWidth(65.0);
        $this->assertEquals(65.0, $obj->getWidth());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Line\States\Hover\HighchartsMarker();

        $this->assertNull($obj->getEnabled());
        $this->assertNull($obj->getFillColor());
        $this->assertNull($obj->getHeight());
        $this->assertEquals("#ffffff", $obj->getLineColor());
        $this->assertEquals(0, $obj->getLineWidth());
        $this->assertEquals(4, $obj->getRadius());
        $this->assertNull($obj->getStates());
        $this->assertNull($obj->getSymbol());
        $this->assertNull($obj->getWidth());
    }
}
