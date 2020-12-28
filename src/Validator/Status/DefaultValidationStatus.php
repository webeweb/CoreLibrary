<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Validator\Status;

/**
 * Default validation status.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Validator\Status
 */
class DefaultValidationStatus extends AbstractValidationStatus {

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
