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

namespace WBW\Library\Highcharts\Model\Chart;

use JsonSerializable;
use WBW\Library\Common\Helper\ArrayHelper;

/**
 * Highcharts title.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart
 * @version 5.0.14
 */
class HighchartsTitle implements JsonSerializable {

    /**
     * Align.
     *
     * @var string|null
     * @since 2.0
     */
    private $align = "center";

    /**
     * Floating.
     *
     * @var bool|null
     * @since 2.1
     */
    private $floating = false;

    /**
     * Margin.
     *
     * @var float|null
     * @since 2.1
     */
    private $margin = 15;

    /**
     * Style.
     *
     * @var mixed[]|null
     */
    private $style = ["color" => "#333333", "fontSize" => "18px"];

    /**
     * Text.
     *
     * @var string|null
     */
    private $text = "Chart title";

    /**
     * Use HTML.
     *
     * @var bool|null
     */
    private $useHTML = false;

    /**
     * Vertical align.
     *
     * @var string|null
     * @since 2.1
     */
    private $verticalAlign;

    /**
     * Width adjust.
     *
     * @var float|null
     * @since 4.2.5
     */
    private $widthAdjust = -44;

    /**
     * X.
     *
     * @var float|null
     * @since 2.0
     */
    private $x = 0;

    /**
     * Y.
     *
     * @var float|null
     * @since 2.0
     */
    private $y;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the align.
     *
     * @return string|null Returns the align.
     */
    public function getAlign(): ?string {
        return $this->align;
    }

    /**
     * Get the floating.
     *
     * @return bool|null Returns the floating.
     */
    public function getFloating(): ?bool {
        return $this->floating;
    }

    /**
     * Get the margin.
     *
     * @return float|null Returns the margin.
     */
    public function getMargin(): ?float {
        return $this->margin;
    }

    /**
     * Get the style.
     *
     * @return mixed[]|null Returns the style.
     */
    public function getStyle(): ?array {
        return $this->style;
    }

    /**
     * Get the text.
     *
     * @return string|null Returns the text.
     */
    public function getText(): ?string {
        return $this->text;
    }

    /**
     * Get the use HTML.
     *
     * @return bool|null Returns the use HTML.
     */
    public function getUseHTML(): ?bool {
        return $this->useHTML;
    }

    /**
     * Get the vertical align.
     *
     * @return string|null Returns the vertical align.
     */
    public function getVerticalAlign(): ?string {
        return $this->verticalAlign;
    }

    /**
     * Get the width adjust.
     *
     * @return float|null Returns the width adjust.
     */
    public function getWidthAdjust(): ?float {
        return $this->widthAdjust;
    }

    /**
     * Get the x.
     *
     * @return float|null Returns the x.
     */
    public function getX(): ?float {
        return $this->x;
    }

    /**
     * Get the y.
     *
     * @return float|null Returns the y.
     */
    public function getY(): ?float {
        return $this->y;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {

        $output = [];

        ArrayHelper::set($output, "align", $this->align, [null]);
        ArrayHelper::set($output, "floating", $this->floating, [null]);
        ArrayHelper::set($output, "margin", $this->margin, [null]);
        ArrayHelper::set($output, "style", $this->style, [null]);
        ArrayHelper::set($output, "text", $this->text, [null]);
        ArrayHelper::set($output, "useHTML", $this->useHTML, [null]);
        ArrayHelper::set($output, "verticalAlign", $this->verticalAlign, [null]);
        ArrayHelper::set($output, "widthAdjust", $this->widthAdjust, [null]);
        ArrayHelper::set($output, "x", $this->x, [null]);
        ArrayHelper::set($output, "y", $this->y, [null]);

        return $output;
    }

    /**
     * Set the align.
     *
     * @param string|null $align The align.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsTitle Returns this highcharts title.
     */
    public function setAlign(?string $align): \WBW\Library\Highcharts\Model\Chart\HighchartsTitle {

        switch ($align) {

            case "center":
            case "left":
            case "right":
                $this->align = $align;
                break;
        }

        return $this;
    }

    /**
     * Set the floating.
     *
     * @param bool|null $floating The floating.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsTitle Returns this highcharts title.
     */
    public function setFloating(?bool $floating): \WBW\Library\Highcharts\Model\Chart\HighchartsTitle {
        $this->floating = $floating;
        return $this;
    }

    /**
     * Set the margin.
     *
     * @param float|null $margin The margin.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsTitle Returns this highcharts title.
     */
    public function setMargin(?float $margin): \WBW\Library\Highcharts\Model\Chart\HighchartsTitle {
        $this->margin = $margin;
        return $this;
    }

    /**
     * Set the style.
     *
     * @param mixed[]|null $style The style.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsTitle Returns this highcharts title.
     */
    public function setStyle(?array $style): \WBW\Library\Highcharts\Model\Chart\HighchartsTitle {
        $this->style = $style;
        return $this;
    }

    /**
     * Set the text.
     *
     * @param string|null $text The text.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsTitle Returns this highcharts title.
     */
    public function setText(?string $text): \WBW\Library\Highcharts\Model\Chart\HighchartsTitle {
        $this->text = $text;
        return $this;
    }

    /**
     * Set the use HTML.
     *
     * @param bool|null $useHTML The use HTML.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsTitle Returns this highcharts title.
     */
    public function setUseHTML(?bool $useHTML): \WBW\Library\Highcharts\Model\Chart\HighchartsTitle {
        $this->useHTML = $useHTML;
        return $this;
    }

    /**
     * Set the vertical align.
     *
     * @param string|null $verticalAlign The vertical align.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsTitle Returns this highcharts title.
     */
    public function setVerticalAlign(?string $verticalAlign): \WBW\Library\Highcharts\Model\Chart\HighchartsTitle {

        switch ($verticalAlign) {

            case "bottom":
            case "middle":
            case "top":
                $this->verticalAlign = $verticalAlign;
                break;
        }

        return $this;
    }

    /**
     * Set the width adjust.
     *
     * @param float|null $widthAdjust The width adjust.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsTitle Returns this highcharts title.
     */
    public function setWidthAdjust(?float $widthAdjust): \WBW\Library\Highcharts\Model\Chart\HighchartsTitle {
        $this->widthAdjust = $widthAdjust;
        return $this;
    }

    /**
     * Set the x.
     *
     * @param float|null $x The x.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsTitle Returns this highcharts title.
     */
    public function setX(?float $x): \WBW\Library\Highcharts\Model\Chart\HighchartsTitle {
        $this->x = $x;
        return $this;
    }

    /**
     * Set the y.
     *
     * @param float|null $y The y.
     * @return \WBW\Library\Highcharts\Model\Chart\HighchartsTitle Returns this highcharts title.
     */
    public function setY(?float $y): \WBW\Library\Highcharts\Model\Chart\HighchartsTitle {
        $this->y = $y;
        return $this;
    }
}
