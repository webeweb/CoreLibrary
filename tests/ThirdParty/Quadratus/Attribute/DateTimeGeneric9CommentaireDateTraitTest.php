<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeGeneric9CommentaireDateTrait;

/**
 * Generic9 commentaire date trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeGeneric9CommentaireDateTraitTest extends AbstractTestCase {

    /**
     * Tests the setGeneric9CommentaireDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetGeneric9CommentaireDate() {

        // Set a Date/time mock.
        $generic9CommentaireDate = new DateTime("2018-09-10");

        $obj = new TestDateTimeGeneric9CommentaireDateTrait();

        $obj->setGeneric9CommentaireDate($generic9CommentaireDate);
        $this->assertSame($generic9CommentaireDate, $obj->getGeneric9CommentaireDate());
    }
}