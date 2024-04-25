<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Sorter;

use WBW\Library\Common\Sorter\AlphabeticalNodeInterface;
use WBW\Library\Sorter\Helper\AlphabeticalTreeNodeHelper;

/**
 * Alphabetical tree sort.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Sorter
 */
class AlphabeticalTreeSort {

    /**
     * Nodes.
     *
     * @var AlphabeticalNodeInterface[]
     */
    private $nodes;

    /**
     * Constructor.
     *
     * @param AlphabeticalNodeInterface[] $nodes The nodes.
     */
    public function __construct(array $nodes) {
        $this->setNodes($nodes);
    }

    /**
     * Compare two nodes.
     *
     * @param AlphabeticalNodeInterface $a The node A.
     * @param AlphabeticalNodeInterface $b The node B.
     * @return int Returns
     *  < O if the node A is lesser than node B
     *  > 0 if the node A is greater than node B
     *  = 0 if the two nodes are equals
     */
    protected function compare(AlphabeticalNodeInterface $a, AlphabeticalNodeInterface $b): int {

        $pathA = AlphabeticalTreeNodeHelper::getPath($a);
        $pathB = AlphabeticalTreeNodeHelper::getPath($b);

        $count = count($pathA);

        for ($i = 0; $i < $count; ++$i) {

            $itemA = $pathA[$i];
            $itemB = true === isset($pathB[$i]) ? $pathB[$i] : null;

            if ($itemA !== $itemB) {
                return null !== $itemB ? strcasecmp($itemA->getAlphabeticalTreeNodeLabel(), $itemB->getAlphabeticalTreeNodeLabel()) : 1;
            }
        }

        return 0;
    }

    /**
     * Get the nodes.
     *
     * @return AlphabeticalNodeInterface[] Returns the nodes.
     */
    public function getNodes(): array {
        return $this->nodes;
    }

    /**
     * Set the nodes.
     *
     * @param AlphabeticalNodeInterface[] $nodes The nodes.
     * @return AlphabeticalTreeSort Returns this alphabetical tree sort.
     */
    protected function setNodes(array $nodes): AlphabeticalTreeSort {
        $this->nodes = $nodes;
        return $this;
    }

    /**
     * Sort.
     *
     * @return AlphabeticalTreeSort Returns this alphabetical tree sort.
     */
    public function sort(): AlphabeticalTreeSort {
        usort($this->nodes, [$this, "compare"]);
        return $this;
    }
}
