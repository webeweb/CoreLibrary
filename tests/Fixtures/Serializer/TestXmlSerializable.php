<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Fixtures\Serializer;

use WBW\Library\Common\Serializer\XmlSerializable;

/**
 * Test XML serializable.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Fixtures\Serializer
 */
class TestXmlSerializable implements XmlSerializable {

    /**
     * {@inheritDoc}
     */
    public function xmlSerialize(): ?string {
        return "";
    }
}
