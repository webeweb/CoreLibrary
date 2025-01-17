<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Factory\Billing;

use WBW\Library\Common\Model\Billing\PurchaseBillInterface;

/**
 * Purchase bill factory.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Factory\Billing
 */
class PurchaseBillFactory {

    /**
     * Copy.
     *
     * @param PurchaseBillInterface $src The purchase bill source.
     * @param PurchaseBillInterface $dst The purchase bill destination.
     * @return PurchaseBillInterface Returns the purchase bill destination.
     */
    public static function copy(PurchaseBillInterface $src, PurchaseBillInterface $dst): PurchaseBillInterface {

        BillableFactory::copy($src, $dst);
        $dst->setPaymentDate(null !== $src->getPaymentDate() ? clone $src->getPaymentDate() : null);

        return $dst;
    }
}
