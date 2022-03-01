<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Assets\Icon;

/**
 * Icon renderer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Assets\Icon
 */
class IconRenderer {

    /**
     * Render a style.
     *
     * @param IconInterface $icon The icon.
     * @return string|null Returns the rendered style.
     */
    public static function renderStyle(IconInterface $icon): ?string {
        return null !== $icon->getStyle() ? $icon->getStyle() : null;
    }
}