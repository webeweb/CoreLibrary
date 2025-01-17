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

namespace WBW\Library\Widget\Tests\Factory;

use WBW\Library\Widget\Component\ToastInterface;
use WBW\Library\Widget\Factory\ToastFactory;
use WBW\Library\Widget\Tests\AbstractTestCase;

/**
 * Toast factory test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Factory
 */
class ToastFactoryTest extends AbstractTestCase {

    /**
     * Test newDangerToast()
     *
     * @return void
     */
    public function testNewDangerToast(): void {

        $obj = ToastFactory::newDangerToast("content");

        $this->assertInstanceOf(ToastInterface::class, $obj);
        $this->assertEquals("content", $obj->getContent());
        $this->assertEquals(ToastInterface::TOAST_TYPE_DANGER, $obj->getType());
    }

    /**
     * Test newDefaultToast()
     *
     * @return void
     */
    public function testNewDefaultToast(): void {

        $obj = ToastFactory::newDefaultToast("content", "type");

        $this->assertInstanceOf(ToastInterface::class, $obj);
        $this->assertEquals("content", $obj->getContent());
        $this->assertEquals("type", $obj->getType());
    }

    /**
     * Test newInfoToast()
     *
     * @return void
     */
    public function testNewInfoToast(): void {

        $obj = ToastFactory::newInfoToast("content");

        $this->assertInstanceOf(ToastInterface::class, $obj);
        $this->assertEquals("content", $obj->getContent());
        $this->assertEquals(ToastInterface::TOAST_TYPE_INFO, $obj->getType());
    }

    /**
     * Test newSuccessToast()
     *
     * @return void
     */
    public function testNewSuccessToast(): void {

        $obj = ToastFactory::newSuccessToast("content");

        $this->assertInstanceOf(ToastInterface::class, $obj);
        $this->assertEquals("content", $obj->getContent());
        $this->assertEquals(ToastInterface::TOAST_TYPE_SUCCESS, $obj->getType());
    }

    /**
     * Test newWarningToast()
     *
     * @return void
     */
    public function testNewWarningToast(): void {

        $obj = ToastFactory::newWarningToast("content");

        $this->assertInstanceOf(ToastInterface::class, $obj);
        $this->assertEquals("content", $obj->getContent());
        $this->assertEquals(ToastInterface::TOAST_TYPE_WARNING, $obj->getType());
    }
}
