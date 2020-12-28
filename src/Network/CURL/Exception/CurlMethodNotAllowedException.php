<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Network\CURL\Exception;

/**
 * cURL method not allowed exception.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Network\CURL\Exception
 */
class CurlMethodNotAllowedException extends AbstractCurlException {

    /**
     * Constructor.
     *
     * @param string $method The method.
     */
    public function __construct(string $method) {
        parent::__construct(sprintf('The method "%s" is not allowed', $method));
    }
}
