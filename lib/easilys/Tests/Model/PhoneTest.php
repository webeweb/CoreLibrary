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

use WBW\Library\Easilys\Model\Phone;
use WBW\Library\Easilys\Tests\AbstractTestCase;

/**
 * Phone test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Model
 */
class PhoneTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Phone();

        $this->assertNull($obj->getId());
        $this->assertNull($obj->getContext());
        $this->assertNull($obj->getIsMain());
        $this->assertNull($obj->getLabel());
        $this->assertNull($obj->getNumber());
        $this->assertNull($obj->getType());
    }
}
