<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Utility;

use WBW\Library\Core\Argument\Helper\DateTimeHelper;
use WBW\Library\Core\Sorter\FunctorInterface;

/**
 * Time slot functor.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Organizer
 */
class TimeSlotFunctor implements FunctorInterface {

    /**
     * {@inheritDoc}
     */
    public function compare($a, $b) {
        return DateTimeHelper::isLessThan($a->getStartDate(), $b->getStartDate());
    }
}
