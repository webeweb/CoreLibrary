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

namespace WBW\Library\Easilys\Model;

use WBW\Library\Common\Traits\Integers\IntegerIdTrait;
use WBW\Library\Common\Traits\Strings\StringFirstNameTrait;
use WBW\Library\Common\Traits\Strings\StringLastNameTrait;

/**
 * Linked user.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Model
 */
class LinkedUser {

    use IntegerIdTrait {
        setId as public;
    }
    use StringFirstNameTrait;
    use StringLastNameTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }
}
