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

namespace WBW\Library\Common\Tests\Model\System;

use WBW\Library\Common\Model\System\NetworkInterface;
use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Model\System\TestNetworkTrait;

/**
 * Network trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Model\System
 */
class NetworkTraitTest extends AbstractTestCase {

    /**
     * Test setNetwork()
     *
     * @return void
     */
    public function testSetNetwork(): void {

        // Set a Network mock.
        $network = $this->getMockBuilder(NetworkInterface::class)->getMock();

        $obj = new TestNetworkTrait();
        $obj->setNetwork($network);

        $this->assertSame($network, $obj->getNetwork());
    }
}
