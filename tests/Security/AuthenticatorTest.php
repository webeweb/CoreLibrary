<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Security;

use WBW\Library\Core\Security\Authenticator;
use WBW\Library\Core\Security\PasswordAuthentication;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * Authenticator test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Security
 */
class AuthenticatorTest extends AbstractTestCase {

    /**
     * Password authentication.
     *
     * @var PasswordAuthentication
     */
    private $passwordAuthentication;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set the Password authentication mock.
        $this->passwordAuthentication = new PasswordAuthentication("username", "password");
    }

    /**
     * Tests the setPasswordAuthentication() method.
     *
     * @return void
     */
    public function testSetPasswordAuthentication(): void {

        $obj = new Authenticator(null, $this->passwordAuthentication);

        $obj->setPasswordAuthentication(new PasswordAuthentication(null, null));
        $this->assertNull($obj->getPasswordAuthentication()->getUsername());
        $this->assertNull($obj->getPasswordAuthentication()->getPassword());
    }

    /**
     * Tests the setScheme() method.
     *
     * @return void
     */
    public function testSetScheme(): void {

        $obj = new Authenticator(null, $this->passwordAuthentication);

        $obj->setScheme("scheme");
        $this->assertEquals("scheme", $obj->getScheme());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Authenticator(null, $this->passwordAuthentication);

        $this->assertNull($obj->getHostname());
        $this->assertSame($this->passwordAuthentication, $obj->getPasswordAuthentication());
        $this->assertNull($obj->getPort());
        $this->assertNull($obj->getScheme());
    }
}
