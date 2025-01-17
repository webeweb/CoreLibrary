<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Widget\Renderer\DateTimes;

use DateTime;
use WBW\Library\Common\Helper\DateTimeHelper;

/**
 * Date renderer trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Renderer\DateTimes
 */
trait DateRendererTrait {

    /**
     * Render a date.
     *
     * @param DateTime|null $date The date.
     * @param string $format The format.
     * @return string|null Returns the rendered date.
     */
    protected function renderDate(?DateTime $date, string $format = "Y-m-d"): ?string {
        return DateTimeHelper::toString($date, $format);
    }
}
