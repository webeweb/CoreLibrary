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

namespace WBW\Library\Widget\Tests\Renderer;

use WBW\Library\Widget\Tests\AbstractTestCase;
use WBW\Library\Widget\Tests\Fixtures\Renderer\TestStringsRendererTrait;

/**
 * Strings renderer trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Renderer
 */
class StringsRendererTraitTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestStringsRendererTrait();

        $this->assertNull($obj->renderBoldText(null));
        $this->assertNull($obj->renderDeletedText(null));
        $this->assertNull($obj->renderInsertedText(null));
        $this->assertNull($obj->renderItalicText(null));
        $this->assertNull($obj->renderMarkedText(null));
        $this->assertNull($obj->renderSmallText(null));
        $this->assertNull($obj->renderStrikethroughText(null));
        $this->assertNull($obj->renderUnderlinedText(null));
    }
}
