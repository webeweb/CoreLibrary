<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Component\Toast;

use WBW\Library\Symfony\Component\Toast\WarningToast;
use WBW\Library\Symfony\Component\ToastInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Warning toast test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Component\Toast
 */
class WarningToastTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new WarningToast("warning");

        $this->assertEquals(ToastInterface::TOAST_WARNING, $obj->getType());
        $this->assertEquals("warning", $obj->getContent());
    }
}