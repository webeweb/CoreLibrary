<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Exception;

use Exception;
use WBW\Library\Core\Exception\ApiException;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * API exception test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Tests\Exception
 */
class ApiExceptionTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        // Set an Exception mock.
        $throwable = new Exception();

        $obj = new ApiException("message", 500, $throwable);

        $this->assertEquals("message", $obj->getMessage());
        $this->assertEquals(500, $obj->getCode());
        $this->assertSame($throwable, $obj->getPrevious());
    }
}