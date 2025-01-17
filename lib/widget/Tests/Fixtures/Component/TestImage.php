<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2024 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Widget\Tests\Fixtures\Component;

use WBW\Library\Widget\Component\AbstractImage;

/**
 * Test image.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Fixtures\Component
 */
class TestImage extends AbstractImage {

    /**
     * Constructor.
     *
     * @param string $pathname The pathname.
     */
    public function __construct(string $pathname) {
        parent::__construct($pathname);
    }
}
