<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Easilys\Tests\Model;

use WBW\Library\Easilys\Model\DeliveryDaysProduction;
use WBW\Library\Easilys\Tests\AbstractTestCase;

/**
 * Delivery days production test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Model
 */
class DeliveryDaysProductionTest extends AbstractTestCase {

    /**
     * Test setDays()
     *
     * @return void
     */
    public function testSetDays(): void {

        $obj = new DeliveryDaysProduction();

        $obj->setDays([]);
        $this->assertEquals([], $obj->getDays());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DeliveryDaysProduction();

        $this->assertNull($obj->getId());
        $this->assertNull($obj->getDays());
    }
}
