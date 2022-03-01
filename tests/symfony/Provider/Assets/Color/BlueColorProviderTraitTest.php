<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Provider\Assets\Color;

use WBW\Library\Symfony\Provider\Assets\Color\BlueColorProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Provider\Assets\Color\TestBlueColorProviderTrait;

/**
 * Blue color provider trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider\Assets\Color
 */
class BlueColorProviderTraitTest extends AbstractTestCase {

    /**
     * Tests setBlueColorProvider()
     *
     * @return void
     */
    public function testSetBlueColorProvider(): void {

        // Set a Blue color provider mock.
        $blueColorProvider = $this->getMockBuilder(BlueColorProviderInterface::class)->getMock();

        $obj = new TestBlueColorProviderTrait();

        $obj->setBlueColorProvider($blueColorProvider);
        $this->assertSame($blueColorProvider, $obj->getBlueColorProvider());
    }
}
