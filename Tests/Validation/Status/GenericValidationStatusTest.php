<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Validation\Status;

use WBW\Library\Core\Tests\Cases\AbstractCoreFrameworkTestCase;
use WBW\Library\Core\Validation\Status\GenericValidationStatus;

/**
 * Generic validation status test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Validation\Status
 * @final
 */
final class GenericValidationStatusTest extends AbstractCoreFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new GenericValidationStatus(200, "OK");

        $this->assertEquals(200, $obj->getCode());
        $this->assertEquals("OK", $obj->getMessage());
    }

}
