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
 * Float average trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Attribute
 */
trait FloatAverageTrait {

    /**
     * Average.
     *
     * @var float|null
     */
    protected $average;

    /**
     * Get the average.
     *
     * @return float|null Returns the average.
     */
    public function getAverage(): ?float {
        return $this->average;
    }

    /**
     * Set the average.
     *
     * @param float|null $average The average.
     */
    public function setAverage(?float $average): self {
        $this->average = $average;
        return $this;
    }
}
