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

namespace WBW\Library\Common\Tests\Security;

use Throwable;
use WBW\Library\Common\Security\TokenGenerator;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Token generator test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Security
 */
class TokenGeneratorTest extends AbstractTestCase {

    /**
     * Test generateToken()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testGenerateToken(): void {

        $obj = new TokenGenerator();

        for ($i = 0; $i < 32; ++$i) {
            $this->assertRegExp("/[A-Za-z0-9_\-]{32}/", $obj->generateToken());
        }
    }
}
