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

namespace WBW\Library\Widget\Tests\Renderer\Strings;

use WBW\Library\Widget\Tests\AbstractTestCase;
use WBW\Library\Widget\Tests\Fixtures\Renderer\Strings\TestMarkedTextRendererTrait;

/**
 * Marked text renderer trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Renderer\Strings
 */
class MarkedTextRendererTraitTest extends AbstractTestCase {

    /**
     * Test renderMarkedText()
     *
     * @return void
     */
    public function testRenderMarkedText(): void {

        $obj = new TestMarkedTextRendererTrait();

        $this->assertNull($obj->renderMarkedText(null));
        $this->assertNull($obj->renderMarkedText(""));
        $this->assertEquals('<mark>content</mark>', $obj->renderMarkedText("content"));
    }
}
