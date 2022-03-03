<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Assets\Theme;

use WBW\Library\Symfony\Assets\Theme\DefaultSearchThemeProvider;
use WBW\Library\Symfony\Provider\Theme\SearchThemeProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Default search theme provider test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Assets\Theme
 */
class DefaultSearchThemeProviderTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DefaultSearchThemeProvider();

        $this->assertInstanceOf(SearchThemeProviderInterface::class, $obj);
    }
}
