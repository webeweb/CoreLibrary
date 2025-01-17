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
 * Toast trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Component
 */
trait ToastTrait {

    /**
     * Toast.
     *
     * @var ToastInterface|null
     */
    protected $toast;

    /**
     * Get the toast.
     *
     * @return ToastInterface|null Returns the toast.
     */
    public function getToast(): ?ToastInterface {
        return $this->toast;
    }

    /**
     * Set the toast.
     *
     * @param ToastInterface|null $toast The toast.
     * @return self Returns this instance.
     */
    protected function setToast(?ToastInterface $toast): self {
        $this->toast = $toast;
        return $this;
    }
}
