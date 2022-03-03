<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Assets\Theme;

use WBW\Library\Symfony\Provider\Theme\TasksDropdownThemeProviderInterface;

/**
 * Default tasks dropdown theme provider.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Assets\Theme
 */
class DefaultTasksDropdownThemeProvider implements TasksDropdownThemeProviderInterface {

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * {@inheritDoc}
     */
    public function getTasks(): array {
        return [];
    }
}
