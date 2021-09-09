<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Bill\Tests\Model;

use WBW\Library\Bill\Tests\AbstractTestCase;
use WBW\Library\Bill\Tests\Fixtures\Model\TestBillingAddressTrait;

/**
 * Billing address trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Bill\Tests\Model
 */
class BillingAddressTraitTest extends AbstractTestCase {

    /**
     * Tests the setBillingAddressAddressee() method.
     *
     * @return void
     */
    public function testSetBillingAddressAddressee(): void {

        $obj = new TestBillingAddressTrait();

        $obj->setBillingAddressAddressee("billingAddressAddressee");
        $this->assertEquals("billingAddressAddressee", $obj->getBillingAddressAddressee());
    }

    /**
     * Tests the setBillingAddressCountry() method.
     *
     * @return void
     */
    public function testSetBillingAddressCountry(): void {

        $obj = new TestBillingAddressTrait();

        $obj->setBillingAddressCountry("billingAddressCountry");
        $this->assertEquals("billingAddressCountry", $obj->getBillingAddressCountry());
    }

    /**
     * Tests the setBillingAddressHouseNumber() method.
     *
     * @return void
     */
    public function testSetBillingAddressHouseNumber(): void {

        $obj = new TestBillingAddressTrait();

        $obj->setBillingAddressHouseNumber("billingAddressHouseNumber");
        $this->assertEquals("billingAddressHouseNumber", $obj->getBillingAddressHouseNumber());
    }

    /**
     * Tests the setBillingAddressLocation() method.
     *
     * @return void
     */
    public function testSetBillingAddressLocation(): void {

        $obj = new TestBillingAddressTrait();

        $obj->setBillingAddressLocation("billingAddressLocation");
        $this->assertEquals("billingAddressLocation", $obj->getBillingAddressLocation());
    }

    /**
     * Tests the setBillingAddressPostalCode() method.
     *
     * @return void
     */
    public function testSetBillingAddressPostalCode(): void {

        $obj = new TestBillingAddressTrait();

        $obj->setBillingAddressPostalCode("billingAddressPostalCode");
        $this->assertEquals("billingAddressPostalCode", $obj->getBillingAddressPostalCode());
    }

    /**
     * Tests the setBillingAddressStreetName() method.
     *
     * @return void
     */
    public function testSetBillingAddressStreetName(): void {

        $obj = new TestBillingAddressTrait();

        $obj->setBillingAddressStreetName("billingAddressStreetName");
        $this->assertEquals("billingAddressStreetName", $obj->getBillingAddressStreetName());
    }
}