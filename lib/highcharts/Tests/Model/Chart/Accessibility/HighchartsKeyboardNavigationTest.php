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

namespace WBW\Library\Highcharts\Tests\Model\Chart\Accessibility;

use WBW\Library\Highcharts\Tests\AbstractTestCase;

/**
 * Highcharts keyboard navigation test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Tests\Model\Chart\Accessibility
 * @version 5.0.14
 */
class HighchartsKeyboardNavigationTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $exp = ["enabled" => true, "skipNullPoints" => true, "tabThroughChartElements" => true];

        $obj = new \WBW\Library\Highcharts\Model\Chart\Accessibility\HighchartsKeyboardNavigation();
        $obj->setEnabled(true);
        $obj->setSkipNullPoints(true);
        $obj->setTabThroughChartElements(true);

        $this->assertEquals($exp, $obj->jsonSerialize());
    }

    /**
     * Tests setEnabled()
     *
     * @return void.
     */
    public function testSetEnabled(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Accessibility\HighchartsKeyboardNavigation();

        $obj->setEnabled(true);
        $this->assertTrue($obj->getEnabled());
    }

    /**
     * Tests setSkipNullPoints()
     *
     * @return void.
     */
    public function testSetSkipNullPoints(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Accessibility\HighchartsKeyboardNavigation();

        $obj->setSkipNullPoints(true);
        $this->assertTrue($obj->getSkipNullPoints());
    }

    /**
     * Tests setTabThroughChartElements()
     *
     * @return void.
     */
    public function testSetTabThroughChartElements(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Accessibility\HighchartsKeyboardNavigation();

        $obj->setTabThroughChartElements(true);
        $this->assertTrue($obj->getTabThroughChartElements());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new \WBW\Library\Highcharts\Model\Chart\Accessibility\HighchartsKeyboardNavigation();

        $this->assertTrue($obj->getEnabled());
        $this->assertFalse($obj->getSkipNullPoints());
        $this->assertTrue($obj->getTabThroughChartElements());
    }
}
