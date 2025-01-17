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

use InvalidArgumentException;
use WBW\Library\Curl\Configuration\Configuration;

/**
 * DELETE request.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Curl\Request
 */
class DeleteRequest extends AbstractRequest {

    /**
     * Constructor.
     *
     * @param Configuration $configuration The configuration.
     * @param string|null $resourcePath The resource path.
     * @throws InvalidArgumentException Throws an invalid argument exception if the method is invalid.
     */
    public function __construct(Configuration $configuration, ?string $resourcePath) {
        parent::__construct(self::METHOD_DELETE, $configuration, $resourcePath);
    }
}
