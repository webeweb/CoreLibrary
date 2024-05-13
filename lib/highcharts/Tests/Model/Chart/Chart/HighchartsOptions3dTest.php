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

namespace WBW\Library\Highcharts\Tests\Model\Chart\Chart;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts options3d test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\Chart
 * @version 5.0.14
 */
class HighchartsOptions3dTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $frame = new \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\HighchartsFrame();

        $exp = ["alpha" => 98.0, "axisLabelPosition" => "auto", "beta" => 94.0, "depth" => 96.0, "enabled" => false, "fitToPlot" => false, "frame" => $frame->jsonSerialize(), "viewDistance" => 11.0];

        $obj = new \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsOptions3d();
        $obj->setAlpha(98.0);
        $obj->setAxisLabelPosition("auto");
        $obj->setBeta(94.0);
        $obj->setDepth(96.0);
        $obj->setEnabled(false);
        $obj->setFitToPlot(false);
        $obj->setFrame($frame);
        $obj->setViewDistance(11.0);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests newFrame()
     *
     * @return void.
     */
    public function testNewFrame(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsOptions3d();

        $res = $obj->newFrame();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\Chart\Options3d\HighchartsFrame::class, $res);
    }

    /**
     * Tests setAlpha()
     *
     * @return void.
     */
    public function testSetAlpha(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsOptions3d();

        $obj->setAlpha(62.0);
        $this->assertEquals(62.0, $obj->getAlpha());
    }

    /**
     * Tests setAxisLabelPosition()
     *
     * @return void.
     */
    public function testSetAxisLabelPosition(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsOptions3d();

        $obj->setAxisLabelPosition("auto");
        $this->assertEquals("auto", $obj->getAxisLabelPosition());
    }

    /**
     * Tests setBeta()
     *
     * @return void.
     */
    public function testSetBeta(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsOptions3d();

        $obj->setBeta(41.0);
        $this->assertEquals(41.0, $obj->getBeta());
    }

    /**
     * Tests setDepth()
     *
     * @return void.
     */
    public function testSetDepth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsOptions3d();

        $obj->setDepth(2.0);
        $this->assertEquals(2.0, $obj->getDepth());
    }

    /**
     * Tests setEnabled()
     *
     * @return void.
     */
    public function testSetEnabled(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsOptions3d();

        $obj->setEnabled(true);
        $this->assertEquals(true, $obj->getEnabled());
    }

    /**
     * Tests setFitToPlot()
     *
     * @return void.
     */
    public function testSetFitToPlot(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsOptions3d();

        $obj->setFitToPlot(true);
        $this->assertEquals(true, $obj->getFitToPlot());
    }

    /**
     * Tests setFrame()
     *
     * @return void.
     */
    public function testSetFrame(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\HighchartsFrame mock.
        $frame = new \WBW\Library\Highcharts\Model\Chart\Chart\Options3d\HighchartsFrame();

        $obj = new \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsOptions3d();

        $obj->setFrame($frame);
        $this->assertSame($frame, $obj->getFrame());
    }

    /**
     * Tests setViewDistance()
     *
     * @return void.
     */
    public function testSetViewDistance(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsOptions3d();

        $obj->setViewDistance(22.0);
        $this->assertEquals(22.0, $obj->getViewDistance());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Chart\HighchartsOptions3d();

        $this->assertEquals(0, $obj->getAlpha());
        $this->assertNull($obj->getAxisLabelPosition());
        $this->assertEquals(0, $obj->getBeta());
        $this->assertEquals(100, $obj->getDepth());
        $this->assertEquals(false, $obj->getEnabled());
        $this->assertEquals(true, $obj->getFitToPlot());
        $this->assertNull($obj->getFrame());
        $this->assertEquals(100, $obj->getViewDistance());
    }
}
