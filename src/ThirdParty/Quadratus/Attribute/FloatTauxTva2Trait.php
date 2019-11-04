<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Attribute;

/**
 * Taux tva2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxTva2Trait {

    /**
     * Taux tva2.
     *
     * @var float
     */
    private $tauxTva2;

    /**
     * Get the taux tva2.
     *
     * @return float Returns the taux tva2.
     */
    public function getTauxTva2() {
        return $this->tauxTva2;
    }

    /**
     * Set the taux tva2.
     *
     * @param float $tauxTva2 The taux tva2.
     */
    public function setTauxTva2($tauxTva2) {
        $this->tauxTva2 = $tauxTva2;
        return $this;
    }
}