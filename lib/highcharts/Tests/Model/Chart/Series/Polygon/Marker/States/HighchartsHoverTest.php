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

namespace WBW\Library\Highcharts\Tests\Model\Chart\Series\Polygon\Marker\States;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts hover test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\Series\Polygon\Marker\States
 * @version 5.0.14
 */
class HighchartsHoverTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $exp = ["enabled" => false, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 65.0, "lineWidthPlus" => 88.0, "radius" => 96.0, "radiusPlus" => 56.0];

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Polygon\Marker\States\HighchartsHover();
        $obj->setEnabled(false);
        $obj->setFillColor("1fde055d3ff900e04ca08bc82066d7fd");
        $obj->setLineColor("c2580eebfdbdb9fc629f50cc147c3f63");
        $obj->setLineWidth(65.0);
        $obj->setLineWidthPlus(88.0);
        $obj->setRadius(96.0);
        $obj->setRadiusPlus(56.0);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests setEnabled()
     *
     * @return void.
     */
    public function testSetEnabled(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Polygon\Marker\States\HighchartsHover();

        $obj->setEnabled(false);
        $this->assertFalse($obj->getEnabled());
    }

    /**
     * Tests setFillColor()
     *
     * @return void.
     */
    public function testSetFillColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Polygon\Marker\States\HighchartsHover();

        $obj->setFillColor("1fde055d3ff900e04ca08bc82066d7fd");
        $this->assertEquals("1fde055d3ff900e04ca08bc82066d7fd", $obj->getFillColor());
    }

    /**
     * Tests setLineColor()
     *
     * @return void.
     */
    public function testSetLineColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Polygon\Marker\States\HighchartsHover();

        $obj->setLineColor("c2580eebfdbdb9fc629f50cc147c3f63");
        $this->assertEquals("c2580eebfdbdb9fc629f50cc147c3f63", $obj->getLineColor());
    }

    /**
     * Tests setLineWidth()
     *
     * @return void.
     */
    public function testSetLineWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Polygon\Marker\States\HighchartsHover();

        $obj->setLineWidth(63.0);
        $this->assertEquals(63.0, $obj->getLineWidth());
    }

    /**
     * Tests setLineWidthPlus()
     *
     * @return void.
     */
    public function testSetLineWidthPlus(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Polygon\Marker\States\HighchartsHover();

        $obj->setLineWidthPlus(82.0);
        $this->assertEquals(82.0, $obj->getLineWidthPlus());
    }

    /**
     * Tests setRadius()
     *
     * @return void.
     */
    public function testSetRadius(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Polygon\Marker\States\HighchartsHover();

        $obj->setRadius(77.0);
        $this->assertEquals(77.0, $obj->getRadius());
    }

    /**
     * Tests setRadiusPlus()
     *
     * @return void.
     */
    public function testSetRadiusPlus(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Polygon\Marker\States\HighchartsHover();

        $obj->setRadiusPlus(12.0);
        $this->assertEquals(12.0, $obj->getRadiusPlus());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Polygon\Marker\States\HighchartsHover();

        $this->assertTrue($obj->getEnabled());
        $this->assertNull($obj->getFillColor());
        $this->assertEquals("#ffffff", $obj->getLineColor());
        $this->assertEquals(0, $obj->getLineWidth());
        $this->assertEquals(1, $obj->getLineWidthPlus());
        $this->assertNull($obj->getRadius());
        $this->assertEquals(2, $obj->getRadiusPlus());
    }
}