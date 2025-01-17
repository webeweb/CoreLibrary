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

namespace WBW\Library\Easilys\Tests\Traits\Strings;

use WBW\Library\Easilys\Tests\AbstractTestCase;
use WBW\Library\Easilys\Tests\Fixtures\Traits\Strings\TestStringDateCreatedTrait;

/**
 * String date created trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Traits\Strings
 */
class StringDateCreatedTraitTest extends AbstractTestCase {

    /**
     * Test setDateCreated()
     *
     * @return void
     */
    public function testSetDateCreated(): void {

        $obj = new TestStringDateCreatedTrait();

        $obj->setDateCreated("dateCreated");
        $this->assertEquals("dateCreated", $obj->getDateCreated());
    }
}
