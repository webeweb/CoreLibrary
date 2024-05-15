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

namespace WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel;

use JsonSerializable;
use WBW\Library\Common\Helper\ArrayHelper;

/**
 * Highcharts data labels.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel
 * @version 5.0.14
 */
class HighchartsDataLabels implements JsonSerializable {

    /**
     * Background color.
     *
     * @var string|null
     * @since 2.2.1
     */
    private $backgroundColor;

    /**
     * Border color.
     *
     * @var string|null
     * @since 2.2.1
     */
    private $borderColor;

    /**
     * Border radius.
     *
     * @var float|null
     * @since 2.2.1
     */
    private $borderRadius = 0;

    /**
     * Border width.
     *
     * @var float|null
     * @since 2.2.1
     */
    private $borderWidth = 0;

    /**
     * Class name.
     *
     * @var string|null
     * @since 5.0.0
     */
    private $className;

    /**
     * Color.
     *
     * @var string|null
     */
    private $color;

    /**
     * Connector color.
     *
     * @var string|null
     * @since 2.1
     */
    private $connectorColor = "{point.color}";

    /**
     * Connector padding.
     *
     * @var float|null
     * @since 2.1
     */
    private $connectorPadding = 5;

    /**
     * Connector width.
     *
     * @var float|null
     * @since 2.1
     */
    private $connectorWidth = 1;

    /**
     * Crop.
     *
     * @var bool|null
     * @since 2.3.3
     */
    private $crop = true;

    /**
     * Defer.
     *
     * @var bool|null
     * @since 4.0
     */
    private $defer = true;

    /**
     * Distance.
     *
     * @var float|null
     * @since 2.1
     */
    private $distance = 30;

    /**
     * Enabled.
     *
     * @var bool|null
     * @since 2.1
     */
    private $enabled = true;

    /**
     * Format.
     *
     * @var string|null
     * @since 3.0
     */
    private $format = "{y}";

    /**
     * Formatter.
     *
     * @var string|null
     */
    private $formatter;

    /**
     * Inside.
     *
     * @var bool|null
     * @since 3.0
     */
    private $inside;

    /**
     * Overflow.
     *
     * @var string|null
     * @since 3.0.6
     */
    private $overflow = "justify";

    /**
     * Padding.
     *
     * @var float|null
     * @since 2.2.1
     */
    private $padding = 5;

    /**
     * Rotation.
     *
     * @var float|null
     */
    private $rotation = 0;

    /**
     * Shadow.
     *
     * @var mixed|null
     * @since 2.2.1
     */
    private $shadow = "false";

    /**
     * Shape.
     *
     * @var string|null
     * @since 4.1.2
     */
    private $shape = "square";

    /**
     * Soft connector.
     *
     * @var bool|null
     * @since 2.1.7
     */
    private $softConnector = true;

    /**
     * Style.
     *
     * @var mixed[]|null
     * @since 4.1.0
     */
    private $style = ["color" => "contrast", "fontSize" => "11px", "fontWeight" => "bold", "textOutline" => "1px contrast"];

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
     * @since 2.3.3
     */
    private $verticalAlign;

    /**
     * X.
     *
     * @var float|null
     */
    private $x = 0;

    /**
     * Y.
     *
     * @var float|null
     */
    private $y = -6;

    /**
     * Z index.
     *
     * @var float|null
     * @since 2.3.5
     */
    private $zIndex = 6;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the background color.
     *
     * @return string|null Returns the background color.
     */
    public function getBackgroundColor(): ?string {
        return $this->backgroundColor;
    }

    /**
     * Get the border color.
     *
     * @return string|null Returns the border color.
     */
    public function getBorderColor(): ?string {
        return $this->borderColor;
    }

    /**
     * Get the border radius.
     *
     * @return float|null Returns the border radius.
     */
    public function getBorderRadius(): ?float {
        return $this->borderRadius;
    }

