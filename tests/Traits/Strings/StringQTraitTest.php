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

namespace WBW\Library\Common\Tests\Traits\Strings;

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\Strings\TestStringQTrait;

/**
 * String q trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Strings
 */
class StringQTraitTest extends AbstractTestCase {

    /**
     * Test setQ() method().
     *
     * @return void
     */
    public function testSetQ(): void {

        $obj = new TestStringQTrait();

        $obj->setQ("q");
        $this->assertEquals("q", $obj->getQ());
    }
}
