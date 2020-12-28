<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Transformer\Set;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Transformer\API\TransformerInterface;
use WBW\Library\Core\Transformer\Set\DefaultTransformerSet;
use WBW\Library\Core\Transformer\TrimTransformer;

/**
 * Default transformer set test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Tests\Transformer\Set
 */
class DefaultTransformerSetTest extends AbstractTestCase {

    /**
     * Tests the removeTransformer() method.
     *
     * @retun void
     */
    public function testRemoveTransformer(): void {

        // Set a Transformer mock.
        $transformer = $this->getMockBuilder(TransformerInterface::class)->getMock();

        $obj = new DefaultTransformerSet();

        $obj->addTransformer($transformer);
        $this->assertCount(1, $obj->getTransformers());
        $this->assertSame($transformer, $obj->getTransformers()[0]);

        $obj->removeTransformer($transformer);
        $this->assertCount(0, $obj->getTransformers());
        $this->assertEquals([], $obj->getTransformers());

        $obj->removeTransformer($transformer);
    }

    /**
     * Tests the transform() method.
     *
     * @return void
     */
    public function testTransform(): void {

        // Set a Transformer mock.
        $transformer = new TrimTransformer();

        $obj = new DefaultTransformerSet();
        $obj->addTransformer($transformer);

        $this->assertEquals("trim", $obj->transform(" trim "));
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DefaultTransformerSet();

        $this->assertEquals([], $obj->getTransformers());
    }
}
