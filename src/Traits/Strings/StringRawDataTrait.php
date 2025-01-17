<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Traits\Strings;

/**
 * String raw data trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Traits\Strings
 */
trait StringRawDataTrait {

    /**
     * Raw data.
     *
     * @var string|null
     */
    protected $rawData;

    /**
     * Get the raw data.
     *
     * @return string|null Returns the raw data.
     */
    public function getRawData(): ?string {
        return $this->rawData;
    }

    /**
     * Set the raw data.
     *
     * @param string|null $rawData The raw data.
     * @return self Returns this instance.
     */
    public function setRawData(?string $rawData): self {
        $this->rawData = $rawData;
        return $this;
    }
}
