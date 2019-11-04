<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Attribute;

/**
 * Section trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSectionTrait {

    /**
     * Section.
     *
     * @var string
     */
    private $section;

    /**
     * Get the section.
     *
     * @return string Returns the section.
     */
    public function getSection() {
        return $this->section;
    }

    /**
     * Set the section.
     *
     * @param string $section The section.
     */
    public function setSection($section) {
        $this->section = $section;
        return $this;
    }
}