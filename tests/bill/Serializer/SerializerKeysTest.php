<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Bill\Tests\Serializer;

use WBW\Library\Bill\Serializer\SerializerKeys;
use WBW\Library\Bill\Tests\AbstractTestCase;

/**
 * Serializer keys test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Bill\Tests\Serializer
 */
class SerializerKeysTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("billable", SerializerKeys::BILLABLE);
        $this->assertEquals("billingAddressAddressee", SerializerKeys::BILLING_ADDRESS_ADDRESSEE);
        $this->assertEquals("billingAddressCountry", SerializerKeys::BILLING_ADDRESS_COUNTRY);
        $this->assertEquals("billingAddressHouseNumber", SerializerKeys::BILLING_ADDRESS_HOUSE_NUMBER);
        $this->assertEquals("billingAddressLocation", SerializerKeys::BILLING_ADDRESS_LOCATION);
        $this->assertEquals("billingAddressPostalCode", SerializerKeys::BILLING_ADDRESS_POSTAL_CODE);
        $this->assertEquals("billingAddressStreetName", SerializerKeys::BILLING_ADDRESS_STREET_NAME);
        $this->assertEquals("comment", SerializerKeys::COMMENT);
        $this->assertEquals("createdAt", SerializerKeys::CREATED_AT);
        $this->assertEquals("date", SerializerKeys::DATE);
        $this->assertEquals("deliveryAddressAddressee", SerializerKeys::DELIVERY_ADDRESS_ADDRESSEE);
        $this->assertEquals("deliveryAddressCountry", SerializerKeys::DELIVERY_ADDRESS_COUNTRY);
        $this->assertEquals("deliveryAddressHouseNumber", SerializerKeys::DELIVERY_ADDRESS_HOUSE_NUMBER);
        $this->assertEquals("deliveryAddressLocation", SerializerKeys::DELIVERY_ADDRESS_LOCATION);
        $this->assertEquals("deliveryAddressPostalCode", SerializerKeys::DELIVERY_ADDRESS_POSTAL_CODE);
        $this->assertEquals("deliveryAddressStreetName", SerializerKeys::DELIVERY_ADDRESS_STREET_NAME);
        $this->assertEquals("details", SerializerKeys::DETAILS);
        $this->assertEquals("discountAmount", SerializerKeys::DISCOUNT_AMOUNT);
        $this->assertEquals("discountRate", SerializerKeys::DISCOUNT_RATE);
        $this->assertEquals("discountTotal", SerializerKeys::DISCOUNT_TOTAL);
        $this->assertEquals("excludingVatPrice", SerializerKeys::EXCLUDING_VAT_PRICE);
        $this->assertEquals("excludingVatTotal", SerializerKeys::EXCLUDING_VAT_TOTAL);
        $this->assertEquals("expirationDate", SerializerKeys::EXPIRATION_DATE);
        $this->assertEquals("includingVatPrice", SerializerKeys::INCLUDING_VAT_PRICE);
        $this->assertEquals("includingVatTotal", SerializerKeys::INCLUDING_VAT_TOTAL);
        $this->assertEquals("label", SerializerKeys::LABEL);
        $this->assertEquals("number", SerializerKeys::NUMBER);
        $this->assertEquals("parent", SerializerKeys::PARENT);
        $this->assertEquals("paymentDate", SerializerKeys::PAYMENT_DATE);
        $this->assertEquals("quantity", SerializerKeys::QUANTITY);
        $this->assertEquals("reference", SerializerKeys::REFERENCE);
        $this->assertEquals("sendingAddressAddressee", SerializerKeys::SENDING_ADDRESS_ADDRESSEE);
        $this->assertEquals("sendingAddressCountry", SerializerKeys::SENDING_ADDRESS_COUNTRY);
        $this->assertEquals("sendingAddressHouseNumber", SerializerKeys::SENDING_ADDRESS_HOUSE_NUMBER);
        $this->assertEquals("sendingAddressLocation", SerializerKeys::SENDING_ADDRESS_LOCATION);
        $this->assertEquals("sendingAddressPostalCode", SerializerKeys::SENDING_ADDRESS_POSTAL_CODE);
        $this->assertEquals("sendingAddressStreetName", SerializerKeys::SENDING_ADDRESS_STREET_NAME);
        $this->assertEquals("updatedAt", SerializerKeys::UPDATED_AT);
        $this->assertEquals("vatAmount", SerializerKeys::VAT_AMOUNT);
        $this->assertEquals("vatRate", SerializerKeys::VAT_RATE);
        $this->assertEquals("vatTotal", SerializerKeys::VAT_TOTAL);
    }
}