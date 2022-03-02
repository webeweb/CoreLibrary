<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Provider\Assets\Theme;

use WBW\Library\Symfony\Provider\Assets\Theme\TasksDropdownThemeProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Provider\Assets\Theme\TestTasksDropdownThemeProviderTrait;

/**
 * Tasks dropdown theme provider trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider\Assets\Theme
 */
class TasksDropdownThemeProviderTraitTest extends AbstractTestCase {

    /**
     * Tests setTasksDropdownThemeProvider()
     *
     * @return void
     */
    public function testSetTasksDropdownThemeProvider(): void {

        // Set a Tasks dropdown theme provider mock.
        $tasksDropdownThemeProvider = $this->getMockBuilder(TasksDropdownThemeProviderInterface::class)->getMock();

        $obj = new TestTasksDropdownThemeProviderTrait();

        $obj->setTasksDropdownThemeProvider($tasksDropdownThemeProvider);
        $this->assertSame($tasksDropdownThemeProvider, $obj->getTasksDropdownThemeProvider());
    }
}
