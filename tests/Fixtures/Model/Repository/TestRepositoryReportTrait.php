<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Fixtures\Model\Repository;

use WBW\Library\Common\Model\Repository\RepositoryReportTrait;

/**
 * Test repository report trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Fixtures\Model\Repository
 */
class TestRepositoryReportTrait {

    use RepositoryReportTrait {
        setRepositoryReport as public;
    }
}
