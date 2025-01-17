<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Widget\Tests\Serializer\Component;

use WBW\Library\Common\Serializer\SerializerKeys as BaseSerializerKeys;
use WBW\Library\Widget\Component\AlertInterface;
use WBW\Library\Widget\Component\BadgeInterface;
use WBW\Library\Widget\Component\ButtonInterface;
use WBW\Library\Widget\Component\ColorInterface;
use WBW\Library\Widget\Component\DropdownItemInterface;
use WBW\Library\Widget\Component\IconInterface;
use WBW\Library\Widget\Component\LabelInterface;
use WBW\Library\Widget\Component\NavigationNodeInterface;
use WBW\Library\Widget\Component\NotificationInterface;
use WBW\Library\Widget\Component\ProgressBarInterface;
use WBW\Library\Widget\Component\ToastInterface;
use WBW\Library\Widget\Serializer\Component\JsonSerializer;
use WBW\Library\Widget\Serializer\SerializerKeys;
use WBW\Library\Widget\Tests\AbstractTestCase;

/**
 * JSON serializer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Serializer\Component
 */
class JsonSerializerTest extends AbstractTestCase {

    /**
     * Test serializeAlert()
     *
     * @return void
     */
    public function testSerializeAlert(): void {

        // Set an Alert mock.
        $model = $this->getMockBuilder(AlertInterface::class)->getMock();
        $model->expects($this->any())->method("getContent")->willReturn(BaseSerializerKeys::CONTENT);
        $model->expects($this->any())->method("getType")->willReturn(BaseSerializerKeys::TYPE);

        $res = JsonSerializer::serializeAlert($model);
        $this->assertCount(2, $res);

        $this->assertEquals($model->getContent(), $res[BaseSerializerKeys::CONTENT]);
        $this->assertEquals($model->getType(), $res[BaseSerializerKeys::TYPE]);
    }

    /**
     * Test serializeBadge()
     *
     * @return void
     */
    public function testSerializeBadge(): void {

        // Set a Badge mock.
        $model = $this->getMockBuilder(BadgeInterface::class)->getMock();
        $model->expects($this->any())->method("getContent")->willReturn(BaseSerializerKeys::CONTENT);
        $model->expects($this->any())->method("getType")->willReturn(BaseSerializerKeys::TYPE);

        $res = JsonSerializer::serializeBadge($model);
        $this->assertCount(2, $res);

        $this->assertEquals($model->getContent(), $res[BaseSerializerKeys::CONTENT]);
        $this->assertEquals($model->getType(), $res[BaseSerializerKeys::TYPE]);
    }

    /**
     * Test serializeButton()
     *
     * @return void
     */
    public function testSerializeButton(): void {

        // Set a Button mock.
        $model = $this->getMockBuilder(ButtonInterface::class)->getMock();
        $model->expects($this->any())->method("getContent")->willReturn(BaseSerializerKeys::CONTENT);
        $model->expects($this->any())->method("getType")->willReturn(BaseSerializerKeys::TYPE);

        $res = JsonSerializer::serializeButton($model);
        $this->assertCount(2, $res);

        $this->assertEquals($model->getContent(), $res[BaseSerializerKeys::CONTENT]);
        $this->assertEquals($model->getType(), $res[BaseSerializerKeys::TYPE]);
    }

    /**
     * Test serializeColor()
     *
     * @return void
     */
    public function testSerializeColor(): void {

        // Set a Color mock.
        $model = $this->getMockBuilder(ColorInterface::class)->getMock();
        $model->expects($this->any())->method("getName")->willReturn(BaseSerializerKeys::NAME);
        $model->expects($this->any())->method("getValues")->willReturn([]);

        $res = JsonSerializer::serializeColor($model);
        $this->assertCount(2, $res);

        $this->assertEquals($model->getName(), $res[BaseSerializerKeys::NAME]);
        $this->assertEquals($model->getValues(), $res[BaseSerializerKeys::VALUE . "s"]);
    }

    /**
     * Test serializeDropdownItem()
     *
     * @return void
     */
    public function testSerializeDropdownItem(): void {

        // Set a Dropdown item mock.
        $model = $this->getMockBuilder(DropdownItemInterface::class)->getMock();
        $model->expects($this->any())->method("getByDefault")->willReturn(true);
        $model->expects($this->any())->method("getLabel")->willReturn(BaseSerializerKeys::LABEL);
        $model->expects($this->any())->method("getPosition")->willReturn(1);

        $res = JsonSerializer::serializeDropdownItem($model);
        $this->assertCount(3, $res);

        $this->assertEquals($model->getByDefault(), $res[SerializerKeys::BY_DEFAULT]);
        $this->assertEquals($model->getLabel(), $res[BaseSerializerKeys::LABEL]);
        $this->assertEquals($model->getPosition(), $res[BaseSerializerKeys::POSITION]);
    }

    /**
     * Test serializeIcon()
     *
     * @return void
     */
    public function testSerializeIcon(): void {

        // Set an Icon mock.
        $model = $this->getMockBuilder(IconInterface::class)->getMock();
        $model->expects($this->any())->method("getName")->willReturn(BaseSerializerKeys::NAME);
        $model->expects($this->any())->method("getStyle")->willReturn(BaseSerializerKeys::STYLE);

        $res = JsonSerializer::serializeIcon($model);
        $this->assertCount(2, $res);

        $this->assertEquals($model->getName(), $res[BaseSerializerKeys::NAME]);
        $this->assertEquals($model->getStyle(), $res[BaseSerializerKeys::STYLE]);
    }

