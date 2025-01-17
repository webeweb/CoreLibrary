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
 * Abstract rule set.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Validator
 * @abstract
 */
abstract class AbstractRuleSet implements RuleSetInterface {

    /**
     * Rules.
     *
     * @var RuleInterface[]|null
     */
    private $rules;

    /**
     * Constructor.
     */
    protected function __construct() {
        $this->setRules([]);
    }

    /**
     * {@inheritDoc}
     */
    public function addRule(RuleInterface $rule): RuleSetInterface {
        $this->rules[] = $rule;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getRules(): array {
        return $this->rules;
    }

    /**
     * {@inheritDoc}
     */
    public function removeRule(RuleInterface $rule): RuleSetInterface {

        for ($i = count($this->rules) - 1; 0 <= $i; --$i) {

            if ($rule === $this->rules[$i]) {
                unset($this->rules[$i]);
            }
        }

        return $this;
    }

    /**
     * Set the rules.
     *
     * @param RuleInterface[] $rules The rules.
     * @return RuleSetInterface Returns this rule set.
     */
    public function setRules(array $rules): RuleSetInterface {
        $this->rules = $rules;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function validate($object): array {

        $result = [];

        foreach ($this->rules as $current) {

            $status = $current->validate($object);
            if (null === $status->getRuleName()) {
                $status->setRuleName($current->getName());
            }

            $result [] = $status;
        }

        return $result;
    }
}
