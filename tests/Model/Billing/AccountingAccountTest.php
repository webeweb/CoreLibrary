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

namespace WBW\Library\Common\Tests\Model\Billing;

use JsonSerializable;
use WBW\Library\Common\Model\Billing\AccountingAccount;
use WBW\Library\Common\Model\Billing\AccountingAccountInterface;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Accounting account test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Model\Billing
 */
class AccountingAccountTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $obj = new AccountingAccount();

        $this->assertIsArray($obj->jsonSerialize());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new AccountingAccount();

        $this->assertInstanceOf(JsonSerializable::class, $obj);
        $this->assertInstanceOf(AccountingAccountInterface::class, $obj);

        $this->assertNull($obj->getLabel());
        $this->assertNull($obj->getNumber());
        $this->assertNull($obj->getType());
    }
}
