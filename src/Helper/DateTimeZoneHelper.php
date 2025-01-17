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

namespace WBW\Library\Common\Helper;

use DateTimeZone;

/**
 * Date/time zone helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Helper
 */
class DateTimeZoneHelper {

    /**
     * Determine if two date/time zone are equals.
     *
     * @param DateTimeZone $a The date/time zone A.
     * @param DateTimeZone $b The date/time zone B.
     * @return bool Returns true in case o success, false otherwise.
     */
    public static function equals(DateTimeZone $a, DateTimeZone $b): bool {
        return $a->getName() === $b->getName();
    }
}
