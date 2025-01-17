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

namespace WBW\Library\Widget\Component;

/**
 * Button trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Component
 */
trait ButtonTrait {

    /**
     * Button.
     *
     * @var ButtonInterface|null
     */
    protected $button;

    /**
     * Get the button.
     *
     * @return ButtonInterface|null Returns the button.
     */
    public function getButton(): ?ButtonInterface {
        return $this->button;
    }

    /**
     * Set the button.
     *
     * @param ButtonInterface|null $button The button.
     * @return self Returns this instance.
     */
    protected function setButton(?ButtonInterface $button): self {
        $this->button = $button;
        return $this;
    }
}
