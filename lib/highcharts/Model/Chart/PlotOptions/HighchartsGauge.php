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

namespace WBW\Library\Highcharts\Model\Chart\PlotOptions;

use JsonSerializable;
use WBW\Library\Common\Helper\ArrayHelper;

/**
 * Highcharts gauge.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart\PlotOptions
 * @version 5.0.14
 */
class HighchartsGauge implements JsonSerializable {

    /**
     * Animation.
     *
     * @var bool|null
     */
    private $animation = true;

    /**
     * Animation limit.
     *
     * @var float|null
     */
    private $animationLimit;

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
     * Color index.
     *
     * @var float|null
     * @since 5.0.0
     */
    private $colorIndex;

    /**
     * Cursor.
     *
     * @var string|null
     */
    private $cursor;

    /**
     * Data labels.
     *
     * @var mixed[]|null
     * @since 2.3.0
     */
    private $dataLabels;

    /**
     * Description.
     *
     * @var string|null
     * @since 5.0.0
     */
    private $description;

    /**
     * Dial.
     *
     * @var mixed[]|null
     * @since 2.3.0
     */
    private $dial;

    /**
     * Enable mouse tracking.
     *
     * @var bool|null
     */
    private $enableMouseTracking = true;

    /**
     * Events.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\PlotOptions\Gauge\HighchartsEvents|null
     */
    private $events;

    /**
     * Expose element to a11y.
     *
     * @var bool|null
     * @since 5.0.12
     */
    private $exposeElementToA11y;

    /**
     * Find nearest point by.
     *
     * @var string|null
     * @since 5.0.10
     */
    private $findNearestPointBy;

    /**
     * Get extremes from all.
     *
     * @var bool|null
     * @since 4.1.6
     */
    private $getExtremesFromAll = false;

    /**
     * Keys.
     *
     * @var mixed[]|null
     * @since 4.1.6
     */
    private $keys;

    /**
     * Linked to.
     *
     * @var string|null
     * @since 3.0
     */
    private $linkedTo;

    /**
     * Negative color.
     *
     * @var string|null
     * @since 3.0
     */
    private $negativeColor;

    /**
     * Overshoot.
     *
     * @var float|null
     * @since 3.0.10
     */
    private $overshoot = 0;

    /**
     * Pivot.
     *
     * @var mixed[]|null
     * @since 2.3.0
     */
    private $pivot;

    /**
     * Point.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\PlotOptions\Gauge\HighchartsPoint|null
     */
    private $point;

    /**
     * Point description formatter.
     *
     * @var string|null
     * @since 5.0.12
     */
    private $pointDescriptionFormatter;

    /**
     * Selected.
     *
     * @var bool|null
     * @since 1.2.0
     */
    private $selected = false;

    /**
     * Show checkbox.
     *
     * @var bool|null
     * @since 1.2.0
     */
    private $showCheckbox = false;

    /**
     * Show in legend.
     *
     * @var bool|null
     * @since 2.3.0
     */
    private $showInLegend;

    /**
     * Skip keyboard navigation.
     *
     * @var bool|null
     * @since 5.0.12
     */
    private $skipKeyboardNavigation;

    /**
     * Sticky tracking.
     *
     * @var bool|null
     * @since 2.0
     */
    private $stickyTracking = true;

    /**
     * Threshold.
     *
     * @var float|null
     * @since 3.0
     */
    private $threshold = 0;

    /**
     * Tooltip.
     *
     * @var mixed[]|null
     * @since 2.3
     */
    private $tooltip;

    /**
     * Visible.
     *
     * @var bool|null
     */
    private $visible = true;

    /**
     * Wrap.
     *
     * @var bool|null
     * @since 3.0
     */
    private $wrap = true;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the animation.
     *
     * @return bool|null Returns the animation.
     */
    public function getAnimation(): ?bool {
        return $this->animation;
    }

