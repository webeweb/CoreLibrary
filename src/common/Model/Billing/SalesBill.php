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

namespace WBW\Library\Common\Model\Billing;

use WBW\Library\Billing\Model\Billable;
use WBW\Library\Common\Serializer\Billing\JsonSerializer;

/**
 * Sales bill.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Model\Billing
 */
class SalesBill extends Billable implements SalesBillInterface {

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeSalesBill($this);
    }
}
