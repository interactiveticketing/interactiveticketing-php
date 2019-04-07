<?php
/**
 * Transaction
 *
 * PHP version 5
 *
 * @category Class
 * @package  InteractiveTicketing
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Developer API
 *
 * Get your API Key from the [Dashboard](/dashboard/).<br/>Send all API requests with http header `X-API-Key: YOUR-API-KEY-HERE`.<br/>Base URL: `https://secure.interactiveticketing.com/developers/api/v1`<br/>Contact support@interactiveticketing.com for help.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.7
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace InteractiveTicketing\Models;

use \ArrayAccess;
use \InteractiveTicketing\ObjectSerializer;

/**
 * Transaction Class Doc Comment
 *
 * @category Class
 * @package  InteractiveTicketing
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Transaction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Transaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'transactionId' => 'int',
'dateTime' => 'string',
'isRefund' => 'bool',
'amount' => 'string',
'type' => 'string',
'cardTransactionId' => 'string',
'cardType' => 'string',
'cardLastFour' => 'string',
'cardName' => 'string',
'referenceTransactionId' => 'string',
'billStreet' => 'string',
'billCity' => 'string',
'billStateProvince' => 'string',
'billPostalCode' => 'string',
'billCountry' => 'string',
'refundReason' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'transactionId' => null,
'dateTime' => null,
'isRefund' => null,
'amount' => null,
'type' => null,
'cardTransactionId' => null,
'cardType' => null,
'cardLastFour' => null,
'cardName' => null,
'referenceTransactionId' => null,
'billStreet' => null,
'billCity' => null,
'billStateProvince' => null,
'billPostalCode' => null,
'billCountry' => null,
'refundReason' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'transactionId' => 'transactionId',
'dateTime' => 'dateTime',
'isRefund' => 'isRefund',
'amount' => 'amount',
'type' => 'type',
'cardTransactionId' => 'cardTransactionId',
'cardType' => 'cardType',
'cardLastFour' => 'cardLastFour',
'cardName' => 'cardName',
'referenceTransactionId' => 'referenceTransactionId',
'billStreet' => 'billStreet',
'billCity' => 'billCity',
'billStateProvince' => 'billStateProvince',
'billPostalCode' => 'billPostalCode',
'billCountry' => 'billCountry',
'refundReason' => 'refundReason'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'transactionId' => 'setTransactionId',
'dateTime' => 'setDateTime',
'isRefund' => 'setIsRefund',
'amount' => 'setAmount',
'type' => 'setType',
'cardTransactionId' => 'setCardTransactionId',
'cardType' => 'setCardType',
'cardLastFour' => 'setCardLastFour',
'cardName' => 'setCardName',
'referenceTransactionId' => 'setReferenceTransactionId',
'billStreet' => 'setBillStreet',
'billCity' => 'setBillCity',
'billStateProvince' => 'setBillStateProvince',
'billPostalCode' => 'setBillPostalCode',
'billCountry' => 'setBillCountry',
'refundReason' => 'setRefundReason'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'transactionId' => 'getTransactionId',
'dateTime' => 'getDateTime',
'isRefund' => 'getIsRefund',
'amount' => 'getAmount',
'type' => 'getType',
'cardTransactionId' => 'getCardTransactionId',
'cardType' => 'getCardType',
'cardLastFour' => 'getCardLastFour',
'cardName' => 'getCardName',
'referenceTransactionId' => 'getReferenceTransactionId',
'billStreet' => 'getBillStreet',
'billCity' => 'getBillCity',
'billStateProvince' => 'getBillStateProvince',
'billPostalCode' => 'getBillPostalCode',
'billCountry' => 'getBillCountry',
'refundReason' => 'getRefundReason'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['transactionId'] = isset($data['transactionId']) ? $data['transactionId'] : null;
        $this->container['dateTime'] = isset($data['dateTime']) ? $data['dateTime'] : null;
        $this->container['isRefund'] = isset($data['isRefund']) ? $data['isRefund'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['cardTransactionId'] = isset($data['cardTransactionId']) ? $data['cardTransactionId'] : null;
        $this->container['cardType'] = isset($data['cardType']) ? $data['cardType'] : null;
        $this->container['cardLastFour'] = isset($data['cardLastFour']) ? $data['cardLastFour'] : null;
        $this->container['cardName'] = isset($data['cardName']) ? $data['cardName'] : null;
        $this->container['referenceTransactionId'] = isset($data['referenceTransactionId']) ? $data['referenceTransactionId'] : null;
        $this->container['billStreet'] = isset($data['billStreet']) ? $data['billStreet'] : null;
        $this->container['billCity'] = isset($data['billCity']) ? $data['billCity'] : null;
        $this->container['billStateProvince'] = isset($data['billStateProvince']) ? $data['billStateProvince'] : null;
        $this->container['billPostalCode'] = isset($data['billPostalCode']) ? $data['billPostalCode'] : null;
        $this->container['billCountry'] = isset($data['billCountry']) ? $data['billCountry'] : null;
        $this->container['refundReason'] = isset($data['refundReason']) ? $data['refundReason'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets transactionId
     *
     * @return int
     */
    public function getTransactionId()
    {
        return $this->container['transactionId'];
    }

    /**
     * Sets transactionId
     *
     * @param int $transactionId The transaction ID
     *
     * @return $this
     */
    public function setTransactionId($transactionId)
    {
        $this->container['transactionId'] = $transactionId;

        return $this;
    }

    /**
     * Gets dateTime
     *
     * @return string
     */
    public function getDateTime()
    {
        return $this->container['dateTime'];
    }

    /**
     * Sets dateTime
     *
     * @param string $dateTime The transaction time iso-8601
     *
     * @return $this
     */
    public function setDateTime($dateTime)
    {
        $this->container['dateTime'] = $dateTime;

        return $this;
    }

    /**
     * Gets isRefund
     *
     * @return bool
     */
    public function getIsRefund()
    {
        return $this->container['isRefund'];
    }

    /**
     * Sets isRefund
     *
     * @param bool $isRefund The transaction is a refund
     *
     * @return $this
     */
    public function setIsRefund($isRefund)
    {
        $this->container['isRefund'] = $isRefund;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string $amount The transaction amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type credit | cash | other | triPos
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets cardTransactionId
     *
     * @return string
     */
    public function getCardTransactionId()
    {
        return $this->container['cardTransactionId'];
    }

    /**
     * Sets cardTransactionId
     *
     * @param string $cardTransactionId The payment gateway transaction identifier
     *
     * @return $this
     */
    public function setCardTransactionId($cardTransactionId)
    {
        $this->container['cardTransactionId'] = $cardTransactionId;

        return $this;
    }

    /**
     * Gets cardType
     *
     * @return string
     */
    public function getCardType()
    {
        return $this->container['cardType'];
    }

    /**
     * Sets cardType
     *
     * @param string $cardType The payment credit card type code
     *
     * @return $this
     */
    public function setCardType($cardType)
    {
        $this->container['cardType'] = $cardType;

        return $this;
    }

    /**
     * Gets cardLastFour
     *
     * @return string
     */
    public function getCardLastFour()
    {
        return $this->container['cardLastFour'];
    }

    /**
     * Sets cardLastFour
     *
     * @param string $cardLastFour The payment credit card last four digits
     *
     * @return $this
     */
    public function setCardLastFour($cardLastFour)
    {
        $this->container['cardLastFour'] = $cardLastFour;

        return $this;
    }

    /**
     * Gets cardName
     *
     * @return string
     */
    public function getCardName()
    {
        return $this->container['cardName'];
    }

    /**
     * Sets cardName
     *
     * @param string $cardName The payment credit card customer name on card
     *
     * @return $this
     */
    public function setCardName($cardName)
    {
        $this->container['cardName'] = $cardName;

        return $this;
    }

    /**
     * Gets referenceTransactionId
     *
     * @return string
     */
    public function getReferenceTransactionId()
    {
        return $this->container['referenceTransactionId'];
    }

    /**
     * Sets referenceTransactionId
     *
     * @param string $referenceTransactionId Applicable to refund transaction, reference to the original `cardTransactionId`
     *
     * @return $this
     */
    public function setReferenceTransactionId($referenceTransactionId)
    {
        $this->container['referenceTransactionId'] = $referenceTransactionId;

        return $this;
    }

    /**
     * Gets billStreet
     *
     * @return string
     */
    public function getBillStreet()
    {
        return $this->container['billStreet'];
    }

    /**
     * Sets billStreet
     *
     * @param string $billStreet Billing street address
     *
     * @return $this
     */
    public function setBillStreet($billStreet)
    {
        $this->container['billStreet'] = $billStreet;

        return $this;
    }

    /**
     * Gets billCity
     *
     * @return string
     */
    public function getBillCity()
    {
        return $this->container['billCity'];
    }

    /**
     * Sets billCity
     *
     * @param string $billCity Billing city
     *
     * @return $this
     */
    public function setBillCity($billCity)
    {
        $this->container['billCity'] = $billCity;

        return $this;
    }

    /**
     * Gets billStateProvince
     *
     * @return string
     */
    public function getBillStateProvince()
    {
        return $this->container['billStateProvince'];
    }

    /**
     * Sets billStateProvince
     *
     * @param string $billStateProvince Billing state or province
     *
     * @return $this
     */
    public function setBillStateProvince($billStateProvince)
    {
        $this->container['billStateProvince'] = $billStateProvince;

        return $this;
    }

    /**
     * Gets billPostalCode
     *
     * @return string
     */
    public function getBillPostalCode()
    {
        return $this->container['billPostalCode'];
    }

    /**
     * Sets billPostalCode
     *
     * @param string $billPostalCode Billing post code / zip
     *
     * @return $this
     */
    public function setBillPostalCode($billPostalCode)
    {
        $this->container['billPostalCode'] = $billPostalCode;

        return $this;
    }

    /**
     * Gets billCountry
     *
     * @return string
     */
    public function getBillCountry()
    {
        return $this->container['billCountry'];
    }

    /**
     * Sets billCountry
     *
     * @param string $billCountry Billing country
     *
     * @return $this
     */
    public function setBillCountry($billCountry)
    {
        $this->container['billCountry'] = $billCountry;

        return $this;
    }

    /**
     * Gets refundReason
     *
     * @return string
     */
    public function getRefundReason()
    {
        return $this->container['refundReason'];
    }

    /**
     * Sets refundReason
     *
     * @param string $refundReason Applicable to refund transactions
     *
     * @return $this
     */
    public function setRefundReason($refundReason)
    {
        $this->container['refundReason'] = $refundReason;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}