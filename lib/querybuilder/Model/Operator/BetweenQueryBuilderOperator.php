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

namespace WBW\Library\QueryBuilder\Model\Operator;

use WBW\Library\QueryBuilder\Model\QueryBuilderConditionInterface;
use WBW\Library\QueryBuilder\Model\QueryBuilderRuleInterface;
use WBW\Library\QueryBuilder\Model\Type\ArrayQueryBuilderType;

/**
 * Between QueryBuilder operator.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\QueryBuilder\Model\Operator
 */
class BetweenQueryBuilderOperator extends AbstractQueryBuilderOperator implements QueryBuilderConditionInterface {

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct(self::OPERATOR_BETWEEN);
    }

    /**
     * {@inheritDoc}
     */
    public function toSql(QueryBuilderRuleInterface $rule, bool $wrap = false): string {

        $qbt = new ArrayQueryBuilderType();
        $tmp = $qbt->toSql($rule, true);

        $sql = [
            parent::toSql($rule, $wrap),
            str_replace(self::DEFAULT_SEPARATOR, sprintf(" %s ", self::CONDITION_AND), $tmp),
        ];

        return implode(" ", $sql);
    }
}
