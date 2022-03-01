<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Fixtures\Assets\Quote;

use WBW\Library\Symfony\Assets\Quote\AbstractQuoteProvider;

/**
 * Test quote provider.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Fixtures\Assets\Quote
 */
class TestQuoteProvider extends AbstractQuoteProvider {

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * {@inheritDoc}
     */
    public function getDomain(): string {
        return "test";
    }

    /**
     * {@inheritDoc}
     */
    public function init(): void {
        // NOTHING TO DO
    }
}
