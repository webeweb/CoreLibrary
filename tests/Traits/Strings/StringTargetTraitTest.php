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

namespace WBW\Library\Common\Tests\Traits\Strings;

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\Strings\TestStringTargetTrait;

/**
 * String target trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Strings
 */
class StringTargetTraitTest extends AbstractTestCase {

    /**
     * Test setTarget()
     *
     * @return void
     */
    public function testSetTarget(): void {

        $obj = new TestStringTargetTrait();

        $obj->setTarget("target");
        $this->assertEquals("target", $obj->getTarget());
    }
}
