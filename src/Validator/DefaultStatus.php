<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Validator;

/**
 * Default status.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Validator
 */
class DefaultStatus extends AbstractStatus {

    /**
     * Constructor.
     *
     * @param int|null $code The code.
     * @param string|null $message The message.
     */
    public function __construct(int $code = null, string $message = null) {
        parent::__construct($code, $message);
    }
}
