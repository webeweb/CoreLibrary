<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Transformer;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Transformer\StrReplaceTransformer;

/**
 * str_replace transformer test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Transformer
 */
class StrReplaceTransformerTest extends AbstractTestCase {

    /**
     * Tests the transform() method.
     *
     * @return void
     */
    public function testTransform(): void {

        $obj = new StrReplaceTransformer(["search"], ["replace"]);

        $this->assertNull($obj->transform(null));
        $this->assertNull($obj->transform(true));
        $this->assertEquals("replace", $obj->transform("search"));
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new StrReplaceTransformer(["search"], ["replace"]);

        $this->assertEquals(["search"], $obj->getSearches());
        $this->assertEquals(["replace"], $obj->getReplaces());
    }
}
