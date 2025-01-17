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

namespace WBW\Library\Curl\Request;

use DateTime;
use InvalidArgumentException;
use WBW\Library\Curl\Configuration\Configuration;
use WBW\Library\Curl\Exception\RequestCallException;
use WBW\Library\Curl\Factory\CurlFactory;
use WBW\Library\Curl\Helper\CurlHelper;
use WBW\Library\Curl\Response\Response;
use WBW\Library\Curl\Response\ResponseInterface;

/**
 * Abstract request.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Curl\Request
 * @abstract
 */
abstract class AbstractRequest implements RequestInterface {

    /**
     * Configuration.
     *
     * @var Configuration|null
     */
    private $configuration;

    /**
     * Headers.
     *
     * @var array<string,string>|null
     */
    private $headers;

    /**
     * Method.
     *
     * @var string|null
     */
    private $method;

    /**
     * POST data.
     *
     * @var array<string,string>|null
     */
    private $postData;

    /**
     * Query data.
     *
     * @var array<string,string>|null
     */
    private $queryData;

    /**
     * Resource path.
     *
     * @var string|null
     */
    private $resourcePath;

    /**
     * Constructor.
     *
     * @param string $method The Method.
     * @param Configuration $configuration The configuration.
     * @param string|null $resourcePath The resource path.
     * @throws InvalidArgumentException Throws an invalid argument exception if the method is invalid.
     */
    protected function __construct(string $method, Configuration $configuration, ?string $resourcePath) {
        $this->setConfiguration($configuration);
        $this->setHeaders([]);
        $this->setMethod($method);
        $this->setQueryData([]);
        $this->setPostData([]);
        $this->setResourcePath($resourcePath);
    }

