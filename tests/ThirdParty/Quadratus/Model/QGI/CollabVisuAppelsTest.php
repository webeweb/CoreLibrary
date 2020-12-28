<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\CollabVisuAppels;

/**
 * Collab visu appels test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class CollabVisuAppelsTest extends AbstractTestCase {

    /**
     * Tests the setCodeCollab() method.
     *
     * @return void
     */
    public function testSetCodeCollab(): void {

        $obj = new CollabVisuAppels();

        $obj->setCodeCollab("codeCollab");
        $this->assertEquals("codeCollab", $obj->getCodeCollab());
    }

    /**
     * Tests the setCodeCollabVisu() method.
     *
     * @return void
     */
    public function testSetCodeCollabVisu(): void {

        $obj = new CollabVisuAppels();

        $obj->setCodeCollabVisu("codeCollabVisu");
        $this->assertEquals("codeCollabVisu", $obj->getCodeCollabVisu());
    }

    /**
     * Tests the setTypeCode() method.
     *
     * @return void
     */
    public function testSetTypeCode(): void {

        $obj = new CollabVisuAppels();

        $obj->setTypeCode("typeCode");
        $this->assertEquals("typeCode", $obj->getTypeCode());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new CollabVisuAppels();

        $this->assertNull($obj->getCodeCollab());
        $this->assertNull($obj->getCodeCollabVisu());
        $this->assertNull($obj->getTypeCode());
    }
}
