<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Traits\Strings;

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\Strings\TestStringHashSha1Trait;

/**
 * String hash "SHA1" trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Strings
 */
class StringHashSha1TraitTest extends AbstractTestCase {

    /**
     * Test setHashSha1()
     *
     * @return void
     */
    public function testSetHashSha1(): void {

        $obj = new TestStringHashSha1Trait();

        $obj->setHashSha1("hashSha1");
        $this->assertEquals("hashSha1", $obj->getHashSha1());
    }
}