    /**
     * {@inheritDoc}
     */
    public function addHeader(string $name, string $value): RequestInterface {
        $this->headers[$name] = $value;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function addPostData(string $name, string $value): RequestInterface {
        $this->postData[$name] = $value;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function addQueryData(string $name, string $value): RequestInterface {
        $this->queryData[$name] = $value;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function call(): ResponseInterface {

        $requestHeader = $this->mergeHeaders();
        $requestBody   = http_build_query($this->getPostData());

        if (true === in_array("Content-Type: application/json", $requestHeader)) {
            $requestBody = json_encode($this->getPostData());
        }

        $requestUrl = $this->mergeUrl();
        if (0 < count($this->getQueryData())) {
            $requestUrl = implode("?", [$requestUrl, http_build_query($this->getQueryData())]);
        }

        $stream = CurlHelper::initStream($requestUrl, $this->getConfiguration());

        CurlHelper::setHeaders($stream, $requestHeader);
        CurlHelper::setPost($stream, $this->getMethod(), $requestBody);
        CurlHelper::setProxy($stream, $this->getConfiguration());
        CurlHelper::setReturnTransfer($stream);
        CurlHelper::setSsl($stream, $this->getConfiguration());
        CurlHelper::setTimeout($stream, $this->getConfiguration());
        CurlHelper::setUserAgent($stream, $this->getConfiguration());
        CurlHelper::setVerbose($stream, $this->getConfiguration(), $requestUrl, $requestBody);

        $curlExec    = curl_exec($stream);
        $curlGetInfo = curl_getinfo($stream, CURLINFO_HEADER_SIZE);

        $responseHeader = false === is_bool($curlExec) ? $this->parseheader(substr($curlExec, 0, $curlGetInfo)) : [];
        $responseBody   = false === is_bool($curlExec) ? substr($curlExec, $curlGetInfo) : "";
        $responseInfo   = curl_getinfo($stream);

        if (true === $this->getConfiguration()->getDebug()) {

            $msg = (new DateTime())->format("c") . " [DEBUG] $requestUrl" . PHP_EOL . "HTTP response body ~BEGIN~" . PHP_EOL . print_r($responseBody, true) . PHP_EOL . "~END~" . PHP_EOL;
            error_log($msg, 3, $this->getConfiguration()->getDebugFile());
        }

        $response = $this->prepareResponse($requestBody, $requestHeader, $requestUrl, $responseBody, $responseHeader, $responseInfo);

        $curlHttpCode = $responseInfo["http_code"];
        if (200 <= $curlHttpCode && $curlHttpCode <= 299) {
            return $response;
        }

        $msg = curl_errno($stream);
        if (0 === $curlHttpCode) {

            $msg = "Call to $requestUrl failed, but for an unknown reason. This could happen if you are disconnected from the network.";

            if (false === empty(curl_error($stream))) {
                $msg = "Call to $requestUrl failed : " . curl_error($stream);
            }
        }

        throw new RequestCallException((string) $msg, $curlHttpCode, $response);
    }

    /**
     * {@inheritDoc}
     */
    public function clearHeaders(): RequestInterface {
        return $this->setHeaders([]);
    }

    /**
     * {@inheritDoc}
     */
    public function clearPostData(): RequestInterface {
        return $this->setPostData([]);
    }

    /**
     * {@inheritDoc}
     */
    public function clearQueryData(): RequestInterface {
        return $this->setQueryData([]);
    }

    /**
     * {@inheritDoc}
     */
    public function getConfiguration(): Configuration {
        return $this->configuration;
    }

    /**
     * {@inheritDoc}
     */
    public function getHeaders(): array {
        return $this->headers;
    }

    /**
     * {@inheritDoc}
     */
    public function getMethod(): string {
        return $this->method;
    }

    /**
     * {@inheritDoc}
     */
    public function getPostData(): array {
        return $this->postData;
    }

    /**
     * {@inheritDoc}
     */
    public function getQueryData(): array {
        return $this->queryData;
    }

    /**
     * {@inheritDoc}
     */
    public function getResourcePath(): string {
        return $this->resourcePath;
    }

    /**
     * Merge the headers.
     *
     * @return string[] Returns the merged headers.
     */
    private function mergeHeaders(): array {

        $headers = [];
        foreach (array_merge($this->getConfiguration()->getHeaders(), $this->getHeaders()) as $key => $value) {
            $headers[] = implode(": ", [$key, $value]);
        }

        return $headers;
    }

    /**
     * Merge the URL.
     *
     * @return string Returns the merged URL.
     */
    private function mergeUrl(): string {

        $mergedURL = [
            $this->getConfiguration()->getHost(),
        ];

        if (null !== $this->getResourcePath() && "" !== $this->getResourcePath()) {
            $mergedURL[] = $this->getResourcePath();
        }

        return implode("/", $mergedURL);
    }

    /**
     * Parse the raw header.
     *
     * @param string $rawHeader The raw header.
     * @return array<string,string> Returns the headers.
     */
    private function parseHeader(string $rawHeader): array {

        $headers = [];
        $key     = "";

        foreach (explode("\n", $rawHeader) as $h) {

            $h = explode(":", $h, 2);

            if (true === isset($h[1])) {

                if (false === isset($headers[$h[0]])) {
                    $headers[$h[0]] = trim($h[1]);
                } else if (true === is_array($headers[$h[0]])) {
                    $headers[$h[0]] = array_merge($headers[$h[0]], [trim($h[1])]);
                } else {
                    $headers[$h[0]] = array_merge([$headers[$h[0]]], [trim($h[1])]);
                }

                $key = $h[0];
            } else {

                if ("\t" === substr($h[0], 0, 1)) {
                    $headers[$key] .= "\r\n\t" . trim($h[0]);
                } else if (!$key) {
                    $headers[0] = trim($h[0]);
                }
            }
        }

        return $headers;
    }

    /**
     * Prepare a response.
     *
     * @param string $requestBody The request body.
     * @param array<string,string> $requestHeader The request header.
     * @param string $requestUri The request URI.
     * @param string $responseBody The response body.
     * @param array<string,string> $responseHeader The response header.
     * @param array<string,string> $responseInfo The response info.
     * @return ResponseInterface Returns the response.
     */
    private function prepareResponse(string $requestBody, array $requestHeader, string $requestUri, string $responseBody, array $responseHeader, array $responseInfo): ResponseInterface {

        /** @var Response $response */
        $response = CurlFactory::newCURLResponse();
        $response->setRequestBody($requestBody);
        $response->setRequestHeader($requestHeader);
        $response->setRequestUrl($requestUri);
        $response->setResponseBody($responseBody);
        $response->setResponseHeader($responseHeader);
        $response->setResponseInfo($responseInfo);

        return $response;
    }

    /**
     * {@inheritDoc}
     */
    public function removeHeader(string $name): RequestInterface {

        if (true === array_key_exists($name, $this->headers)) {
            unset($this->headers[$name]);
        }

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function removePostData(string $name): RequestInterface {

        if (true === array_key_exists($name, $this->postData)) {
            unset($this->postData[$name]);
        }

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function removeQueryData(string $name): RequestInterface {

        if (true === array_key_exists($name, $this->queryData)) {
            unset($this->queryData[$name]);
        }

        return $this;
    }

    /**
     * Set the configuration.
     *
     * @param Configuration $configuration The configuration.
     * @return RequestInterface Returns this request.
     */
    protected function setConfiguration(Configuration $configuration): RequestInterface {
        $this->configuration = $configuration;
        return $this;
    }

    /**
     * Set the headers.
     *
     * @param array<string,string> $headers The headers.
     * @return RequestInterface Returns this request.
     */
    protected function setHeaders(array $headers): RequestInterface {
        $this->headers = $headers;
        return $this;
    }

    /**
     * Set the method.
     *
     * @param string $method The method.
     * @return RequestInterface Returns this request.
     * @throws InvalidArgumentException Throws an invalid argument exception if the method is invalid.
     */
    protected function setMethod(string $method): RequestInterface {

        switch ($method) {
            case self::METHOD_DELETE:
            case self::METHOD_GET:
            case self::METHOD_HEAD:
            case self::METHOD_OPTIONS:
            case self::METHOD_PATCH:
            case self::METHOD_POST:
            case self::METHOD_PUT:
                $this->method = $method;
                break;
            default:
                throw new InvalidArgumentException(sprintf('The HTTP method "%s" is invalid', $method));
        }

        return $this;
    }

    /**
     * Set the POST data.
     *
     * @param array<string,string> $postData The POST data.
     * @return RequestInterface Returns this request.
     */
    protected function setPostData(array $postData): RequestInterface {
        $this->postData = $postData;
        return $this;
    }

    /**
     * Set the query data.
     *
     * @param array<string,string> $queryData The query data.
     * @return RequestInterface Returns this request.
     */
    protected function setQueryData(array $queryData): RequestInterface {
        $this->queryData = $queryData;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setResourcePath(?string $resourcePath): RequestInterface {

        if (null !== $resourcePath) {
            $this->resourcePath = preg_replace("/^\//", "", trim($resourcePath));
        }

        return $this;
    }
}
