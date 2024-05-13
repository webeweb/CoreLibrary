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

namespace WBW\Library\Highcharts\Model\Chart\Series\Scatter\Data;

use JsonSerializable;
use WBW\Library\Common\Helper\ArrayHelper;

/**
 * Highcharts marker.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart\Series\Scatter\Data
 * @version 5.0.14
 */
class HighchartsMarker implements JsonSerializable {

    /**
     * Enabled.
     *
     * @var bool|null
     */
    private $enabled;

    /**
     * Fill color.
     *
     * @var string|null
     */
    private $fillColor;

    /**
     * Height.
     *
     * @var float|null
     * @since 4.0.4
     */
    private $height;

    /**
     * Line color.
     *
     * @var string|null
     */
    private $lineColor = "#ffffff";

    /**
     * Line width.
     *
     * @var float|null
     */
    private $lineWidth = 0;

    /**
     * Radius.
     *
     * @var float|null
     */
    private $radius = 4;

    /**
     * States.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\Series\Scatter\Data\Marker\HighchartsStates|null
     */
    private $states;

    /**
     * Symbol.
     *
     * @var string|null
     */
    private $symbol;

    /**
     * Width.
     *
     * @var float|null
     * @since 4.0.4
     */
    private $width;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the enabled.
     *
     * @return bool|null Returns the enabled.
     */
    public function getEnabled(): ?bool {
        return $this->enabled;
    }

    /**
     * Get the fill color.
     *
     * @return string|null Returns the fill color.
     */
    public function getFillColor(): ?string {
        return $this->fillColor;
    }

    /**
     * Get the height.
     *
     * @return float|null Returns the height.
     */
    public function getHeight(): ?float {
        return $this->height;
    }

    /**
     * Get the line color.
     *
     * @return string|null Returns the line color.
     */
    public function getLineColor(): ?string {
        return $this->lineColor;
    }

    /**
     * Get the line width.
     *
     * @return float|null Returns the line width.
     */
    public function getLineWidth(): ?float {
        return $this->lineWidth;
    }

    /**
     * Get the radius.
     *
     * @return float|null Returns the radius.
     */
    public function getRadius(): ?float {
        return $this->radius;
    }

    /**
     * Get the states.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Scatter\Data\Marker\HighchartsStates|null Returns the states.
     */
    public function getStates(): ?\WBW\Library\Highcharts\Model\Chart\Series\Scatter\Data\Marker\HighchartsStates {
        return $this->states;
    }

    /**
     * Get the symbol.
     *
     * @return string|null Returns the symbol.
     */
    public function getSymbol(): ?string {
        return $this->symbol;
    }

    /**
     * Get the width.
     *
     * @return float|null Returns the width.
     */
    public function getWidth(): ?float {
        return $this->width;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {

        $output = [];

        ArrayHelper::set($output, "enabled", $this->enabled, [null]);
        ArrayHelper::set($output, "fillColor", $this->fillColor, [null]);
        ArrayHelper::set($output, "height", $this->height, [null]);
        ArrayHelper::set($output, "lineColor", $this->lineColor, [null]);
        ArrayHelper::set($output, "lineWidth", $this->lineWidth, [null]);
        ArrayHelper::set($output, "radius", $this->radius, [null]);
        if (null !== $this->states) {
            ArrayHelper::set($output, "states", $this->states->jsonSerialize());
        }
        ArrayHelper::set($output, "symbol", $this->symbol, [null]);
        ArrayHelper::set($output, "width", $this->width, [null]);

        return $output;
    }

    /**
     * Create a new states.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Scatter\Data\Marker\HighchartsStates Returns the states.
     */
    public function newStates(): \WBW\Library\Highcharts\Model\Chart\Series\Scatter\Data\Marker\HighchartsStates {
        $this->states = new \WBW\Library\Highcharts\Model\Chart\Series\Scatter\Data\Marker\HighchartsStates();
        return $this->states;
    }

    /**
     * Set the enabled.
     *
     * @param bool|null $enabled The enabled.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Scatter\Data\HighchartsMarker Returns this highcharts marker.
     */
    public function setEnabled(?bool $enabled): \WBW\Library\Highcharts\Model\Chart\Series\Scatter\Data\HighchartsMarker {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * Set the fill color.
     *
     * @param string|null $fillColor The fill color.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Scatter\Data\HighchartsMarker Returns this highcharts marker.
     */
    public function setFillColor(?string $fillColor): \WBW\Library\Highcharts\Model\Chart\Series\Scatter\Data\HighchartsMarker {
        $this->fillColor = $fillColor;
        return $this;
    }

    /**
     * Set the height.
     *
     * @param float|null $height The height.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Scatter\Data\HighchartsMarker Returns this highcharts marker.
     */
    public function setHeight(?float $height): \WBW\Library\Highcharts\Model\Chart\Series\Scatter\Data\HighchartsMarker {
        $this->height = $height;
        return $this;
    }

    /**
     * Set the line color.
     *
     * @param string|null $lineColor The line color.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Scatter\Data\HighchartsMarker Returns this highcharts marker.
     */
    public function setLineColor(?string $lineColor): \WBW\Library\Highcharts\Model\Chart\Series\Scatter\Data\HighchartsMarker {
        $this->lineColor = $lineColor;
        return $this;
    }

    /**
     * Set the line width.
     *
     * @param float|null $lineWidth The line width.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Scatter\Data\HighchartsMarker Returns this highcharts marker.
     */
    public function setLineWidth(?float $lineWidth): \WBW\Library\Highcharts\Model\Chart\Series\Scatter\Data\HighchartsMarker {
        $this->lineWidth = $lineWidth;
        return $this;
    }

    /**
     * Set the radius.
     *
     * @param float|null $radius The radius.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Scatter\Data\HighchartsMarker Returns this highcharts marker.
     */
    public function setRadius(?float $radius): \WBW\Library\Highcharts\Model\Chart\Series\Scatter\Data\HighchartsMarker {
        $this->radius = $radius;
        return $this;
    }

    /**
     * Set the states.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\Series\Scatter\Data\Marker\HighchartsStates|null $states The states.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Scatter\Data\HighchartsMarker Returns this highcharts marker.
     */
    public function setStates(?\WBW\Library\Highcharts\Model\Chart\Series\Scatter\Data\Marker\HighchartsStates $states): \WBW\Library\Highcharts\Model\Chart\Series\Scatter\Data\HighchartsMarker {
        $this->states = $states;
        return $this;
    }

    /**
     * Set the symbol.
     *
     * @param string|null $symbol The symbol.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Scatter\Data\HighchartsMarker Returns this highcharts marker.
     */
    public function setSymbol(?string $symbol): \WBW\Library\Highcharts\Model\Chart\Series\Scatter\Data\HighchartsMarker {

        switch ($symbol) {

            case null:
            case "circle":
            case "diamond":
            case "square":
            case "triangle":
            case "triangle-down":
                $this->symbol = $symbol;
                break;
        }

        return $this;
    }

    /**
     * Set the width.
     *
     * @param float|null $width The width.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Scatter\Data\HighchartsMarker Returns this highcharts marker.
     */
    public function setWidth(?float $width): \WBW\Library\Highcharts\Model\Chart\Series\Scatter\Data\HighchartsMarker {
        $this->width = $width;
        return $this;
    }
}
