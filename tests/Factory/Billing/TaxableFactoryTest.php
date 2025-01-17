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

use WBW\Library\Common\Factory\Billing\TaxableFactory;
use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Model\Billing\TestTaxable;

/**
 * Taxable factory test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Factory\Billing
 */
class TaxableFactoryTest extends AbstractTestCase {

    /**
     * Test copy()
     *
     * @return void
     */
    public function testCopy(): void {

        $obj = new TestTaxable();
        $obj->setDiscountAmount(0.01);
        $obj->setDiscountRate(0.02);
        $obj->setExcludingVatPrice(0.03);
        $obj->setIncludingVatPrice(0.04);
        $obj->setVatAmount(0.05);
        $obj->setVatRate(0.06);

        $res = TaxableFactory::copy($obj, new TestTaxable());
        $this->assertEquals($obj->getDiscountAmount(), $res->getDiscountAmount());
        $this->assertEquals($obj->getDiscountRate(), $res->getDiscountRate());
        $this->assertEquals($obj->getExcludingVatPrice(), $res->getExcludingVatPrice());
        $this->assertEquals($obj->getIncludingVatPrice(), $res->getIncludingVatPrice());
        $this->assertEquals($obj->getVatAmount(), $res->getVatAmount());
        $this->assertEquals($obj->getVatRate(), $res->getVatRate());
    }
}
