<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\QueryBuilder\Model\Type;

use WBW\Library\QueryBuilder\Model\AbstractQueryBuilderType;
use WBW\Library\QueryBuilder\Model\QueryBuilderRuleInterface;

/**
 * String QueryBuilder type.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\QueryBuilder\Model\Type
 */
class StringQueryBuilderType extends AbstractQueryBuilderType {

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct(self::TYPE_STRING);
    }

    /**
     * {@inheritDoc}
     */
    public function toSql(QueryBuilderRuleInterface $rule, bool $wrap = false): string {

        $str = addslashes($rule->getValue());

        return true === $wrap ? "'$str'" : $str;
    }
}