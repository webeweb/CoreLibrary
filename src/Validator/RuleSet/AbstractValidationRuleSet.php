<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Validator\RuleSet;

use WBW\Library\Core\Validator\API\ValidationRuleInterface;
use WBW\Library\Core\Validator\API\ValidationRuleSetInterface;

/**
 * Abstract validation rule set.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Validator\RuleSet
 * @abstract
 */
abstract class AbstractValidationRuleSet implements ValidationRuleSetInterface {

    /**
     * Rules.
     *
     * @var ValidationRuleInterface[]
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
    public function addRule(ValidationRuleInterface $rule): ValidationRuleSetInterface {
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
    public function removeRule(ValidationRuleInterface $rule): ValidationRuleSetInterface {

        for ($i = count($this->rules) - 1; 0 <= $i; --$i) {

            if ($rule !== $this->rules[$i]) {
                continue;
            }

            unset($this->rules[$i]);
        }

        return $this;
    }

    /**
     * Set the rules.
     *
     * @param ValidationRuleInterface[] $rules The rules.
     * @return ValidationRuleSetInterface Returns this validation rule set.
     */
    public function setRules(array $rules): ValidationRuleSetInterface {
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