    /**
     * Test serializeLabel()
     *
     * @return void
     */
    public function testSerializeLabel(): void {

        // Set a Label mock.
        $model = $this->getMockBuilder(LabelInterface::class)->getMock();
        $model->expects($this->any())->method("getContent")->willReturn(BaseSerializerKeys::CONTENT);
        $model->expects($this->any())->method("getType")->willReturn(BaseSerializerKeys::TYPE);

        $res = JsonSerializer::serializeLabel($model);
        $this->assertCount(2, $res);

        $this->assertEquals($model->getContent(), $res[BaseSerializerKeys::CONTENT]);
        $this->assertEquals($model->getType(), $res[BaseSerializerKeys::TYPE]);
    }

    /**
     * Test serializeNavigationNode()
     *
     * @return void
     */
    public function testSerializeNavigationNode(): void {

        // Set a parent mock.
        $parent = $this->getMockBuilder(NavigationNodeInterface::class)->getMock();
        $parent->expects($this->any())->method("jsonSerialize")->willReturn(JsonSerializer::serializeNavigationNode($parent));

        // Set a Navigation node mock.
        $model = $this->getMockBuilder(NavigationNodeInterface::class)->getMock();
        $model->expects($this->any())->method("getId")->willReturn(BaseSerializerKeys::ID);
        $model->expects($this->any())->method("getActive")->willReturn(true);
        $model->expects($this->any())->method("getEnable")->willReturn(false);
        $model->expects($this->any())->method("getIcon")->willReturn(BaseSerializerKeys::ICON);
        $model->expects($this->any())->method("getLabel")->willReturn(BaseSerializerKeys::LABEL);
        $model->expects($this->any())->method("getMatcher")->willReturn(SerializerKeys::MATCHER);
        $model->expects($this->any())->method("getParent")->willReturn($parent);
        $model->expects($this->any())->method("getTarget")->willReturn(BaseSerializerKeys::TARGET);
        $model->expects($this->any())->method("getUri")->willReturn(BaseSerializerKeys::URI);
        $model->expects($this->any())->method("getVisible")->willReturn(null);

        $res = JsonSerializer::serializeNavigationNode($model);
        $this->assertCount(10, $res);

        $this->assertEquals($model->getId(), $res[BaseSerializerKeys::ID]);
        $this->assertEquals($model->getActive(), $res[BaseSerializerKeys::ACTIVE]);
        $this->assertEquals($model->getEnable(), $res[BaseSerializerKeys::ENABLE]);
        $this->assertEquals($model->getIcon(), $res[BaseSerializerKeys::ICON]);
        $this->assertEquals($model->getLabel(), $res[BaseSerializerKeys::LABEL]);
        $this->assertEquals($model->getMatcher(), $res[SerializerKeys::MATCHER]);
        $this->assertIsArray($res[BaseSerializerKeys::PARENT]);
        $this->assertEquals($model->getTarget(), $res[BaseSerializerKeys::TARGET]);
        $this->assertEquals($model->getUri(), $res[BaseSerializerKeys::URI]);
        $this->assertEquals($model->getVisible(), $res[BaseSerializerKeys::VISIBLE]);
    }

    /**
     * Test serializeNotification()
     *
     * @return void
     */
    public function testSerializeNotification(): void {

        // Set a Notification mock.
        $model = $this->getMockBuilder(NotificationInterface::class)->getMock();
        $model->expects($this->any())->method("getContent")->willReturn(BaseSerializerKeys::CONTENT);
        $model->expects($this->any())->method("getType")->willReturn(BaseSerializerKeys::TYPE);

        $res = JsonSerializer::serializeNotification($model);
        $this->assertCount(2, $res);

        $this->assertEquals($model->getContent(), $res[BaseSerializerKeys::CONTENT]);
        $this->assertEquals($model->getType(), $res[BaseSerializerKeys::TYPE]);
    }

    /**
     * Test serializeProgressBar()
     *
     * @return void
     */
    public function testSerializeProgressBar(): void {

        // Set a Progress bar mock.
        $model = $this->getMockBuilder(ProgressBarInterface::class)->getMock();
        $model->expects($this->any())->method("getContent")->willReturn(BaseSerializerKeys::CONTENT);
        $model->expects($this->any())->method("getType")->willReturn(BaseSerializerKeys::TYPE);

        $res = JsonSerializer::serializeProgressBar($model);
        $this->assertCount(2, $res);

        $this->assertEquals($model->getContent(), $res[BaseSerializerKeys::CONTENT]);
        $this->assertEquals($model->getType(), $res[BaseSerializerKeys::TYPE]);
    }

    /**
     * Test serializeToast()
     *
     * @return void
     */
    public function testSerializeToast(): void {

        // Set a Toast mock.
        $model = $this->getMockBuilder(ToastInterface::class)->getMock();
        $model->expects($this->any())->method("getContent")->willReturn(BaseSerializerKeys::CONTENT);
        $model->expects($this->any())->method("getType")->willReturn(BaseSerializerKeys::TYPE);

        $res = JsonSerializer::serializeToast($model);
        $this->assertCount(2, $res);

        $this->assertEquals($model->getContent(), $res[BaseSerializerKeys::CONTENT]);
        $this->assertEquals($model->getType(), $res[BaseSerializerKeys::TYPE]);
    }
}
