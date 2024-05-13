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

namespace WBW\Library\Highcharts\Model\Chart\Series\Treemap;

use JsonSerializable;
use WBW\Library\Common\Helper\ArrayHelper;

/**
 * Highcharts data.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Highcharts\Model\Chart\Series\Treemap
 * @version 5.0.14
 */
class HighchartsData implements JsonSerializable {

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
     * Color value.
     *
     * @var float|null
     * @since 4.1.0
     */
    private $colorValue;

    /**
     * Data labels.
     *
     * @var mixed[]|null
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
     * Drilldown.
     *
     * @var string|null
     * @since 3.0.8
     */
    private $drilldown;

    /**
     * Events.
     *
     * @var \WBW\Library\Highcharts\Model\Chart\Series\Treemap\Data\HighchartsEvents|null
     */
    private $events;

    /**
     * Id.
     *
     * @var string|null
     * @since 1.2.0
     */
    private $id;

    /**
     * Labelrank.
     *
     * @var float|null
     */
    private $labelrank;

    /**
     * Name.
     *
     * @var string|null
     */
    private $name;

    /**
     * Parent.
     *
     * @var string|null
     * @since 4.1.0
     */
    private $parent;

    /**
     * Selected.
     *
     * @var bool|null
     */
    private $selected = false;

    /**
     * Value.
     *
     * @var float|null
     */
    private $value;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
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
     * Get the color value.
     *
     * @return float|null Returns the color value.
     */
    public function getColorValue(): ?float {
        return $this->colorValue;
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
     * Get the drilldown.
     *
     * @return string|null Returns the drilldown.
     */
    public function getDrilldown(): ?string {
        return $this->drilldown;
    }

    /**
     * Get the events.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Treemap\Data\HighchartsEvents|null Returns the events.
     */
    public function getEvents(): ?\WBW\Library\Highcharts\Model\Chart\Series\Treemap\Data\HighchartsEvents {
        return $this->events;
    }

    /**
     * Get the id.
     *
     * @return string|null Returns the id.
     */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Get the labelrank.
     *
     * @return float|null Returns the labelrank.
     */
    public function getLabelrank(): ?float {
        return $this->labelrank;
    }

    /**
     * Get the name.
     *
     * @return string|null Returns the name.
     */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Get the parent.
     *
     * @return string|null Returns the parent.
     */
    public function getParent(): ?string {
        return $this->parent;
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
     * Get the value.
     *
     * @return float|null Returns the value.
     */
    public function getValue(): ?float {
        return $this->value;
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {

        $output = [];

        ArrayHelper::set($output, "className", $this->className, [null]);
        ArrayHelper::set($output, "color", $this->color, [null]);
        ArrayHelper::set($output, "colorIndex", $this->colorIndex, [null]);
        ArrayHelper::set($output, "colorValue", $this->colorValue, [null]);
        ArrayHelper::set($output, "dataLabels", $this->dataLabels, [null]);
        ArrayHelper::set($output, "description", $this->description, [null]);
        ArrayHelper::set($output, "drilldown", $this->drilldown, [null]);
        if (null !== $this->events) {
            ArrayHelper::set($output, "events", $this->events->jsonSerialize());
        }
        ArrayHelper::set($output, "id", $this->id, [null]);
        ArrayHelper::set($output, "labelrank", $this->labelrank, [null]);
        ArrayHelper::set($output, "name", $this->name, [null]);
        ArrayHelper::set($output, "parent", $this->parent, [null]);
        ArrayHelper::set($output, "selected", $this->selected, [null]);
        ArrayHelper::set($output, "value", $this->value, [null]);

        return $output;
    }

    /**
     * Create a new events.
     *
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Treemap\Data\HighchartsEvents Returns the events.
     */
    public function newEvents(): \WBW\Library\Highcharts\Model\Chart\Series\Treemap\Data\HighchartsEvents {
        $this->events = new \WBW\Library\Highcharts\Model\Chart\Series\Treemap\Data\HighchartsEvents();
        return $this->events;
    }

    /**
     * Set the class name.
     *
     * @param string|null $className The class name.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsData Returns this highcharts data.
     */
    public function setClassName(?string $className): \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsData {
        $this->className = $className;
        return $this;
    }

    /**
     * Set the color.
     *
     * @param string|null $color The color.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsData Returns this highcharts data.
     */
    public function setColor(?string $color): \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsData {
        $this->color = $color;
        return $this;
    }

    /**
     * Set the color index.
     *
     * @param float|null $colorIndex The color index.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsData Returns this highcharts data.
     */
    public function setColorIndex(?float $colorIndex): \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsData {
        $this->colorIndex = $colorIndex;
        return $this;
    }

    /**
     * Set the color value.
     *
     * @param float|null $colorValue The color value.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsData Returns this highcharts data.
     */
    public function setColorValue(?float $colorValue): \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsData {
        $this->colorValue = $colorValue;
        return $this;
    }

    /**
     * Set the data labels.
     *
     * @param mixed[]|null $dataLabels The data labels.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsData Returns this highcharts data.
     */
    public function setDataLabels(?array $dataLabels): \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsData {
        $this->dataLabels = $dataLabels;
        return $this;
    }

    /**
     * Set the description.
     *
     * @param string|null $description The description.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsData Returns this highcharts data.
     */
    public function setDescription(?string $description): \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsData {
        $this->description = $description;
        return $this;
    }

    /**
     * Set the drilldown.
     *
     * @param string|null $drilldown The drilldown.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsData Returns this highcharts data.
     */
    public function setDrilldown(?string $drilldown): \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsData {
        $this->drilldown = $drilldown;
        return $this;
    }

    /**
     * Set the events.
     *
     * @param \WBW\Library\Highcharts\Model\Chart\Series\Treemap\Data\HighchartsEvents|null $events The events.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsData Returns this highcharts data.
     */
    public function setEvents(?\WBW\Library\Highcharts\Model\Chart\Series\Treemap\Data\HighchartsEvents $events): \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsData {
        $this->events = $events;
        return $this;
    }

    /**
     * Set the id.
     *
     * @param string|null $id The id.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsData Returns this highcharts data.
     */
    public function setId(?string $id): \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsData {
        $this->id = $id;
        return $this;
    }

    /**
     * Set the labelrank.
     *
     * @param float|null $labelrank The labelrank.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsData Returns this highcharts data.
     */
    public function setLabelrank(?float $labelrank): \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsData {
        $this->labelrank = $labelrank;
        return $this;
    }

    /**
     * Set the name.
     *
     * @param string|null $name The name.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsData Returns this highcharts data.
     */
    public function setName(?string $name): \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsData {
        $this->name = $name;
        return $this;
    }

    /**
     * Set the parent.
     *
     * @param string|null $parent The parent.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsData Returns this highcharts data.
     */
    public function setParent(?string $parent): \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsData {
        $this->parent = $parent;
        return $this;
    }

    /**
     * Set the selected.
     *
     * @param bool|null $selected The selected.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsData Returns this highcharts data.
     */
    public function setSelected(?bool $selected): \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsData {
        $this->selected = $selected;
        return $this;
    }

    /**
     * Set the value.
     *
     * @param float|null $value The value.
     * @return \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsData Returns this highcharts data.
     */
    public function setValue(?float $value): \WBW\Library\Highcharts\Model\Chart\Series\Treemap\HighchartsData {
        $this->value = $value;
        return $this;
    }
}
