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

namespace WBW\Library\Highcharts\Tests\Model\Chart\Series\Line\Data\Marker\States;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts hover test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\Series\Line\Data\Marker\States
 * @version 5.0.14
 */
class HighchartsHoverTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $exp = ["enabled" => true, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 34.0, "lineWidthPlus" => 100.0, "radius" => 31.0, "radiusPlus" => 87.0];

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Line\Data\Marker\States\HighchartsHover();
        $obj->setEnabled(true);
        $obj->setFillColor("1fde055d3ff900e04ca08bc82066d7fd");
        $obj->setLineColor("c2580eebfdbdb9fc629f50cc147c3f63");
        $obj->setLineWidth(34.0);
        $obj->setLineWidthPlus(100.0);
        $obj->setRadius(31.0);
        $obj->setRadiusPlus(87.0);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests setEnabled()
     *
     * @return void.
     */
    public function testSetEnabled(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Line\Data\Marker\States\HighchartsHover();

        $obj->setEnabled(true);
        $this->assertEquals(true, $obj->getEnabled());
    }

    /**
     * Tests setFillColor()
     *
     * @return void.
     */
    public function testSetFillColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Line\Data\Marker\States\HighchartsHover();

        $obj->setFillColor("1fde055d3ff900e04ca08bc82066d7fd");
        $this->assertEquals("1fde055d3ff900e04ca08bc82066d7fd", $obj->getFillColor());
    }

    /**
     * Tests setLineColor()
     *
     * @return void.
     */
    public function testSetLineColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Line\Data\Marker\States\HighchartsHover();

        $obj->setLineColor("c2580eebfdbdb9fc629f50cc147c3f63");
        $this->assertEquals("c2580eebfdbdb9fc629f50cc147c3f63", $obj->getLineColor());
    }

    /**
     * Tests setLineWidth()
     *
     * @return void.
     */
    public function testSetLineWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Line\Data\Marker\States\HighchartsHover();

        $obj->setLineWidth(88.0);
        $this->assertEquals(88.0, $obj->getLineWidth());
    }

    /**
     * Tests setLineWidthPlus()
     *
     * @return void.
     */
    public function testSetLineWidthPlus(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Line\Data\Marker\States\HighchartsHover();

        $obj->setLineWidthPlus(32.0);
        $this->assertEquals(32.0, $obj->getLineWidthPlus());
    }

    /**
     * Tests setRadius()
     *
     * @return void.
     */
    public function testSetRadius(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Line\Data\Marker\States\HighchartsHover();

        $obj->setRadius(85.0);
        $this->assertEquals(85.0, $obj->getRadius());
    }

    /**
     * Tests setRadiusPlus()
     *
     * @return void.
     */
    public function testSetRadiusPlus(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Line\Data\Marker\States\HighchartsHover();

        $obj->setRadiusPlus(71.0);
        $this->assertEquals(71.0, $obj->getRadiusPlus());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Line\Data\Marker\States\HighchartsHover();

        $this->assertEquals(true, $obj->getEnabled());
        $this->assertNull($obj->getFillColor());
        $this->assertEquals("#ffffff", $obj->getLineColor());
        $this->assertEquals(0, $obj->getLineWidth());
        $this->assertEquals(1, $obj->getLineWidthPlus());
        $this->assertNull($obj->getRadius());
        $this->assertEquals(2, $obj->getRadiusPlus());
    }
}
