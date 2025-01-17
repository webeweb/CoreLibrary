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
 * Oracle MySQL database connector.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Database\Connector
 */
class OracleMySQLDatabaseConnector extends AbstractDatabaseConnector {

    /**
     * Oracle MySQL DSN.
     *
     * @var string
     */
    public const DEFAULT_DSN = "mysql:host=%HOST%;port=%PORT%;dbname=%DATABASE%;";

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
            $this->getAuthenticator()->setPort(3306);
        }
    }

    /**
     * {@inheritDoc}
     */
    protected function connect(): PDO {

        $searches   = ["%HOST%", "%PORT%", "%DATABASE%"];
        $replaces   = [$this->getAuthenticator()->getHostname(), $this->getAuthenticator()->getPort(), $this->getDatabase()];
        $attributes = [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"];

        $dsn = str_replace($searches, $replaces, self::DEFAULT_DSN);

        return new PDO($dsn, $this->getAuthenticator()->getPasswordAuthentication()->getUsername(), $this->getAuthenticator()->getPasswordAuthentication()->getPassword(), $attributes);
    }
}
