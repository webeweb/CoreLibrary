<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Factory\Billing;

use WBW\Library\Common\Factory\Billing\BillingAddressFactory;
use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Model\Billing\TestBillingAddressTrait;

/**
 * Billing address factory test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Factory\Billing
 */
class BillingAddressFactoryTest extends AbstractTestCase {

    /**
     * Test copy()
     *
     * @return void
     */
    public function testCopy(): void {

        $obj = new TestBillingAddressTrait();
        $obj->setBillingAddressAddressee("billingAddressAddressee");
        $obj->setBillingAddressCountry("billingAddressCountry");
        $obj->setBillingAddressHouseNumber("billingAddressHouseNumber");
        $obj->setBillingAddressLocation("billingAddressLocation");
        $obj->setBillingAddressPostalCode("billingAddressPostalCode");
        $obj->setBillingAddressStreetName("billingAddressStreetName");

        $res = BillingAddressFactory::copy($obj, new TestBillingAddressTrait());
        $this->assertEquals($obj->getBillingAddressAddressee(), $res->getBillingAddressAddressee());
        $this->assertEquals($obj->getBillingAddressCountry(), $res->getBillingAddressCountry());
        $this->assertEquals($obj->getBillingAddressHouseNumber(), $res->getBillingAddressHouseNumber());
        $this->assertEquals($obj->getBillingAddressLocation(), $res->getBillingAddressLocation());
        $this->assertEquals($obj->getBillingAddressPostalCode(), $res->getBillingAddressPostalCode());
        $this->assertEquals($obj->getBillingAddressStreetName(), $res->getBillingAddressStreetName());
    }
}