    /**
     * Get the border width.
     *
     * @return float|null Returns the border width.
     */
    public function getBorderWidth(): ?float {
        return $this->borderWidth;
    }

    /**
     * Get the class name.
     *
     * @return string|null Returns the class name.
     */
    public function getClassName(): ?string {
        return $this->className;
    }

    /**
     * Get the color.
     *
     * @return string|null Returns the color.
     */
    public function getColor(): ?string {
        return $this->color;
    }

    /**
     * Get the connector color.
     *
     * @return string|null Returns the connector color.
     */
    public function getConnectorColor(): ?string {
        return $this->connectorColor;
    }

    /**
     * Get the connector padding.
     *
     * @return float|null Returns the connector padding.
     */
    public function getConnectorPadding(): ?float {
        return $this->connectorPadding;
    }

    /**
     * Get the connector width.
     *
     * @return float|null Returns the connector width.
     */
    public function getConnectorWidth(): ?float {
        return $this->connectorWidth;
    }

    /**
     * Get the crop.
     *
     * @return bool|null Returns the crop.
     */
    public function getCrop(): ?bool {
        return $this->crop;
    }

    /**
     * Get the defer.
     *
     * @return bool|null Returns the defer.
     */
    public function getDefer(): ?bool {
        return $this->defer;
    }

