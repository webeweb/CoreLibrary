<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Accounting\Tests\Model;

use WBW\Library\Accounting\Model\BankDetails;
use WBW\Library\Accounting\Tests\AbstractTestCase;

/**
 * Bank details test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Accounting\Tests\Model
 */
class BankDetailsTest extends AbstractTestCase {

    /**
     * Tests the setAccountNumber() method.
     *
     * @return void
     */
    public function testSetAccountNumber(): void {

        $obj = new BankDetails();

        $obj->setAccountNumber("accountNumber");
        $this->assertEquals("accountNumber", $obj->getAccountNumber());
    }

    /**
     * Tests the setBankCode() method.
     *
     * @return void
     */
    public function testSetBankCode(): void {

        $obj = new BankDetails();

        $obj->setBankCode("bankCode");
        $this->assertEquals("bankCode", $obj->getBankCode());
    }

    /**
     * Tests the setBankDomiciliation() method.
     *
     * @return void
     */
    public function testSetBankDomiciliation(): void {

        $obj = new BankDetails();

        $obj->setBankDomiciliation("bankDomiciliation");
        $this->assertEquals("bankDomiciliation", $obj->getBankDomiciliation());
    }

    /**
     * Tests the setBic() method.
     *
     * @return void
     */
    public function testSetBic(): void {

        $obj = new BankDetails();

        $obj->setBic("bic");
        $this->assertEquals("bic", $obj->getBic());
    }

    /**
     * Tests the setBranchCode() method.
     *
     * @return void
     */
    public function testSetBranchCode(): void {

        $obj = new BankDetails();

        $obj->setBranchCode("branchCode");
        $this->assertEquals("branchCode", $obj->getBranchCode());
    }

    /**
     * Tests the setIban() method.
     *
     * @return void
     */
    public function testSetIban(): void {

        $obj = new BankDetails();

        $obj->setIban("iban");
        $this->assertEquals("iban", $obj->getIban());
    }

    /**
     * Tests the setOwner() method.
     *
     * @return void
     */
    public function testSetOwner(): void {

        $obj = new BankDetails();

        $obj->setOwner("owner");
        $this->assertEquals("owner", $obj->getOwner());
    }

    /**
     * Tests the setRibKey() method.
     *
     * @return void
     */
    public function testSetRibKey(): void {

        $obj = new BankDetails();

        $obj->setRibKey("ribKey");
        $this->assertEquals("ribKey", $obj->getRibKey());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new BankDetails();

        $this->assertNull($obj->getAccountNumber());
        $this->assertNull($obj->getBankCode());
        $this->assertNull($obj->getBankDomiciliation());
        $this->assertNull($obj->getBic());
        $this->assertNull($obj->getBranchCode());
        $this->assertNull($obj->getIban());
        $this->assertNull($obj->getOwner());
        $this->assertNull($obj->getRibKey());
    }
}