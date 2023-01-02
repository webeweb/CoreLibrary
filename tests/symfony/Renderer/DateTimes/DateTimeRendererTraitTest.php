<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Renderer\DateTimes;

use DateTime;
use Throwable;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Renderer\DateTimes\TestDateTimeRendererTrait;

/**
 * Date/time renderer trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Renderer\DateTimes
 */
class DateTimeRendererTraitTest extends AbstractTestCase {

    /**
     * Tests renderDateTime()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testRenderDateTime(): void {

        $obj = new TestDateTimeRendererTrait();

        $this->assertEquals("", $obj->renderDateTime(null));
        $this->assertEquals("2019-01-14 18:15", $obj->renderDateTime(new DateTime("2019-01-14 18:15:00")));
        $this->assertEquals("14/01/2019 18h15", $obj->renderDateTime(new DateTime("2019-01-14 18:15:00"), "d/m/Y H\hi"));
    }
}
