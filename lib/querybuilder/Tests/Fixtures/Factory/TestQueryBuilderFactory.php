<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\QueryBuilder\Tests\Fixtures\Factory;

use WBW\Library\QueryBuilder\Factory\QueryBuilderFactory;

/**
 * Test QueryBuilder factory.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\QueryBuilder\Tests\Fixtures\Factory
 */
class TestQueryBuilderFactory extends QueryBuilderFactory {

    /**
     * {@inheritDoc}
     */
    public static function enumQueryBuilderOperators(): array {
        return parent::enumQueryBuilderOperators();
    }

    /**
     * {@inheritDoc}
     */
    public static function enumQueryBuilderTypes(): array {
        return parent::enumQueryBuilderTypes();
    }
}
