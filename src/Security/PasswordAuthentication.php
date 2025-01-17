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

namespace WBW\Library\Common\Security;

use WBW\Library\Common\Traits\Strings\StringPasswordTrait;
use WBW\Library\Common\Traits\Strings\StringUsernameTrait;

/**
 * Password authentication.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Security
 */
class PasswordAuthentication {

    use StringPasswordTrait;
    use StringUsernameTrait;

    /**
     * Constructor.
     *
     * @param string|null $username The username.
     * @param string|null $password The password.
     */
    public function __construct(?string $username, ?string $password) {
        $this->setPassword($password);
        $this->setUsername($username);
    }
}
