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
 * Type acceptation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeAcceptationTrait {

    /**
     * Type acceptation.
     *
     * @var string
     */
    private $typeAcceptation;

    /**
     * Get the type acceptation.
     *
     * @return string Returns the type acceptation.
     */
    public function getTypeAcceptation() {
        return $this->typeAcceptation;
    }

    /**
     * Set the type acceptation.
     *
     * @param string $typeAcceptation The type acceptation.
     */
    public function setTypeAcceptation($typeAcceptation) {
        $this->typeAcceptation = $typeAcceptation;
        return $this;
    }
}