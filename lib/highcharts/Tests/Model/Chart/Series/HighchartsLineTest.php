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

namespace WBW\Library\Highcharts\Tests\Model\Chart\Series;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts line test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\Series
 * @version 5.0.14
 */
class HighchartsLineTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $dataLabels = new \WBW\Library\Highcharts\Model\Chart\Series\Line\HighchartsDataLabels();
        $events     = new \WBW\Library\Highcharts\Model\Chart\Series\Line\HighchartsEvents();
        $marker     = new \WBW\Library\Highcharts\Model\Chart\Series\Line\HighchartsMarker();
        $point      = new \WBW\Library\Highcharts\Model\Chart\Series\Line\HighchartsPoint();
        $states     = new \WBW\Library\Highcharts\Model\Chart\Series\Line\HighchartsStates();

        $exp = ["allowPointSelect" => false, "animation" => false, "animationLimit" => 61.0, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 7.0, "connectEnds" => false, "connectNulls" => true, "cropThreshold" => 22.0, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => $dataLabels->jsonSerialize(), "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => false, "events" => $events->jsonSerialize(), "exposeElementToA11y" => true, "findNearestPointBy" => "xy", "getExtremesFromAll" => false, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 4.0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 31.0, "lineWidth" => 43.0, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => $marker->jsonSerialize(), "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => $point->jsonSerialize(), "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 41.0, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 91.0, "selected" => true, "shadow" => "3bf1114a986ba87ed28fc1b5884fc2f8", "showCheckbox" => false, "showInLegend" => true, "skipKeyboardNavigation" => true, "softThreshold" => true, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => $states->jsonSerialize(), "step" => "right", "stickyTracking" => false, "threshold" => 32.0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 33.0, "type" => "waterfall", "visible" => true, "xAxis" => "b919a806dedef37999b45653bdde66c6", "yAxis" => "f3cd431f5ac1725ea18774e5c02f2889", "zIndex" => 57.0, "zoneAxis" => "88421adabea658556aa3ab6c6181afad", "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();
        $obj->setAllowPointSelect(false);
        $obj->setAnimation(false);
        $obj->setAnimationLimit(61.0);
        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $obj->setColorIndex(7.0);
        $obj->setConnectEnds(false);
        $obj->setConnectNulls(true);
        $obj->setCropThreshold(22.0);
        $obj->setCursor("crosshair");
        $obj->setDashStyle("LongDashDotDot");
        $obj->setData(["data" => "8d777f385d3dfec8815d20f7496026dc"]);
        $obj->setDataLabels($dataLabels);
        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");
        $obj->setEnableMouseTracking(false);
        $obj->setEvents($events);
        $obj->setExposeElementToA11y(true);
        $obj->setFindNearestPointBy("xy");
        $obj->setGetExtremesFromAll(false);
        $obj->setId("b80bb7740288fda1f201890375a60c8f");
        $obj->setIndex(4.0);
        $obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);
        $obj->setLegendIndex(31.0);
        $obj->setLineWidth(43.0);
        $obj->setLinecap("square");
        $obj->setLinkedTo("914fab47afc86331ec62837807a29419");
        $obj->setMarker($marker);
        $obj->setName("b068931cc450442b63f5b3d276ea4297");
        $obj->setNegativeColor("52fe4d3a854b01e25193b4f35fc2040e");
        $obj->setPoint($point);
        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");
        $obj->setPointInterval(41.0);
        $obj->setPointIntervalUnit("year");
        $obj->setPointPlacement("between");
        $obj->setPointStart(91.0);
        $obj->setSelected(true);
        $obj->setShadow("3bf1114a986ba87ed28fc1b5884fc2f8");
        $obj->setShowCheckbox(false);
        $obj->setShowInLegend(true);
        $obj->setSkipKeyboardNavigation(true);
        $obj->setSoftThreshold(true);
        $obj->setStack("fac2a47adace059aff113283a03f6760");
        $obj->setStacking("percent");
        $obj->setStates($states);
        $obj->setStep("right");
        $obj->setStickyTracking(false);
        $obj->setThreshold(32.0);
        $obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);
        $obj->setTurboThreshold(33.0);
        $obj->setType("waterfall");
        $obj->setVisible(true);
        $obj->setXAxis("b919a806dedef37999b45653bdde66c6");
        $obj->setYAxis("f3cd431f5ac1725ea18774e5c02f2889");
        $obj->setZIndex(57.0);
        $obj->setZoneAxis("88421adabea658556aa3ab6c6181afad");
        $obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests newDataLabels()
     *
     * @return void.
     */
    public function testNewDataLabels(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $res = $obj->newDataLabels();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\Series\Line\HighchartsDataLabels::class, $res);
    }

    /**
     * Tests newEvents()
     *
     * @return void.
     */
    public function testNewEvents(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\Series\Line\HighchartsEvents::class, $res);
    }

    /**
     * Tests newMarker()
     *
     * @return void.
     */
    public function testNewMarker(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $res = $obj->newMarker();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\Series\Line\HighchartsMarker::class, $res);
    }

    /**
     * Tests newPoint()
     *
     * @return void.
     */
    public function testNewPoint(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $res = $obj->newPoint();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\Series\Line\HighchartsPoint::class, $res);
    }

    /**
     * Tests newStates()
     *
     * @return void.
     */
    public function testNewStates(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $res = $obj->newStates();
        $this->assertInstanceOf(\WBW\Library\Highcharts\Model\Chart\Series\Line\HighchartsStates::class, $res);
    }

    /**
     * Tests setAllowPointSelect()
     *
     * @return void.
     */
    public function testSetAllowPointSelect(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $obj->setAllowPointSelect(false);
        $this->assertEquals(false, $obj->getAllowPointSelect());
    }

    /**
     * Tests setAnimation()
     *
     * @return void.
     */
    public function testSetAnimation(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $obj->setAnimation(false);
        $this->assertEquals(false, $obj->getAnimation());
    }

    /**
     * Tests setAnimationLimit()
     *
     * @return void.
     */
    public function testSetAnimationLimit(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $obj->setAnimationLimit(29.0);
        $this->assertEquals(29.0, $obj->getAnimationLimit());
    }

    /**
     * Tests setClassName()
     *
     * @return void.
     */
    public function testSetClassName(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $obj->setClassName("6f66e878c62db60568a3487869695820");
        $this->assertEquals("6f66e878c62db60568a3487869695820", $obj->getClassName());
    }

    /**
     * Tests setColor()
     *
     * @return void.
     */
    public function testSetColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");
        $this->assertEquals("70dda5dfb8053dc6d1c492574bce9bfd", $obj->getColor());
    }

    /**
     * Tests setColorIndex()
     *
     * @return void.
     */
    public function testSetColorIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $obj->setColorIndex(5.0);
        $this->assertEquals(5.0, $obj->getColorIndex());
    }

    /**
     * Tests setConnectEnds()
     *
     * @return void.
     */
    public function testSetConnectEnds(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $obj->setConnectEnds(true);
        $this->assertEquals(true, $obj->getConnectEnds());
    }

    /**
     * Tests setConnectNulls()
     *
     * @return void.
     */
    public function testSetConnectNulls(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $obj->setConnectNulls(true);
        $this->assertEquals(true, $obj->getConnectNulls());
    }

    /**
     * Tests setCropThreshold()
     *
     * @return void.
     */
    public function testSetCropThreshold(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $obj->setCropThreshold(13.0);
        $this->assertEquals(13.0, $obj->getCropThreshold());
    }

    /**
     * Tests setCursor()
     *
     * @return void.
     */
    public function testSetCursor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $obj->setCursor(null);
        $this->assertEquals(null, $obj->getCursor());

        $obj->setCursor("crosshair");
        $this->assertEquals("crosshair", $obj->getCursor());

        $obj->setCursor("default");
        $this->assertEquals("default", $obj->getCursor());

        $obj->setCursor("help");
        $this->assertEquals("help", $obj->getCursor());

        $obj->setCursor("none");
        $this->assertEquals("none", $obj->getCursor());

        $obj->setCursor("pointer");
        $this->assertEquals("pointer", $obj->getCursor());
    }

    /**
     * Tests setDashStyle()
     *
     * @return void.
     */
    public function testSetDashStyle(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $obj->setDashStyle("Dash");
        $this->assertEquals("Dash", $obj->getDashStyle());

        $obj->setDashStyle("DashDot");
        $this->assertEquals("DashDot", $obj->getDashStyle());

        $obj->setDashStyle("Dot");
        $this->assertEquals("Dot", $obj->getDashStyle());

        $obj->setDashStyle("LongDash");
        $this->assertEquals("LongDash", $obj->getDashStyle());

        $obj->setDashStyle("LongDashDot");
        $this->assertEquals("LongDashDot", $obj->getDashStyle());

        $obj->setDashStyle("LongDashDotDot");
        $this->assertEquals("LongDashDotDot", $obj->getDashStyle());

        $obj->setDashStyle("ShortDash");
        $this->assertEquals("ShortDash", $obj->getDashStyle());

        $obj->setDashStyle("ShortDashDot");
        $this->assertEquals("ShortDashDot", $obj->getDashStyle());

        $obj->setDashStyle("ShortDashDotDot");
        $this->assertEquals("ShortDashDotDot", $obj->getDashStyle());

        $obj->setDashStyle("ShortDot");
        $this->assertEquals("ShortDot", $obj->getDashStyle());

        $obj->setDashStyle("Solid");
        $this->assertEquals("Solid", $obj->getDashStyle());
    }

    /**
     * Tests setData()
     *
     * @return void.
     */
    public function testSetData(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $obj->setData(["data" => "8d777f385d3dfec8815d20f7496026dc"]);
        $this->assertEquals(["data" => "8d777f385d3dfec8815d20f7496026dc"], $obj->getData());
    }

    /**
     * Tests setDataLabels()
     *
     * @return void.
     */
    public function testSetDataLabels(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\Series\Line\HighchartsDataLabels mock.
        $dataLabels = new \WBW\Library\Highcharts\Model\Chart\Series\Line\HighchartsDataLabels();

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $obj->setDataLabels($dataLabels);
        $this->assertSame($dataLabels, $obj->getDataLabels());
    }

    /**
     * Tests setDescription()
     *
     * @return void.
     */
    public function testSetDescription(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");
        $this->assertEquals("67daf92c833c41c95db874e18fcb2786", $obj->getDescription());
    }

    /**
     * Tests setEnableMouseTracking()
     *
     * @return void.
     */
    public function testSetEnableMouseTracking(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $obj->setEnableMouseTracking(false);
        $this->assertEquals(false, $obj->getEnableMouseTracking());
    }

    /**
     * Tests setEvents()
     *
     * @return void.
     */
    public function testSetEvents(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\Series\Line\HighchartsEvents mock.
        $events = new \WBW\Library\Highcharts\Model\Chart\Series\Line\HighchartsEvents();

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $obj->setEvents($events);
        $this->assertSame($events, $obj->getEvents());
    }

    /**
     * Tests setExposeElementToA11y()
     *
     * @return void.
     */
    public function testSetExposeElementToA11y(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $obj->setExposeElementToA11y(false);
        $this->assertEquals(false, $obj->getExposeElementToA11y());
    }

    /**
     * Tests setFindNearestPointBy()
     *
     * @return void.
     */
    public function testSetFindNearestPointBy(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $obj->setFindNearestPointBy("x");
        $this->assertEquals("x", $obj->getFindNearestPointBy());

        $obj->setFindNearestPointBy("xy");
        $this->assertEquals("xy", $obj->getFindNearestPointBy());
    }

    /**
     * Tests setGetExtremesFromAll()
     *
     * @return void.
     */
    public function testSetGetExtremesFromAll(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $obj->setGetExtremesFromAll(false);
        $this->assertEquals(false, $obj->getGetExtremesFromAll());
    }

    /**
     * Tests setId()
     *
     * @return void.
     */
    public function testSetId(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $obj->setId("b80bb7740288fda1f201890375a60c8f");
        $this->assertEquals("b80bb7740288fda1f201890375a60c8f", $obj->getId());
    }

    /**
     * Tests setIndex()
     *
     * @return void.
     */
    public function testSetIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $obj->setIndex(43.0);
        $this->assertEquals(43.0, $obj->getIndex());
    }

    /**
     * Tests setKeys()
     *
     * @return void.
     */
    public function testSetKeys(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);
        $this->assertEquals(["keys" => "14f802e1fba977727845e8872c1743a7"], $obj->getKeys());
    }

    /**
     * Tests setLegendIndex()
     *
     * @return void.
     */
    public function testSetLegendIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $obj->setLegendIndex(19.0);
        $this->assertEquals(19.0, $obj->getLegendIndex());
    }

    /**
     * Tests setLineWidth()
     *
     * @return void.
     */
    public function testSetLineWidth(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $obj->setLineWidth(43.0);
        $this->assertEquals(43.0, $obj->getLineWidth());
    }

    /**
     * Tests setLinecap()
     *
     * @return void.
     */
    public function testSetLinecap(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $obj->setLinecap("round");
        $this->assertEquals("round", $obj->getLinecap());

        $obj->setLinecap("square");
        $this->assertEquals("square", $obj->getLinecap());
    }

    /**
     * Tests setLinkedTo()
     *
     * @return void.
     */
    public function testSetLinkedTo(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $obj->setLinkedTo("914fab47afc86331ec62837807a29419");
        $this->assertEquals("914fab47afc86331ec62837807a29419", $obj->getLinkedTo());
    }

    /**
     * Tests setMarker()
     *
     * @return void.
     */
    public function testSetMarker(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\Series\Line\HighchartsMarker mock.
        $marker = new \WBW\Library\Highcharts\Model\Chart\Series\Line\HighchartsMarker();

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $obj->setMarker($marker);
        $this->assertSame($marker, $obj->getMarker());
    }

    /**
     * Tests setName()
     *
     * @return void.
     */
    public function testSetName(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $obj->setName("b068931cc450442b63f5b3d276ea4297");
        $this->assertEquals("b068931cc450442b63f5b3d276ea4297", $obj->getName());
    }

    /**
     * Tests setNegativeColor()
     *
     * @return void.
     */
    public function testSetNegativeColor(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $obj->setNegativeColor("52fe4d3a854b01e25193b4f35fc2040e");
        $this->assertEquals("52fe4d3a854b01e25193b4f35fc2040e", $obj->getNegativeColor());
    }

    /**
     * Tests setPoint()
     *
     * @return void.
     */
    public function testSetPoint(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\Series\Line\HighchartsPoint mock.
        $point = new \WBW\Library\Highcharts\Model\Chart\Series\Line\HighchartsPoint();

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $obj->setPoint($point);
        $this->assertSame($point, $obj->getPoint());
    }

    /**
     * Tests setPointDescriptionFormatter()
     *
     * @return void.
     */
    public function testSetPointDescriptionFormatter(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");
        $this->assertEquals("b5fd0c15b3ca81f726e2c7b93907ba36", $obj->getPointDescriptionFormatter());
    }

    /**
     * Tests setPointInterval()
     *
     * @return void.
     */
    public function testSetPointInterval(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $obj->setPointInterval(50.0);
        $this->assertEquals(50.0, $obj->getPointInterval());
    }

    /**
     * Tests setPointIntervalUnit()
     *
     * @return void.
     */
    public function testSetPointIntervalUnit(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $obj->setPointIntervalUnit(null);
        $this->assertEquals(null, $obj->getPointIntervalUnit());

        $obj->setPointIntervalUnit("day");
        $this->assertEquals("day", $obj->getPointIntervalUnit());

        $obj->setPointIntervalUnit("month");
        $this->assertEquals("month", $obj->getPointIntervalUnit());

        $obj->setPointIntervalUnit("year");
        $this->assertEquals("year", $obj->getPointIntervalUnit());
    }

    /**
     * Tests setPointPlacement()
     *
     * @return void.
     */
    public function testSetPointPlacement(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $obj->setPointPlacement(null);
        $this->assertEquals(null, $obj->getPointPlacement());

        $obj->setPointPlacement("between");
        $this->assertEquals("between", $obj->getPointPlacement());

        $obj->setPointPlacement("on");
        $this->assertEquals("on", $obj->getPointPlacement());
    }

    /**
     * Tests setPointStart()
     *
     * @return void.
     */
    public function testSetPointStart(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $obj->setPointStart(9.0);
        $this->assertEquals(9.0, $obj->getPointStart());
    }

    /**
     * Tests setSelected()
     *
     * @return void.
     */
    public function testSetSelected(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $obj->setSelected(true);
        $this->assertEquals(true, $obj->getSelected());
    }

    /**
     * Tests setShadow()
     *
     * @return void.
     */
    public function testSetShadow(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $obj->setShadow("3bf1114a986ba87ed28fc1b5884fc2f8");
        $this->assertEquals("3bf1114a986ba87ed28fc1b5884fc2f8", $obj->getShadow());
    }

    /**
     * Tests setShowCheckbox()
     *
     * @return void.
     */
    public function testSetShowCheckbox(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $obj->setShowCheckbox(true);
        $this->assertEquals(true, $obj->getShowCheckbox());
    }

    /**
     * Tests setShowInLegend()
     *
     * @return void.
     */
    public function testSetShowInLegend(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $obj->setShowInLegend(false);
        $this->assertEquals(false, $obj->getShowInLegend());
    }

    /**
     * Tests setSkipKeyboardNavigation()
     *
     * @return void.
     */
    public function testSetSkipKeyboardNavigation(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $obj->setSkipKeyboardNavigation(false);
        $this->assertEquals(false, $obj->getSkipKeyboardNavigation());
    }

    /**
     * Tests setSoftThreshold()
     *
     * @return void.
     */
    public function testSetSoftThreshold(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $obj->setSoftThreshold(true);
        $this->assertEquals(true, $obj->getSoftThreshold());
    }

    /**
     * Tests setStack()
     *
     * @return void.
     */
    public function testSetStack(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $obj->setStack("fac2a47adace059aff113283a03f6760");
        $this->assertEquals("fac2a47adace059aff113283a03f6760", $obj->getStack());
    }

    /**
     * Tests setStacking()
     *
     * @return void.
     */
    public function testSetStacking(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $obj->setStacking(null);
        $this->assertEquals(null, $obj->getStacking());

        $obj->setStacking("normal");
        $this->assertEquals("normal", $obj->getStacking());

        $obj->setStacking("percent");
        $this->assertEquals("percent", $obj->getStacking());
    }

    /**
     * Tests setStates()
     *
     * @return void.
     */
    public function testSetStates(): void {

        // Set a \WBW\Library\Highcharts\Model\Chart\Series\Line\HighchartsStates mock.
        $states = new \WBW\Library\Highcharts\Model\Chart\Series\Line\HighchartsStates();

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $obj->setStates($states);
        $this->assertSame($states, $obj->getStates());
    }

    /**
     * Tests setStep()
     *
     * @return void.
     */
    public function testSetStep(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $obj->setStep("center");
        $this->assertEquals("center", $obj->getStep());

        $obj->setStep("left");
        $this->assertEquals("left", $obj->getStep());

        $obj->setStep("right");
        $this->assertEquals("right", $obj->getStep());
    }

    /**
     * Tests setStickyTracking()
     *
     * @return void.
     */
    public function testSetStickyTracking(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $obj->setStickyTracking(false);
        $this->assertEquals(false, $obj->getStickyTracking());
    }

    /**
     * Tests setThreshold()
     *
     * @return void.
     */
    public function testSetThreshold(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $obj->setThreshold(82.0);
        $this->assertEquals(82.0, $obj->getThreshold());
    }

    /**
     * Tests setTooltip()
     *
     * @return void.
     */
    public function testSetTooltip(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);
        $this->assertEquals(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], $obj->getTooltip());
    }

    /**
     * Tests setTurboThreshold()
     *
     * @return void.
     */
    public function testSetTurboThreshold(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $obj->setTurboThreshold(16.0);
        $this->assertEquals(16.0, $obj->getTurboThreshold());
    }

    /**
     * Tests setType()
     *
     * @return void.
     */
    public function testSetType(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $obj->setType(null);
        $this->assertEquals(null, $obj->getType());

        $obj->setType("area");
        $this->assertEquals("area", $obj->getType());

        $obj->setType("arearange");
        $this->assertEquals("arearange", $obj->getType());

        $obj->setType("areaspline");
        $this->assertEquals("areaspline", $obj->getType());

        $obj->setType("areasplinerange");
        $this->assertEquals("areasplinerange", $obj->getType());

        $obj->setType("boxplot");
        $this->assertEquals("boxplot", $obj->getType());

        $obj->setType("bubble");
        $this->assertEquals("bubble", $obj->getType());

        $obj->setType("column");
        $this->assertEquals("column", $obj->getType());

        $obj->setType("columnrange");
        $this->assertEquals("columnrange", $obj->getType());

        $obj->setType("errorbar");
        $this->assertEquals("errorbar", $obj->getType());

        $obj->setType("funnel");
        $this->assertEquals("funnel", $obj->getType());

        $obj->setType("gauge");
        $this->assertEquals("gauge", $obj->getType());

        $obj->setType("line");
        $this->assertEquals("line", $obj->getType());

        $obj->setType("pie");
        $this->assertEquals("pie", $obj->getType());

        $obj->setType("scatter");
        $this->assertEquals("scatter", $obj->getType());

        $obj->setType("spline");
        $this->assertEquals("spline", $obj->getType());

        $obj->setType("waterfall");
        $this->assertEquals("waterfall", $obj->getType());
    }

    /**
     * Tests setVisible()
     *
     * @return void.
     */
    public function testSetVisible(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $obj->setVisible(true);
        $this->assertEquals(true, $obj->getVisible());
    }

    /**
     * Tests setXAxis()
     *
     * @return void.
     */
    public function testSetXAxis(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $obj->setXAxis("b919a806dedef37999b45653bdde66c6");
        $this->assertEquals("b919a806dedef37999b45653bdde66c6", $obj->getXAxis());
    }

    /**
     * Tests setYAxis()
     *
     * @return void.
     */
    public function testSetYAxis(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $obj->setYAxis("f3cd431f5ac1725ea18774e5c02f2889");
        $this->assertEquals("f3cd431f5ac1725ea18774e5c02f2889", $obj->getYAxis());
    }

    /**
     * Tests setZIndex()
     *
     * @return void.
     */
    public function testSetZIndex(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $obj->setZIndex(45.0);
        $this->assertEquals(45.0, $obj->getZIndex());
    }

    /**
     * Tests setZoneAxis()
     *
     * @return void.
     */
    public function testSetZoneAxis(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $obj->setZoneAxis("88421adabea658556aa3ab6c6181afad");
        $this->assertEquals("88421adabea658556aa3ab6c6181afad", $obj->getZoneAxis());
    }

    /**
     * Tests setZones()
     *
     * @return void.
     */
    public function testSetZones(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);
        $this->assertEquals(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"], $obj->getZones());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Series\HighchartsLine();

        $this->assertEquals(false, $obj->getAllowPointSelect());
        $this->assertEquals(true, $obj->getAnimation());
        $this->assertNull($obj->getAnimationLimit());
        $this->assertNull($obj->getClassName());
        $this->assertNull($obj->getColor());
        $this->assertNull($obj->getColorIndex());
        $this->assertEquals(true, $obj->getConnectEnds());
        $this->assertEquals(false, $obj->getConnectNulls());
        $this->assertEquals(300, $obj->getCropThreshold());
        $this->assertNull($obj->getCursor());
        $this->assertEquals("Solid", $obj->getDashStyle());
        $this->assertNull($obj->getData());
        $this->assertNull($obj->getDataLabels());
        $this->assertNull($obj->getDescription());
        $this->assertEquals(true, $obj->getEnableMouseTracking());
        $this->assertNull($obj->getEvents());
        $this->assertNull($obj->getExposeElementToA11y());
        $this->assertNull($obj->getFindNearestPointBy());
        $this->assertEquals(false, $obj->getGetExtremesFromAll());
        $this->assertNull($obj->getId());
        $this->assertNull($obj->getIndex());
        $this->assertNull($obj->getKeys());
        $this->assertNull($obj->getLegendIndex());
        $this->assertEquals(2, $obj->getLineWidth());
        $this->assertEquals("round", $obj->getLinecap());
        $this->assertNull($obj->getLinkedTo());
        $this->assertNull($obj->getMarker());
        $this->assertNull($obj->getName());
        $this->assertNull($obj->getNegativeColor());
        $this->assertNull($obj->getPoint());
        $this->assertNull($obj->getPointDescriptionFormatter());
        $this->assertEquals(1, $obj->getPointInterval());
        $this->assertNull($obj->getPointIntervalUnit());
        $this->assertNull($obj->getPointPlacement());
        $this->assertEquals(0, $obj->getPointStart());
        $this->assertEquals(false, $obj->getSelected());
        $this->assertEquals("false", $obj->getShadow());
        $this->assertEquals(false, $obj->getShowCheckbox());
        $this->assertEquals(true, $obj->getShowInLegend());
        $this->assertNull($obj->getSkipKeyboardNavigation());
        $this->assertEquals(true, $obj->getSoftThreshold());
        $this->assertNull($obj->getStack());
        $this->assertNull($obj->getStacking());
        $this->assertNull($obj->getStates());
        $this->assertEquals("false", $obj->getStep());
        $this->assertEquals(true, $obj->getStickyTracking());
        $this->assertEquals(0, $obj->getThreshold());
        $this->assertNull($obj->getTooltip());
        $this->assertEquals(1000, $obj->getTurboThreshold());
        $this->assertNull($obj->getType());
        $this->assertEquals(true, $obj->getVisible());
        $this->assertEquals("0", $obj->getXAxis());
        $this->assertEquals("0", $obj->getYAxis());
        $this->assertNull($obj->getZIndex());
        $this->assertEquals("y", $obj->getZoneAxis());
        $this->assertNull($obj->getZones());
    }
}
