<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Validator;

/**
 * Abstract validator.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Validator
 * @abstract
 */
abstract class AbstractValidator implements ValidatorInterface {

    /**
     * Rule set.
     *
     * @var RuleSetInterface|null
     */
    private $ruleSet;

    /**
     * Constructor.
     *
     * @param RuleSetInterface $ruleSet The rule set.
     */
    protected function __construct(RuleSetInterface $ruleSet) {
        $this->setRuleSet($ruleSet);
    }

    /**
     * {@inheritDoc}
     */
    public function getRuleSet(): RuleSetInterface {
        return $this->ruleSet;
    }

    /**
     * Set the rule set.
     *
     * @param RuleSetInterface $ruleSet The rule set.
     * @return ValidatorInterface Returns this validator.
     */
    protected function setRuleSet(RuleSetInterface $ruleSet): ValidatorInterface {
        $this->ruleSet = $ruleSet;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function validate($object): array {
        return $this->ruleSet->validate($object);
    }
}
