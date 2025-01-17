<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

if (true === file_exists($file = __DIR__ . "/autoload.php")) {
    require_once $file;
} else if (true === file_exists($file = __DIR__ . "/autoload.php.dist")) {
    require_once $file;
}
