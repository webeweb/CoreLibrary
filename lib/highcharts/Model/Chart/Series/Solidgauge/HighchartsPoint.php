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

namespace WBW\Library\Highcharts\Model\Chart\Series\Solidgauge;

use JsonSerializable;
use WBW\Library\Common\Helper\ArrayHelper;

/**
 * Highcharts point.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart\Series\Solidgauge
 * @version 5.0.14
 */
class HighchartsPoint implements JsonSerializable {

    /**
     * Events.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\Series\Solidgauge\Point\HighchartsEvents|null
     */
    private $events;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the events.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Solidgauge\Point\HighchartsEvents|null Returns the events.
     */
    public function getEvents(): ?\WBW\Library\Highcharts\Model\Chart\Series\Solidgauge\Point\HighchartsEvents {
        return $this->events;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {

        $output = [];

        if (null !== $this->events) {
            ArrayHelper::set($output, "events", $this->events->jsonSerialize());
        }

        return $output;
    }

    /**
     * Create a new events.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Solidgauge\Point\HighchartsEvents Returns the events.
     */
    public function newEvents(): \WBW\Library\Highcharts\Model\Chart\Series\Solidgauge\Point\HighchartsEvents {
        $this->events = new \WBW\Library\Highcharts\Model\Chart\Series\Solidgauge\Point\HighchartsEvents();
        return $this->events;
    }

    /**
     * Set the events.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\Series\Solidgauge\Point\HighchartsEvents|null $events The events.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Solidgauge\HighchartsPoint Returns this highcharts point.
     */
    public function setEvents(?\WBW\Library\Highcharts\Model\Chart\Series\Solidgauge\Point\HighchartsEvents $events): \WBW\Library\Highcharts\Model\Chart\Series\Solidgauge\HighchartsPoint {
        $this->events = $events;
        return $this;
    }
}
