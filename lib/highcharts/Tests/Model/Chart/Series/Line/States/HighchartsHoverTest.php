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

namespace WBW\Library\Highcharts\Tests\Model\Chart\Series\Line\States;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts hover test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\Series\Line\States
 * @version 5.0.14
 */
class HighchartsHoverTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $marker = new \WBW\Library\Highcharts\Model\Chart\Series\Line\States\Hover\HighchartsMarker();

        $exp = ["animation" => "6f1c25ed1523962f1bbf9dee9be5092b", "enabled" => true, "halo" => ["halo" => "57f842286171094855e51fc3a541c1e2"], "lineWidth" => 42.0, "lineWidthPlus" => 3.0, "marker" => $marker->jsonSerialize()];

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Line\States\HighchartsHover();
        $obj->setAnimation("6f1c25ed1523962f1bbf9dee9be5092b");
        $obj->setEnabled(true);
        $obj->setHalo(["halo" => "57f842286171094855e51fc3a541c1e2"]);
        $obj->setLineWidth(42.0);
        $obj->setLineWidthPlus(3.0);
        $obj->setMarker($marker);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests newMarker()
     *
     * @return void.
     */
    public function testNewMarker(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Line\States\HighchartsHover();

        $res = $obj->newMarker();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\Series\Line\States\Hover\HighchartsMarker::class, $res);
    }

    /**
     * Tests setAnimation()
     *
     * @return void.
     */
    public function testSetAnimation(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Line\States\HighchartsHover();

        $obj->setAnimation("6f1c25ed1523962f1bbf9dee9be5092b");
        $this->assertEquals("6f1c25ed1523962f1bbf9dee9be5092b", $obj->getAnimation());
    }

    /**
     * Tests setEnabled()
     *
     * @return void.
     */
    public function testSetEnabled(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Line\States\HighchartsHover();

        $obj->setEnabled(true);
        $this->assertTrue($obj->getEnabled());
    }

    /**
     * Tests setHalo()
     *
     * @return void.
     */
    public function testSetHalo(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Line\States\HighchartsHover();

        $obj->setHalo(["halo" => "57f842286171094855e51fc3a541c1e2"]);
        $this->assertEquals(["halo" => "57f842286171094855e51fc3a541c1e2"], $obj->getHalo());
    }

    /**
     * Tests setLineWidth()
     *
     * @return void.
     */
    public function testSetLineWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Line\States\HighchartsHover();

        $obj->setLineWidth(8.0);
        $this->assertEquals(8.0, $obj->getLineWidth());
    }

    /**
     * Tests setLineWidthPlus()
     *
     * @return void.
     */
    public function testSetLineWidthPlus(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Line\States\HighchartsHover();

        $obj->setLineWidthPlus(48.0);
        $this->assertEquals(48.0, $obj->getLineWidthPlus());
    }

    /**
     * Tests setMarker()
     *
     * @return void.
     */
    public function testSetMarker(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\Series\Line\States\Hover\HighchartsMarker mock.
        $marker = new \WBW\Library\Highcharts\Model\Chart\Series\Line\States\Hover\HighchartsMarker();

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Line\States\HighchartsHover();

        $obj->setMarker($marker);
        $this->assertSame($marker, $obj->getMarker());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\Line\States\HighchartsHover();

        $this->assertEquals("{ \"duration\": 50 }", $obj->getAnimation());
        $this->assertTrue($obj->getEnabled());
        $this->assertNull($obj->getHalo());
        $this->assertEquals(2, $obj->getLineWidth());
        $this->assertEquals(1, $obj->getLineWidthPlus());
        $this->assertNull($obj->getMarker());
    }
}
