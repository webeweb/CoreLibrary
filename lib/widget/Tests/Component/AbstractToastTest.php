<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Widget\Tests\Component;

use JsonSerializable;
use WBW\Library\Widget\Component\ToastInterface;
use WBW\Library\Widget\Tests\AbstractTestCase;
use WBW\Library\Widget\Tests\Fixtures\Component\TestToast;

/**
 * Abstract toast test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Component
 */
class AbstractToastTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $obj = new TestToast();

        $this->assertIsArray($obj->jsonSerialize());
    }

    /**
     * Test setContent()
     *
     * @return void
     */
    public function testSetContent(): void {

        $obj = new TestToast();

        $obj->setContent("content");
        $this->assertEquals("content", $obj->getContent());
    }

    /**
     * Test setType()
     *
     * @return void
     */
    public function testSetType(): void {

        $obj = new TestToast();

        $obj->setType("type");
        $this->assertEquals("type", $obj->getType());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestToast();

        $this->assertInstanceOf(JsonSerializable::class, $obj);
        $this->assertInstanceOf(ToastInterface::class, $obj);

        $this->assertEquals("t", $obj->getType());
        $this->assertEquals("c", $obj->getContent());
    }
}
