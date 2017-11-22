<?php
/**
 * This file is part of the core-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Exception\Hook;

use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Exception\Hook\HookMethodNotFoundException;

/**
 * Hook method not found exception test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Exception\Hook
 * @final
 */
final class HookMethodNotFoundExceptionTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 */
	public function testConstruct() {

		$ex = new HookMethodNotFoundException("exception");

		$res = "The hook method \"exception\" is not found";
		$this->assertEquals($res, $ex->getMessage());
	}

}