    /**
     * Get the distance.
     *
     * @return float|null Returns the distance.
     */
    public function getDistance(): ?float {
        return $this->distance;
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
     * Get the format.
     *
     * @return string|null Returns the format.
     */
    public function getFormat(): ?string {
        return $this->format;
    }

    /**
     * Get the formatter.
     *
     * @return string|null Returns the formatter.
     */
    public function getFormatter(): ?string {
        return $this->formatter;
    }

    /**
     * Get the inside.
     *
     * @return bool|null Returns the inside.
     */
    public function getInside(): ?bool {
        return $this->inside;
    }

    /**
     * Get the overflow.
     *
     * @return string|null Returns the overflow.
     */
    public function getOverflow(): ?string {
        return $this->overflow;
    }

    /**
     * Get the padding.
     *
     * @return float|null Returns the padding.
     */
    public function getPadding(): ?float {
        return $this->padding;
    }

    /**
     * Get the rotation.
     *
     * @return float|null Returns the rotation.
     */
    public function getRotation(): ?float {
        return $this->rotation;
    }

    /**
     * Get the shadow.
     *
     * @return mixed Returns the shadow.
     */
    public function getShadow() {
        return $this->shadow;
    }

    /**
     * Get the shape.
     *
     * @return string|null Returns the shape.
     */
    public function getShape(): ?string {
        return $this->shape;
    }

    /**
     * Get the soft connector.
     *
     * @return bool|null Returns the soft connector.
     */
    public function getSoftConnector(): ?bool {
        return $this->softConnector;
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
     * Get the z index.
     *
     * @return float|null Returns the z index.
     */
    public function getZIndex(): ?float {
        return $this->zIndex;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {

        $output = [];

        ArrayHelper::set($output, "backgroundColor", $this->backgroundColor, [null]);
        ArrayHelper::set($output, "borderColor", $this->borderColor, [null]);
        ArrayHelper::set($output, "borderRadius", $this->borderRadius, [null]);
        ArrayHelper::set($output, "borderWidth", $this->borderWidth, [null]);
        ArrayHelper::set($output, "className", $this->className, [null]);
        ArrayHelper::set($output, "color", $this->color, [null]);
        ArrayHelper::set($output, "connectorColor", $this->connectorColor, [null]);
        ArrayHelper::set($output, "connectorPadding", $this->connectorPadding, [null]);
        ArrayHelper::set($output, "connectorWidth", $this->connectorWidth, [null]);
        ArrayHelper::set($output, "crop", $this->crop, [null]);
        ArrayHelper::set($output, "defer", $this->defer, [null]);
        ArrayHelper::set($output, "distance", $this->distance, [null]);
        ArrayHelper::set($output, "enabled", $this->enabled, [null]);
        ArrayHelper::set($output, "format", $this->format, [null]);
        ArrayHelper::set($output, "formatter", $this->formatter, [null]);
        ArrayHelper::set($output, "inside", $this->inside, [null]);
        ArrayHelper::set($output, "overflow", $this->overflow, [null]);
        ArrayHelper::set($output, "padding", $this->padding, [null]);
        ArrayHelper::set($output, "rotation", $this->rotation, [null]);
        ArrayHelper::set($output, "shadow", $this->shadow, [null]);
        ArrayHelper::set($output, "shape", $this->shape, [null]);
        ArrayHelper::set($output, "softConnector", $this->softConnector, [null]);
        ArrayHelper::set($output, "style", $this->style, [null]);
        ArrayHelper::set($output, "useHTML", $this->useHTML, [null]);
        ArrayHelper::set($output, "verticalAlign", $this->verticalAlign, [null]);
        ArrayHelper::set($output, "x", $this->x, [null]);
        ArrayHelper::set($output, "y", $this->y, [null]);
        ArrayHelper::set($output, "zIndex", $this->zIndex, [null]);

        return $output;
    }

    /**
     * Set the background color.
     *
     * @param string|null $backgroundColor The background color.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels Returns this highcharts data labels.
     */
    public function setBackgroundColor(?string $backgroundColor): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels {
        $this->backgroundColor = $backgroundColor;
        return $this;
    }

    /**
     * Set the border color.
     *
     * @param string|null $borderColor The border color.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels Returns this highcharts data labels.
     */
    public function setBorderColor(?string $borderColor): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels {
        $this->borderColor = $borderColor;
        return $this;
    }

    /**
     * Set the border radius.
     *
     * @param float|null $borderRadius The border radius.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels Returns this highcharts data labels.
     */
    public function setBorderRadius(?float $borderRadius): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels {
        $this->borderRadius = $borderRadius;
        return $this;
    }

    /**
     * Set the border width.
     *
     * @param float|null $borderWidth The border width.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels Returns this highcharts data labels.
     */
    public function setBorderWidth(?float $borderWidth): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels {
        $this->borderWidth = $borderWidth;
        return $this;
    }

    /**
     * Set the class name.
     *
     * @param string|null $className The class name.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels Returns this highcharts data labels.
     */
    public function setClassName(?string $className): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels {
        $this->className = $className;
        return $this;
    }

    /**
     * Set the color.
     *
     * @param string|null $color The color.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels Returns this highcharts data labels.
     */
    public function setColor(?string $color): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels {
        $this->color = $color;
        return $this;
    }

    /**
     * Set the connector color.
     *
     * @param string|null $connectorColor The connector color.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels Returns this highcharts data labels.
     */
    public function setConnectorColor(?string $connectorColor): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels {
        $this->connectorColor = $connectorColor;
        return $this;
    }

    /**
     * Set the connector padding.
     *
     * @param float|null $connectorPadding The connector padding.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels Returns this highcharts data labels.
     */
    public function setConnectorPadding(?float $connectorPadding): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels {
        $this->connectorPadding = $connectorPadding;
        return $this;
    }

    /**
     * Set the connector width.
     *
     * @param float|null $connectorWidth The connector width.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels Returns this highcharts data labels.
     */
    public function setConnectorWidth(?float $connectorWidth): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels {
        $this->connectorWidth = $connectorWidth;
        return $this;
    }

    /**
     * Set the crop.
     *
     * @param bool|null $crop The crop.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels Returns this highcharts data labels.
     */
    public function setCrop(?bool $crop): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels {
        $this->crop = $crop;
        return $this;
    }

    /**
     * Set the defer.
     *
     * @param bool|null $defer The defer.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels Returns this highcharts data labels.
     */
    public function setDefer(?bool $defer): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels {
        $this->defer = $defer;
        return $this;
    }

    /**
     * Set the distance.
     *
     * @param float|null $distance The distance.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels Returns this highcharts data labels.
     */
    public function setDistance(?float $distance): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels {
        $this->distance = $distance;
        return $this;
    }

    /**
     * Set the enabled.
     *
     * @param bool|null $enabled The enabled.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels Returns this highcharts data labels.
     */
    public function setEnabled(?bool $enabled): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * Set the format.
     *
     * @param string|null $format The format.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels Returns this highcharts data labels.
     */
    public function setFormat(?string $format): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels {
        $this->format = $format;
        return $this;
    }

    /**
     * Set the formatter.
     *
     * @param string|null $formatter The formatter.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels Returns this highcharts data labels.
     */
    public function setFormatter(?string $formatter): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels {
        $this->formatter = $formatter;
        return $this;
    }

    /**
     * Set the inside.
     *
     * @param bool|null $inside The inside.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels Returns this highcharts data labels.
     */
    public function setInside(?bool $inside): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels {
        $this->inside = $inside;
        return $this;
    }

    /**
     * Set the overflow.
     *
     * @param string|null $overflow The overflow.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels Returns this highcharts data labels.
     */
    public function setOverflow(?string $overflow): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels {

        switch ($overflow) {

            case "justify":
            case "none":
                $this->overflow = $overflow;
                break;
        }

        return $this;
    }

    /**
     * Set the padding.
     *
     * @param float|null $padding The padding.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels Returns this highcharts data labels.
     */
    public function setPadding(?float $padding): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels {
        $this->padding = $padding;
        return $this;
    }

    /**
     * Set the rotation.
     *
     * @param float|null $rotation The rotation.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels Returns this highcharts data labels.
     */
    public function setRotation(?float $rotation): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels {
        $this->rotation = $rotation;
        return $this;
    }

    /**
     * Set the shadow.
     *
     * @param mixed $shadow The shadow.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels Returns this highcharts data labels.
     */
    public function setShadow($shadow): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels {
        $this->shadow = $shadow;
        return $this;
    }

    /**
     * Set the shape.
     *
     * @param string|null $shape The shape.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels Returns this highcharts data labels.
     */
    public function setShape(?string $shape): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels {
        $this->shape = $shape;
        return $this;
    }

    /**
     * Set the soft connector.
     *
     * @param bool|null $softConnector The soft connector.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels Returns this highcharts data labels.
     */
    public function setSoftConnector(?bool $softConnector): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels {
        $this->softConnector = $softConnector;
        return $this;
    }

    /**
     * Set the style.
     *
     * @param mixed[]|null $style The style.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels Returns this highcharts data labels.
     */
    public function setStyle(?array $style): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels {
        $this->style = $style;
        return $this;
    }

    /**
     * Set the use HTML.
     *
     * @param bool|null $useHTML The use HTML.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels Returns this highcharts data labels.
     */
    public function setUseHTML(?bool $useHTML): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels {
        $this->useHTML = $useHTML;
        return $this;
    }

    /**
     * Set the vertical align.
     *
     * @param string|null $verticalAlign The vertical align.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels Returns this highcharts data labels.
     */
    public function setVerticalAlign(?string $verticalAlign): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels {

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
     * Set the x.
     *
     * @param float|null $x The x.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels Returns this highcharts data labels.
     */
    public function setX(?float $x): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels {
        $this->x = $x;
        return $this;
    }

    /**
     * Set the y.
     *
     * @param float|null $y The y.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels Returns this highcharts data labels.
     */
    public function setY(?float $y): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels {
        $this->y = $y;
        return $this;
    }

    /**
     * Set the z index.
     *
     * @param float|null $zIndex The z index.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels Returns this highcharts data labels.
     */
    public function setZIndex(?float $zIndex): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Funnel\HighchartsDataLabels {
        $this->zIndex = $zIndex;
        return $this;
    }
}
