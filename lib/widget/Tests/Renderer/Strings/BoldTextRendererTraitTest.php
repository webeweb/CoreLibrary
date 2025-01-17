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
use WBW\Library\Widget\Tests\Fixtures\Renderer\Strings\TestBoldTextRendererTrait;

/**
 * Bold text renderer trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Renderer\Strings
 */
class BoldTextRendererTraitTest extends AbstractTestCase {

    /**
     * Test renderBoldText()
     *
     * @return void
     */
    public function testRenderBoldText(): void {

        $obj = new TestBoldTextRendererTrait();

        $this->assertNull($obj->renderBoldText(null));
        $this->assertNull($obj->renderBoldText(""));
        $this->assertEquals('<strong>content</strong>', $obj->renderBoldText("content"));
    }
}
