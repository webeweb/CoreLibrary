<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Model\Attribute;

/**
 * Integer count trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Attribute
 */
trait IntegerCountTrait {

    /**
     * Count.
     *
     * @var int|null
     */
    protected $count;

    /**
     * Get the count.
     *
     * @return int|null Returns the count.
     */
    public function getCount(): ?int {
        return $this->count;
    }

    /**
     * Set the count.
     *
     * @param int|null $count The count.
     */
    public function setCount(?int $count) {
        $this->count = $count;
        return $this;
    }
}
