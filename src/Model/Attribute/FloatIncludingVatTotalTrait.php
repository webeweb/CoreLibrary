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
 * Float including VAT total trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Attribute
 */
trait FloatIncludingVatTotalTrait {

    /**
     * Including VAT total.
     *
     * @var float|null
     */
    protected $includingVatTotal;

    /**
     * Get the including VAT total.
     *
     * @return float Returns the including VAT total.
     */
    public function getIncludingVatTotal(): ?float {
        return $this->includingVatTotal;
    }

    /**
     * Set the including VAT total.
     *
     * @param float|null $includingVatTotal The including VAT total.
     */
    public function setIncludingVatTotal(?float $includingVatTotal) {
        $this->includingVatTotal = $includingVatTotal;
        return $this;
    }
}
