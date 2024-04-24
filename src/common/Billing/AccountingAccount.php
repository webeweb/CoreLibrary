<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Billing;

use WBW\Library\Common\Billing\Serializer\JsonSerializer;
use WBW\Library\Common\Traits\Strings\StringLabelTrait;
use WBW\Library\Common\Traits\Strings\StringNumberTrait;
use WBW\Library\Common\Traits\Strings\StringTypeTrait;

/**
 * Accounting account.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Billing
 */
class AccountingAccount implements AccountingAccountInterface {

    use StringLabelTrait;
    use StringNumberTrait;
    use StringTypeTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeAccountingAccount($this);
    }
}
