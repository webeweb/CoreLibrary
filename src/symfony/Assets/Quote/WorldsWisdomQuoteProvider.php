<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Assets\Quote;

/**
 * World's wisdom quote provider.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Assets\Quote
 */
class WorldsWisdomQuoteProvider extends YamlQuoteProvider {

    /**
     * Resource path.
     *
     * @var string
     */
    const RESOURCE_PATH = __DIR__ . "/../../Resources/assets/quote/WorldsWisdom.fr.yml";

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct(self::RESOURCE_PATH);
    }
}
