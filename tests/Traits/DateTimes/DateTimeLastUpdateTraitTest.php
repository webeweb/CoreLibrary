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

namespace WBW\Library\Common\Tests\Traits\DateTimes;

use DateTime;
use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\DateTimes\TestDateTimeLastUpdateTrait;

/**
 * Date/time last update trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\DateTimes
 */
class DateTimeLastUpdateTraitTest extends AbstractTestCase {

    /**
     * Test setLastUpdate()
     *
     * @return void
     */
    public function testSetLastUpdate(): void {

        // Set a last update mock.
        $lastUpdate = new DateTime();

        $obj = new TestDateTimeLastUpdateTrait();

        $obj->setLastUpdate($lastUpdate);
        $this->assertSame($lastUpdate, $obj->getLastUpdate());
    }
}
