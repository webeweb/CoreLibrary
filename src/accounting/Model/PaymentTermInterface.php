<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Accounting\Model;

/**
 * Payment term interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Accounting\Model
 */
interface PaymentTermInterface {

    /**
     * Get the code.
     *
     * @return string|null Returns the code.
     */
    public function getCode(): ?string;

    /**
     * Get the label.
     *
     * @return string|null Returns the label.
     */
    public function getLabel(): ?string;

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     * @return PaymentChoice Returns this payment choice.
     */
    public function setCode(?string $code);

    /**
     * Set the label.
     *
     * @param string|null $label The label.
     * @return PaymentChoice Returns this payment choice.
     */
    public function setLabel(?string $label);
}