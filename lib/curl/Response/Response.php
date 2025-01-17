<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Curl\Response;

/**
 * Response.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Curl\Response
 */
class Response implements ResponseInterface {

    /**
     * Request body.
     *
     * @var string|null
     */
    private $requestBody;

    /**
     * Request header.
     *
     * @var string[]|null
     */
    private $requestHeader;

    /**
     * Request URL.
     *
     * @var string|null
     */
    private $requestUrl;

    /**
     * Response body.
     *
     * @var string|null
     */
    private $responseBody;

    /**
     * Response header.
     *
     * @var string[]|null
     */
    private $responseHeader;

    /**
     * Response info.
     *
     * @var array<string,string>|null
     */
    private $responseInfo;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setRequestHeader([]);
        $this->setResponseHeader([]);
        $this->setResponseInfo([]);
    }

    /**
     * {@inheritDoc}
     */
    public function getRequestBody(): ?string {
        return $this->requestBody;
    }

    /**
     * {@inheritDoc}
     */
    public function getRequestHeader(): array {
        return $this->requestHeader;
    }

    /**
     * {@inheritDoc}
     */
    public function getRequestUrl(): ?string {
        return $this->requestUrl;
    }

    /**
     * {@inheritDoc}
     */
    public function getResponseBody(): ?string {
        return $this->responseBody;
    }

    /**
     * {@inheritDoc}
     */
    public function getResponseHeader(): array {
        return $this->responseHeader;
    }

    /**
     * {@inheritDoc}
     */
    public function getResponseInfo(): array {
        return $this->responseInfo;
    }

    /**
     * Set the request body.
     *
     * @param string|null $requestBody The request body.
     * @return Response Returns this response.
     */
    public function setRequestBody(?string $requestBody): Response {
        $this->requestBody = $requestBody;
        return $this;
    }

    /**
     * Set the request header.
     *
     * @param string[] $requestHeader The request header.
     * @return Response Returns this response.
     */
    public function setRequestHeader(array $requestHeader): Response {
        $this->requestHeader = $requestHeader;
        return $this;
    }

    /**
     * Set the request URL.
     *
     * @param string $requestUrl The request URL.
     * @return Response Returns this response.
     */
    public function setRequestUrl(string $requestUrl): Response {
        $this->requestUrl = $requestUrl;
        return $this;
    }

    /**
     * Set the response body.
     *
     * @param string|null $responseBody The response body.
     * @return Response Returns this response.
     */
    public function setResponseBody(?string $responseBody): Response {
        $this->responseBody = $responseBody;
        return $this;
    }

    /**
     * Set the response header.
     *
     * @param string[] $responseHeader The response header.
     * @return Response Returns this response.
     */
    public function setResponseHeader(array $responseHeader): Response {
        $this->responseHeader = $responseHeader;
        return $this;
    }

    /**
     * Set the response info.
     *
     * @param array<string,string> $responseInfo The response info.
     * @return Response Returns this response.
     */
    public function setResponseInfo(array $responseInfo): Response {
        $this->responseInfo = $responseInfo;
        return $this;
    }
}
