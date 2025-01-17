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

namespace WBW\Library\Widget\Tests\Component;

use JsonSerializable;
use WBW\Library\Widget\Component\DropdownItemInterface;
use WBW\Library\Widget\Tests\AbstractTestCase;
use WBW\Library\Widget\Tests\Fixtures\Component\TestDropdownItem;

/**
 * Dropdown item test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Component
 */
class AbstractDropdownItemTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $obj = new TestDropdownItem();

        $this->assertIsArray($obj->jsonSerialize());
    }

    /**
     * Test setByDefault()
     *
     * @return void
     */
    public function testSetByDefault(): void {

        $obj = new TestDropdownItem();

        $obj->setByDefault(true);
        $this->assertTrue($obj->getByDefault());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestDropdownItem();

        $this->assertInstanceOf(JsonSerializable::class, $obj);
        $this->assertInstanceOf(DropdownItemInterface::class, $obj);

        $this->assertNUll($obj->getByDefault());
        $this->assertNull($obj->getLabel());
        $this->assertNull($obj->getPosition());
    }
}
