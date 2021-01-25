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
 * Integer marital status trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Model\Attribute
 */
trait IntegerMaritalStatusTrait {

    /**
     * Marital status.
     *
     * @var int|null
     */
    protected $maritalStatus;

    /**
     * Get the marital status.
     *
     * @return int|null Returns the marital status.
     */
    public function getMaritalStatus(): ?int {
        return $this->maritalStatus;
    }

    /**
     * Set the marital status.
     *
     * @param int|null $maritalStatus The marital status.
     * @return self Returns this instance.
     */
    public function setMaritalStatus(?int $maritalStatus): self {
        $this->maritalStatus = $maritalStatus;
        return $this;
    }
}
