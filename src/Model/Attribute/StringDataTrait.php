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
 * String data trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Attribute
 */
trait StringDataTrait {

    /**
     * Data.
     *
     * @var string|null
     */
    protected $data;

    /**
     * Get the data.
     *
     * @return string|null Returns the data.
     */
    public function getData(): ?string {
        return $this->data;
    }

    /**
     * Set the data.
     *
     * @param string|null $data The data.
     */
    public function setData(?string $data): self {
        $this->data = $data;
        return $this;
    }
}
