<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Widget\Component\Notification;

use WBW\Library\Widget\Component\AbstractNotification;

/**
 * Danger notification.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Component\Notification
 */
class DangerNotification extends AbstractNotification {

    /**
     * Constructor.
     *
     * @param string $content The content.
     */
    public function __construct(string $content) {
        parent::__construct(self::NOTIFICATION_TYPE_DANGER, $content);
    }
}
