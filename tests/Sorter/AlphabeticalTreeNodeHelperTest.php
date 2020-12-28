<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Sorter;

use WBW\Library\Core\Sorter\AlphabeticalTreeNodeHelper;
use WBW\Library\Core\Sorter\AlphabeticalTreeNodeInterface;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\Model\TestNode;
use WBW\Library\Core\Tests\Fixtures\TestFixtures;

/**
 * Alphabetical tree node helper test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Sorter
 */
class AlphabeticalTreeNodeHelperTest extends AbstractTestCase {

    /**
     * Nodes.
     *
     * @var AlphabeticalTreeNodeInterface[]
     */
    private $nodes;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set the node mocks.
        $this->nodes = TestFixtures::getTestNodes();
    }

    /**
     * Tests the createChoices() method.
     *
     * @return void
     */
    public function testCreateChoices(): void {

        $res = AlphabeticalTreeNodeHelper::createChoices($this->nodes);
        $this->assertCount(3, $res["id01"]);
        $this->assertSame($this->nodes[7], $res["id01"][0]);
        $this->assertSame($this->nodes[8], $res["id01"][1]);
        $this->assertSame($this->nodes[9], $res["id01"][2]);
        $this->assertCount(5, $res["id02"]);
        $this->assertSame($this->nodes[4], $res["id02"][0]);
        $this->assertSame($this->nodes[2], $res["id02"][1]);
        $this->assertSame($this->nodes[3], $res["id02"][2]);
        $this->assertSame($this->nodes[5], $res["id02"][3]);
        $this->assertSame($this->nodes[6], $res["id02"][4]);
    }

    /**
     * Tests the getLevel() method.
     *
     * @return void
     */
    public function testGetLevel(): void {

        $this->assertEquals(0, AlphabeticalTreeNodeHelper::getLevel($this->nodes[0]));
        $this->assertEquals(0, AlphabeticalTreeNodeHelper::getLevel($this->nodes[1]));
        $this->assertEquals(2, AlphabeticalTreeNodeHelper::getLevel($this->nodes[2]));
        $this->assertEquals(2, AlphabeticalTreeNodeHelper::getLevel($this->nodes[3]));
        $this->assertEquals(1, AlphabeticalTreeNodeHelper::getLevel($this->nodes[4]));
        $this->assertEquals(1, AlphabeticalTreeNodeHelper::getLevel($this->nodes[5]));
        $this->assertEquals(1, AlphabeticalTreeNodeHelper::getLevel($this->nodes[6]));
        $this->assertEquals(1, AlphabeticalTreeNodeHelper::getLevel($this->nodes[7]));
        $this->assertEquals(1, AlphabeticalTreeNodeHelper::getLevel($this->nodes[8]));
        $this->assertEquals(1, AlphabeticalTreeNodeHelper::getLevel($this->nodes[9]));
    }

    /**
     * Tests the removeOrphan() method.
     *
     * @return void
     */
    public function testRemoveOrphan(): void {

        AlphabeticalTreeNodeHelper::removeOrphan($this->nodes);
        $this->assertCount(10, $this->nodes);

        $this->nodes[1]->removeNode($this->nodes[4]);
        (new TestNode("id11"))->addNode($this->nodes[4]); // Set a new parent that is not in the initial array.

        AlphabeticalTreeNodeHelper::removeOrphan($this->nodes);
        $this->assertCount(7, $this->nodes);
    }
}