    /**
     * Get the animation limit.
     *
     * @return float|null Returns the animation limit.
     */
    public function getAnimationLimit(): ?float {
        return $this->animationLimit;
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
     * Get the color index.
     *
     * @return float|null Returns the color index.
     */
    public function getColorIndex(): ?float {
        return $this->colorIndex;
    }

    /**
     * Get the cursor.
     *
     * @return string|null Returns the cursor.
     */
    public function getCursor(): ?string {
        return $this->cursor;
    }

    /**
     * Get the data labels.
     *
     * @return mixed[]|null Returns the data labels.
     */
    public function getDataLabels(): ?array {
        return $this->dataLabels;
    }

    /**
     * Get the description.
     *
     * @return string|null Returns the description.
     */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Get the dial.
     *
     * @return mixed[]|null Returns the dial.
     */
    public function getDial(): ?array {
        return $this->dial;
    }

    /**
     * Get the enable mouse tracking.
     *
     * @return bool|null Returns the enable mouse tracking.
     */
    public function getEnableMouseTracking(): ?bool {
        return $this->enableMouseTracking;
    }

    /**
     * Get the events.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Gauge\HighchartsEvents|null Returns the events.
     */
    public function getEvents(): ?\WBW\Library\Highcharts\Model\Chart\PlotOptions\Gauge\HighchartsEvents {
        return $this->events;
    }

    /**
     * Get the expose element to a11y.
     *
     * @return bool|null Returns the expose element to a11y.
     */
    public function getExposeElementToA11y(): ?bool {
        return $this->exposeElementToA11y;
    }

    /**
     * Get the find nearest point by.
     *
     * @return string|null Returns the find nearest point by.
     */
    public function getFindNearestPointBy(): ?string {
        return $this->findNearestPointBy;
    }

    /**
     * Get the get extremes from all.
     *
     * @return bool|null Returns the get extremes from all.
     */
    public function getGetExtremesFromAll(): ?bool {
        return $this->getExtremesFromAll;
    }

    /**
     * Get the keys.
     *
     * @return mixed[]|null Returns the keys.
     */
    public function getKeys(): ?array {
        return $this->keys;
    }

    /**
     * Get the linked to.
     *
     * @return string|null Returns the linked to.
     */
    public function getLinkedTo(): ?string {
        return $this->linkedTo;
    }

    /**
     * Get the negative color.
     *
     * @return string|null Returns the negative color.
     */
    public function getNegativeColor(): ?string {
        return $this->negativeColor;
    }

    /**
     * Get the overshoot.
     *
     * @return float|null Returns the overshoot.
     */
    public function getOvershoot(): ?float {
        return $this->overshoot;
    }

    /**
     * Get the pivot.
     *
     * @return mixed[]|null Returns the pivot.
     */
    public function getPivot(): ?array {
        return $this->pivot;
    }

    /**
     * Get the point.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Gauge\HighchartsPoint|null Returns the point.
     */
    public function getPoint(): ?\WBW\Library\Highcharts\Model\Chart\PlotOptions\Gauge\HighchartsPoint {
        return $this->point;
    }

    /**
     * Get the point description formatter.
     *
     * @return string|null Returns the point description formatter.
     */
    public function getPointDescriptionFormatter(): ?string {
        return $this->pointDescriptionFormatter;
    }

    /**
     * Get the selected.
     *
     * @return bool|null Returns the selected.
     */
    public function getSelected(): ?bool {
        return $this->selected;
    }

    /**
     * Get the show checkbox.
     *
     * @return bool|null Returns the show checkbox.
     */
    public function getShowCheckbox(): ?bool {
        return $this->showCheckbox;
    }

    /**
     * Get the show in legend.
     *
     * @return bool|null Returns the show in legend.
     */
    public function getShowInLegend(): ?bool {
        return $this->showInLegend;
    }

    /**
     * Get the skip keyboard navigation.
     *
     * @return bool|null Returns the skip keyboard navigation.
     */
    public function getSkipKeyboardNavigation(): ?bool {
        return $this->skipKeyboardNavigation;
    }

    /**
     * Get the sticky tracking.
     *
     * @return bool|null Returns the sticky tracking.
     */
    public function getStickyTracking(): ?bool {
        return $this->stickyTracking;
    }

    /**
     * Get the threshold.
     *
     * @return float|null Returns the threshold.
     */
    public function getThreshold(): ?float {
        return $this->threshold;
    }

    /**
     * Get the tooltip.
     *
     * @return mixed[]|null Returns the tooltip.
     */
    public function getTooltip(): ?array {
        return $this->tooltip;
    }

    /**
     * Get the visible.
     *
     * @return bool|null Returns the visible.
     */
    public function getVisible(): ?bool {
        return $this->visible;
    }

    /**
     * Get the wrap.
     *
     * @return bool|null Returns the wrap.
     */
    public function getWrap(): ?bool {
        return $this->wrap;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {

        $output = [];

        ArrayHelper::set($output, "animation", $this->animation, [null]);
        ArrayHelper::set($output, "animationLimit", $this->animationLimit, [null]);
        ArrayHelper::set($output, "className", $this->className, [null]);
        ArrayHelper::set($output, "color", $this->color, [null]);
        ArrayHelper::set($output, "colorIndex", $this->colorIndex, [null]);
        ArrayHelper::set($output, "cursor", $this->cursor, [null]);
        ArrayHelper::set($output, "dataLabels", $this->dataLabels, [null]);
        ArrayHelper::set($output, "description", $this->description, [null]);
        ArrayHelper::set($output, "dial", $this->dial, [null]);
        ArrayHelper::set($output, "enableMouseTracking", $this->enableMouseTracking, [null]);
        if (null !== $this->events) {
            ArrayHelper::set($output, "events", $this->events->jsonSerialize());
        }
        ArrayHelper::set($output, "exposeElementToA11y", $this->exposeElementToA11y, [null]);
        ArrayHelper::set($output, "findNearestPointBy", $this->findNearestPointBy, [null]);
        ArrayHelper::set($output, "getExtremesFromAll", $this->getExtremesFromAll, [null]);
        ArrayHelper::set($output, "keys", $this->keys, [null]);
        ArrayHelper::set($output, "linkedTo", $this->linkedTo, [null]);
        ArrayHelper::set($output, "negativeColor", $this->negativeColor, [null]);
        ArrayHelper::set($output, "overshoot", $this->overshoot, [null]);
        ArrayHelper::set($output, "pivot", $this->pivot, [null]);
        if (null !== $this->point) {
            ArrayHelper::set($output, "point", $this->point->jsonSerialize());
        }
        ArrayHelper::set($output, "pointDescriptionFormatter", $this->pointDescriptionFormatter, [null]);
        ArrayHelper::set($output, "selected", $this->selected, [null]);
        ArrayHelper::set($output, "showCheckbox", $this->showCheckbox, [null]);
        ArrayHelper::set($output, "showInLegend", $this->showInLegend, [null]);
        ArrayHelper::set($output, "skipKeyboardNavigation", $this->skipKeyboardNavigation, [null]);
        ArrayHelper::set($output, "stickyTracking", $this->stickyTracking, [null]);
        ArrayHelper::set($output, "threshold", $this->threshold, [null]);
        ArrayHelper::set($output, "tooltip", $this->tooltip, [null]);
        ArrayHelper::set($output, "visible", $this->visible, [null]);
        ArrayHelper::set($output, "wrap", $this->wrap, [null]);

        return $output;
    }

    /**
     * Create a new events.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Gauge\HighchartsEvents Returns the events.
     */
    public function newEvents(): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Gauge\HighchartsEvents {
        $this->events = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Gauge\HighchartsEvents();
        return $this->events;
    }

    /**
     * Create a new point.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\Gauge\HighchartsPoint Returns the point.
     */
    public function newPoint(): \WBW\Library\Highcharts\Model\Chart\PlotOptions\Gauge\HighchartsPoint {
        $this->point = new \WBW\Library\Highcharts\Model\Chart\PlotOptions\Gauge\HighchartsPoint();
        return $this->point;
    }

    /**
     * Set the animation.
     *
     * @param bool|null $animation The animation.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge Returns this highcharts gauge.
     */
    public function setAnimation(?bool $animation): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge {
        $this->animation = $animation;
        return $this;
    }

    /**
     * Set the animation limit.
     *
     * @param float|null $animationLimit The animation limit.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge Returns this highcharts gauge.
     */
    public function setAnimationLimit(?float $animationLimit): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge {
        $this->animationLimit = $animationLimit;
        return $this;
    }

    /**
     * Set the class name.
     *
     * @param string|null $className The class name.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge Returns this highcharts gauge.
     */
    public function setClassName(?string $className): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge {
        $this->className = $className;
        return $this;
    }

    /**
     * Set the color.
     *
     * @param string|null $color The color.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge Returns this highcharts gauge.
     */
    public function setColor(?string $color): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge {
        $this->color = $color;
        return $this;
    }

    /**
     * Set the color index.
     *
     * @param float|null $colorIndex The color index.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge Returns this highcharts gauge.
     */
    public function setColorIndex(?float $colorIndex): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge {
        $this->colorIndex = $colorIndex;
        return $this;
    }

    /**
     * Set the cursor.
     *
     * @param string|null $cursor The cursor.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge Returns this highcharts gauge.
     */
    public function setCursor(?string $cursor): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge {

        switch ($cursor) {

            case null:
            case "crosshair":
            case "default":
            case "help":
            case "none":
            case "pointer":
                $this->cursor = $cursor;
                break;
        }

        return $this;
    }

    /**
     * Set the data labels.
     *
     * @param mixed[]|null $dataLabels The data labels.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge Returns this highcharts gauge.
     */
    public function setDataLabels(?array $dataLabels): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge {
        $this->dataLabels = $dataLabels;
        return $this;
    }

    /**
     * Set the description.
     *
     * @param string|null $description The description.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge Returns this highcharts gauge.
     */
    public function setDescription(?string $description): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge {
        $this->description = $description;
        return $this;
    }

    /**
     * Set the dial.
     *
     * @param mixed[]|null $dial The dial.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge Returns this highcharts gauge.
     */
    public function setDial(?array $dial): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge {
        $this->dial = $dial;
        return $this;
    }

    /**
     * Set the enable mouse tracking.
     *
     * @param bool|null $enableMouseTracking The enable mouse tracking.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge Returns this highcharts gauge.
     */
    public function setEnableMouseTracking(?bool $enableMouseTracking): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge {
        $this->enableMouseTracking = $enableMouseTracking;
        return $this;
    }

    /**
     * Set the events.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\PlotOptions\Gauge\HighchartsEvents|null $events The events.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge Returns this highcharts gauge.
     */
    public function setEvents(?\WBW\Library\Highcharts\Model\Chart\PlotOptions\Gauge\HighchartsEvents $events): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge {
        $this->events = $events;
        return $this;
    }

    /**
     * Set the expose element to a11y.
     *
     * @param bool|null $exposeElementToA11y The expose element to a11y.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge Returns this highcharts gauge.
     */
    public function setExposeElementToA11y(?bool $exposeElementToA11y): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge {
        $this->exposeElementToA11y = $exposeElementToA11y;
        return $this;
    }

    /**
     * Set the find nearest point by.
     *
     * @param string|null $findNearestPointBy The find nearest point by.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge Returns this highcharts gauge.
     */
    public function setFindNearestPointBy(?string $findNearestPointBy): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge {

        switch ($findNearestPointBy) {

            case "x":
            case "xy":
                $this->findNearestPointBy = $findNearestPointBy;
                break;
        }

        return $this;
    }

    /**
     * Set the get extremes from all.
     *
     * @param bool|null $getExtremesFromAll The get extremes from all.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge Returns this highcharts gauge.
     */
    public function setGetExtremesFromAll(?bool $getExtremesFromAll): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge {
        $this->getExtremesFromAll = $getExtremesFromAll;
        return $this;
    }

    /**
     * Set the keys.
     *
     * @param mixed[]|null $keys The keys.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge Returns this highcharts gauge.
     */
    public function setKeys(?array $keys): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge {
        $this->keys = $keys;
        return $this;
    }

    /**
     * Set the linked to.
     *
     * @param string|null $linkedTo The linked to.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge Returns this highcharts gauge.
     */
    public function setLinkedTo(?string $linkedTo): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge {
        $this->linkedTo = $linkedTo;
        return $this;
    }

    /**
     * Set the negative color.
     *
     * @param string|null $negativeColor The negative color.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge Returns this highcharts gauge.
     */
    public function setNegativeColor(?string $negativeColor): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge {
        $this->negativeColor = $negativeColor;
        return $this;
    }

    /**
     * Set the overshoot.
     *
     * @param float|null $overshoot The overshoot.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge Returns this highcharts gauge.
     */
    public function setOvershoot(?float $overshoot): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge {
        $this->overshoot = $overshoot;
        return $this;
    }

    /**
     * Set the pivot.
     *
     * @param mixed[]|null $pivot The pivot.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge Returns this highcharts gauge.
     */
    public function setPivot(?array $pivot): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge {
        $this->pivot = $pivot;
        return $this;
    }

    /**
     * Set the point.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\PlotOptions\Gauge\HighchartsPoint|null $point The point.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge Returns this highcharts gauge.
     */
    public function setPoint(?\WBW\Library\Highcharts\Model\Chart\PlotOptions\Gauge\HighchartsPoint $point): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge {
        $this->point = $point;
        return $this;
    }

    /**
     * Set the point description formatter.
     *
     * @param string|null $pointDescriptionFormatter The point description formatter.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge Returns this highcharts gauge.
     */
    public function setPointDescriptionFormatter(?string $pointDescriptionFormatter): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge {
        $this->pointDescriptionFormatter = $pointDescriptionFormatter;
        return $this;
    }

    /**
     * Set the selected.
     *
     * @param bool|null $selected The selected.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge Returns this highcharts gauge.
     */
    public function setSelected(?bool $selected): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge {
        $this->selected = $selected;
        return $this;
    }

    /**
     * Set the show checkbox.
     *
     * @param bool|null $showCheckbox The show checkbox.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge Returns this highcharts gauge.
     */
    public function setShowCheckbox(?bool $showCheckbox): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge {
        $this->showCheckbox = $showCheckbox;
        return $this;
    }

    /**
     * Set the show in legend.
     *
     * @param bool|null $showInLegend The show in legend.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge Returns this highcharts gauge.
     */
    public function setShowInLegend(?bool $showInLegend): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge {
        $this->showInLegend = $showInLegend;
        return $this;
    }

    /**
     * Set the skip keyboard navigation.
     *
     * @param bool|null $skipKeyboardNavigation The skip keyboard navigation.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge Returns this highcharts gauge.
     */
    public function setSkipKeyboardNavigation(?bool $skipKeyboardNavigation): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge {
        $this->skipKeyboardNavigation = $skipKeyboardNavigation;
        return $this;
    }

    /**
     * Set the sticky tracking.
     *
     * @param bool|null $stickyTracking The sticky tracking.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge Returns this highcharts gauge.
     */
    public function setStickyTracking(?bool $stickyTracking): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge {
        $this->stickyTracking = $stickyTracking;
        return $this;
    }

    /**
     * Set the threshold.
     *
     * @param float|null $threshold The threshold.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge Returns this highcharts gauge.
     */
    public function setThreshold(?float $threshold): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge {
        $this->threshold = $threshold;
        return $this;
    }

    /**
     * Set the tooltip.
     *
     * @param mixed[]|null $tooltip The tooltip.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge Returns this highcharts gauge.
     */
    public function setTooltip(?array $tooltip): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge {
        $this->tooltip = $tooltip;
        return $this;
    }

    /**
     * Set the visible.
     *
     * @param bool|null $visible The visible.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge Returns this highcharts gauge.
     */
    public function setVisible(?bool $visible): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge {
        $this->visible = $visible;
        return $this;
    }

    /**
     * Set the wrap.
     *
     * @param bool|null $wrap The wrap.
     * @return \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge Returns this highcharts gauge.
     */
    public function setWrap(?bool $wrap): \WBW\Library\Highcharts\Model\Chart\PlotOptions\HighchartsGauge {
        $this->wrap = $wrap;
        return $this;
    }
}
