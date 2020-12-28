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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\ConventionsColConf;

/**
 * Conventions col conf test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class ConventionsColConfTest extends AbstractTestCase {

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new ConventionsColConf();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setDroit() method.
     *
     * @return void
     */
    public function testSetDroit(): void {

        $obj = new ConventionsColConf();

        $obj->setDroit("droit");
        $this->assertEquals("droit", $obj->getDroit());
    }

    /**
     * Tests the setType() method.
     *
     * @return void
     */
    public function testSetType(): void {

        $obj = new ConventionsColConf();

        $obj->setType(10);
        $this->assertEquals(10, $obj->getType());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ConventionsColConf();

        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getDroit());
        $this->assertNull($obj->getType());
    }
}
