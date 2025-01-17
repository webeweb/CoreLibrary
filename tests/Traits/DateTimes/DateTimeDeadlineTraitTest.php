<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Traits\DateTimes;

use DateTime;
use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\DateTimes\TestDateTimeDeadlineTrait;

/**
 * Date/time deadline trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\DateTimes
 */
class DateTimeDeadlineTraitTest extends AbstractTestCase {

    /**
     * Test setDeadline()
     *
     * @return void
     */
    public function testSetDeadline(): void {

        // Set a date/time mock.
        $deadline = new DateTime();

        $obj = new TestDateTimeDeadlineTrait();

        $obj->setDeadline($deadline);
        $this->assertSame($deadline, $obj->getDeadline());
    }
}
