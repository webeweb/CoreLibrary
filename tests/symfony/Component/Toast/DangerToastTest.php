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

use WBW\Library\Symfony\Component\Toast\DangerToast;
use WBW\Library\Symfony\Component\ToastInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Danger toast test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Component\Toast
 */
class DangerToastTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DangerToast("danger");

        $this->assertEquals(ToastInterface::TOAST_DANGER, $obj->getType());
        $this->assertEquals("danger", $obj->getContent());
    }
}