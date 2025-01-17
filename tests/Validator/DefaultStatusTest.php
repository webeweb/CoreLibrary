<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Validator;

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Validator\DefaultStatus;
use WBW\Library\Common\Validator\StatusInterface;

/**
 * Default status test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Validator
 */
class DefaultStatusTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DefaultStatus();

        $this->assertInstanceOf(StatusInterface::class, $obj);

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getMessage());
        $this->assertNull($obj->getRuleName());
    }
}
