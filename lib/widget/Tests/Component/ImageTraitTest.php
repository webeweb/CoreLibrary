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

namespace WBW\Library\Widget\Tests\Component;

use WBW\Library\Widget\Component\ImageInterface;
use WBW\Library\Widget\Tests\AbstractTestCase;
use WBW\Library\Widget\Tests\Fixtures\Component\TestImageTrait;

/**
 * Image trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Component
 */
class ImageTraitTest extends AbstractTestCase {

    /**
     * Test setImage()
     *
     * @return void
     */
    public function testSetImage(): void {

        // Set an Image mock.
        $image = $this->getMockBuilder(ImageInterface::class)->getMock();

        $obj = new TestImageTrait();

        $obj->setImage($image);
        $this->assertSame($image, $obj->getImage());
    }
}
