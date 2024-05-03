<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Easilys\Tests\Request\General;

use WBW\Library\Easilys\Request\AbstractRequest;
use WBW\Library\Easilys\Request\General\GetSitesRequest;
use WBW\Library\Easilys\Response\General\GetSitesResponse;
use WBW\Library\Easilys\Tests\AbstractTestCase;

/**
 * GET sites request test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Request\General
 */
class GetSitesRequestTest extends AbstractTestCase {

    /**
     * Test deserializeResponse()
     *
     * @return void
     */
    public function testDeserializeResponse(): void {

        $obj = new GetSitesRequest();

        $res = $obj->deserializeResponse("");
        $this->assertInstanceOf(GetSitesResponse::class, $res);
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("/sites", GetSitesRequest::RESOURCE_PATH);

        $obj = new GetSitesRequest();

        $this->assertInstanceOf(AbstractRequest::class, $obj);

        $this->assertEquals(GetSitesRequest::RESOURCE_PATH, $obj->getResourcePath());
    }
}