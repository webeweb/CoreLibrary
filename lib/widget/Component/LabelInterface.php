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

use JsonSerializable;

/**
 * Label interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Component
 */
interface LabelInterface extends JsonSerializable {

    /**
     * Label type "danger".
     *
     * @var string
     */
    public const LABEL_TYPE_DANGER = "danger";

    /**
     * Label type "info".
     *
     * @var string
     */
    public const LABEL_TYPE_INFO = "info";

    /**
     * Label type "success".
     *
     * @var string
     */
    public const LABEL_TYPE_SUCCESS = "success";

    /**
     * Label type "warning".
     *
     * @var string
     */
    public const LABEL_TYPE_WARNING = "warning";

    /**
     * Get the content.
     *
     * @return string|null Returns the content.
     */
    public function getContent(): ?string;

    /**
     * Get the type.
     *
     * @return string|null Returns the type.
     */
    public function getType(): ?string;

    /**
     * Set the content.
     *
     * @param string|null $content The content.
     * @return LabelInterface Returns this label.
     */
    public function setContent(?string $content);
}
