<?php

declare(strict_types=1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Easilys\Response\Products;

use WBW\Library\Easilys\Model\Unit;
use WBW\Library\Easilys\Response\AbstractResponse;

/**
 * GET units response.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Response\Products
 */
class GetUnitsResponse extends AbstractResponse {

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Add a data.
     *
     * @param Unit|null $data The data.
     * @return GetUnitsResponse Returns this GET units response.
     */
    public function addData(?Unit $data): GetUnitsResponse {

        if (null !== $data) {
            $this->data[] = $data;
        }

        return $this;
    }

    /**
     * Get the data.
     *
     * @return Unit[] Returns the data.
     */
    public function getData(): array {
        return $this->data;
    }
}
