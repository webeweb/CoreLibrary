<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2024 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\SkiData\Tests\Parser;

use WBW\Library\SkiData\Parser\AbstractParser;
use WBW\Library\SkiData\Tests\AbstractTestCase;

/**
 * Abstract parser test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SkiData\Tests\Parser
 */
class AbstractParserTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("Ymd", AbstractParser::DATE_FORMAT);
        $this->assertEquals("Ymd His", AbstractParser::DATETIME_FORMAT);
    }
}
