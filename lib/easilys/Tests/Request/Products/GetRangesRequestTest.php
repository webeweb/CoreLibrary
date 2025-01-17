<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Easilys\Tests\Request\Products;

use WBW\Library\Easilys\Request\AbstractRequest;
use WBW\Library\Easilys\Request\Products\GetRangesRequest;
use WBW\Library\Easilys\Response\Products\GetRangesResponse;
use WBW\Library\Easilys\Tests\AbstractTestCase;

/**
 * GET ranges request test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Request\Products
 */
class GetRangesRequestTest extends AbstractTestCase {

    /**
     * Test deserializeResponse()
     *
     * @return void
     */
    public function testDeserializeResponse(): void {

        $obj = new GetRangesRequest();

        $res = $obj->deserializeResponse("");
        $this->assertInstanceOf(GetRangesResponse::class, $res);
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("/ranges", GetRangesRequest::RESOURCE_PATH);

        $obj = new GetRangesRequest();

        $this->assertInstanceOf(AbstractRequest::class, $obj);

        $this->assertEquals(GetRangesRequest::RESOURCE_PATH, $obj->getResourcePath());
    }
}
