<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Database\Connector;

use PDO;
use WBW\Library\Common\Security\Authenticator;

/**
 * Microsoft SQL Server database connector.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Database\Connector
 */
class MicrosoftSqlServerDatabaseConnector extends AbstractDatabaseConnector {

    /**
     * Microsoft SQL Server DSN.
     *
     * @var string
     */
    public const DEFAULT_DSN = "sqlsrv:server=%HOST%,%PORT%;database=%DATABASE%;";

    /**
     * Constructor.
     *
     * @param Authenticator $authenticator The authenticator.
     * @param string|null $database The database.
     */
    public function __construct(Authenticator $authenticator, ?string $database) {
        parent::__construct($authenticator);

        $this->setDatabase($database);

        if (null === $this->getAuthenticator()->getPort()) {
            $this->getAuthenticator()->setPort(1433);
        }
    }

    /**
     * {@inheritDoc}
     */
    protected function connect(): PDO {

        $searches = ["%HOST%", "%PORT%", "%DATABASE%"];
        $replaces = [$this->getAuthenticator()->getHostname(), $this->getAuthenticator()->getPort(), $this->getDatabase()];

        $dsn = str_replace($searches, $replaces, self::DEFAULT_DSN);

        return new PDO($dsn, $this->getAuthenticator()->getPasswordAuthentication()->getUsername(), $this->getAuthenticator()->getPasswordAuthentication()->getPassword());
    }
}
