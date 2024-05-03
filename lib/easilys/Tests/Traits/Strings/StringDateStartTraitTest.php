<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Easilys\Tests\Traits\Strings;

use WBW\Library\Easilys\Tests\AbstractTestCase;
use WBW\Library\Easilys\Tests\Fixtures\Traits\Strings\TestStringDateStartTrait;

/**
 * String date start trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Traits\Strings
 */
class StringDateStartTraitTest extends AbstractTestCase {

    /**
     * Test setDateStart()
     *
     * @return void
     */
    public function testSetDateStart(): void {

        $obj = new TestStringDateStartTrait();

        $obj->setDateStart("dateStart");
        $this->assertEquals("dateStart", $obj->getDateStart());
    }
}
