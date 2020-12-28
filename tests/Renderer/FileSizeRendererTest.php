<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Renderer;

use WBW\Library\Core\Renderer\FileSizeRenderer;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * File size renderer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Tests\Renderer
 */
class FileSizeRendererTest extends AbstractTestCase {

    /**
     * Tests the renderSize() method.
     *
     * @return void
     */
    public function testFormatFileSize(): void {

        $this->assertEquals("", FileSizeRenderer::renderSize(null));
        $this->assertEquals("", FileSizeRenderer::renderSize(-1));
        $this->assertRegExp("/^1[\.,]00 Kio$/", FileSizeRenderer::renderSize(1024));
        $this->assertRegExp("/^1[\.,]00 Mio$/", FileSizeRenderer::renderSize(1048576));
        $this->assertRegExp("/^1[\.,]00 Gio$/", FileSizeRenderer::renderSize(1073741842));
        $this->assertRegExp("/^1[\.,]000 Gio$/", FileSizeRenderer::renderSize(1073741842, 3));
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals(1024, FileSizeRenderer::SIZE_DIVIDER_KIO);
        $this->assertEquals(1024 * 1024, FileSizeRenderer::SIZE_DIVIDER_MIO);
        $this->assertEquals(1024 * 1024 * 1024, FileSizeRenderer::SIZE_DIVIDER_GIO);
    }
}
