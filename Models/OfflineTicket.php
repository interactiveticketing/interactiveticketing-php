<?php
/**
 * OfflineTicket
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
 * Get your API Key from the [Dashboard](/dashboard/).<br/>Send all API requests with http header `X-API-Key: YOUR-API-KEY-HERE`.<br/>Base URL: `https://secure.interactiveticketing.com/developers/api/v4`<br/>Contact support@interactiveticketing.com for help.
 *
 * OpenAPI spec version: v4
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.38
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
 * OfflineTicket Class Doc Comment
 *
 * @category Class
 * @package  InteractiveTicketing
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OfflineTicket implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OfflineTicket';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'offlineTicketId' => 'int',
'testTicket' => 'bool',
'barcode' => 'string',
'name' => 'string',
'price' => 'string',
'details' => 'string',
'slotDate' => 'string',
'slotTime' => 'string',
'seatCustom1' => 'string',
'seatCustom2' => 'string',
'seatSection' => 'string',
'seatRow' => 'string',
'seatNumber' => 'int',
'canceled' => 'bool',
'scans' => '\InteractiveTicketing\Models\Scan[]',
'scanPointConfig' => '\InteractiveTicketing\Models\ScanPointConfig'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'offlineTicketId' => null,
'testTicket' => null,
'barcode' => null,
'name' => null,
'price' => null,
'details' => null,
'slotDate' => null,
'slotTime' => null,
'seatCustom1' => null,
'seatCustom2' => null,
'seatSection' => null,
'seatRow' => null,
'seatNumber' => null,
'canceled' => null,
'scans' => null,
'scanPointConfig' => null    ];

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
        'offlineTicketId' => 'offlineTicketId',
'testTicket' => 'testTicket',
'barcode' => 'barcode',
'name' => 'name',
'price' => 'price',
'details' => 'details',
'slotDate' => 'slotDate',
'slotTime' => 'slotTime',
'seatCustom1' => 'seatCustom1',
'seatCustom2' => 'seatCustom2',
'seatSection' => 'seatSection',
'seatRow' => 'seatRow',
'seatNumber' => 'seatNumber',
'canceled' => 'canceled',
'scans' => '_scans',
'scanPointConfig' => '_scanPointConfig'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'offlineTicketId' => 'setOfflineTicketId',
'testTicket' => 'setTestTicket',
'barcode' => 'setBarcode',
'name' => 'setName',
'price' => 'setPrice',
'details' => 'setDetails',
'slotDate' => 'setSlotDate',
'slotTime' => 'setSlotTime',
'seatCustom1' => 'setSeatCustom1',
'seatCustom2' => 'setSeatCustom2',
'seatSection' => 'setSeatSection',
'seatRow' => 'setSeatRow',
'seatNumber' => 'setSeatNumber',
'canceled' => 'setCanceled',
'scans' => 'setScans',
'scanPointConfig' => 'setScanPointConfig'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'offlineTicketId' => 'getOfflineTicketId',
'testTicket' => 'getTestTicket',
'barcode' => 'getBarcode',
'name' => 'getName',
'price' => 'getPrice',
'details' => 'getDetails',
'slotDate' => 'getSlotDate',
'slotTime' => 'getSlotTime',
'seatCustom1' => 'getSeatCustom1',
'seatCustom2' => 'getSeatCustom2',
'seatSection' => 'getSeatSection',
'seatRow' => 'getSeatRow',
'seatNumber' => 'getSeatNumber',
'canceled' => 'getCanceled',
'scans' => 'getScans',
'scanPointConfig' => 'getScanPointConfig'    ];

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
        $this->container['offlineTicketId'] = isset($data['offlineTicketId']) ? $data['offlineTicketId'] : null;
        $this->container['testTicket'] = isset($data['testTicket']) ? $data['testTicket'] : null;
        $this->container['barcode'] = isset($data['barcode']) ? $data['barcode'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
        $this->container['slotDate'] = isset($data['slotDate']) ? $data['slotDate'] : null;
        $this->container['slotTime'] = isset($data['slotTime']) ? $data['slotTime'] : null;
        $this->container['seatCustom1'] = isset($data['seatCustom1']) ? $data['seatCustom1'] : null;
        $this->container['seatCustom2'] = isset($data['seatCustom2']) ? $data['seatCustom2'] : null;
        $this->container['seatSection'] = isset($data['seatSection']) ? $data['seatSection'] : null;
        $this->container['seatRow'] = isset($data['seatRow']) ? $data['seatRow'] : null;
        $this->container['seatNumber'] = isset($data['seatNumber']) ? $data['seatNumber'] : null;
        $this->container['canceled'] = isset($data['canceled']) ? $data['canceled'] : null;
        $this->container['scans'] = isset($data['scans']) ? $data['scans'] : null;
        $this->container['scanPointConfig'] = isset($data['scanPointConfig']) ? $data['scanPointConfig'] : null;
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
     * Gets offlineTicketId
     *
     * @return int
     */
    public function getOfflineTicketId()
    {
        return $this->container['offlineTicketId'];
    }

    /**
     * Sets offlineTicketId
     *
     * @param int $offlineTicketId The ticket ID
     *
     * @return $this
     */
    public function setOfflineTicketId($offlineTicketId)
    {
        $this->container['offlineTicketId'] = $offlineTicketId;

        return $this;
    }

    /**
     * Gets testTicket
     *
     * @return bool
     */
    public function getTestTicket()
    {
        return $this->container['testTicket'];
    }

    /**
     * Sets testTicket
     *
     * @param bool $testTicket True if test mode
     *
     * @return $this
     */
    public function setTestTicket($testTicket)
    {
        $this->container['testTicket'] = $testTicket;

        return $this;
    }

    /**
     * Gets barcode
     *
     * @return string
     */
    public function getBarcode()
    {
        return $this->container['barcode'];
    }

    /**
     * Sets barcode
     *
     * @param string $barcode The ticket barcode
     *
     * @return $this
     */
    public function setBarcode($barcode)
    {
        $this->container['barcode'] = $barcode;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of ticket
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param string $price Purchase price for the ticket
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets details
     *
     * @return string
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param string $details Details about the ticket
     *
     * @return $this
     */
    public function setDetails($details)
    {
        $this->container['details'] = $details;

        return $this;
    }

    /**
     * Gets slotDate
     *
     * @return string
     */
    public function getSlotDate()
    {
        return $this->container['slotDate'];
    }

    /**
     * Sets slotDate
     *
     * @param string $slotDate Applicable to timed ticketing
     *
     * @return $this
     */
    public function setSlotDate($slotDate)
    {
        $this->container['slotDate'] = $slotDate;

        return $this;
    }

    /**
     * Gets slotTime
     *
     * @return string
     */
    public function getSlotTime()
    {
        return $this->container['slotTime'];
    }

    /**
     * Sets slotTime
     *
     * @param string $slotTime Applicable to timed ticketing
     *
     * @return $this
     */
    public function setSlotTime($slotTime)
    {
        $this->container['slotTime'] = $slotTime;

        return $this;
    }

    /**
     * Gets seatCustom1
     *
     * @return string
     */
    public function getSeatCustom1()
    {
        return $this->container['seatCustom1'];
    }

    /**
     * Sets seatCustom1
     *
     * @param string $seatCustom1 Applicable to reserved seating
     *
     * @return $this
     */
    public function setSeatCustom1($seatCustom1)
    {
        $this->container['seatCustom1'] = $seatCustom1;

        return $this;
    }

    /**
     * Gets seatCustom2
     *
     * @return string
     */
    public function getSeatCustom2()
    {
        return $this->container['seatCustom2'];
    }

    /**
     * Sets seatCustom2
     *
     * @param string $seatCustom2 Applicable to reserved seating
     *
     * @return $this
     */
    public function setSeatCustom2($seatCustom2)
    {
        $this->container['seatCustom2'] = $seatCustom2;

        return $this;
    }

    /**
     * Gets seatSection
     *
     * @return string
     */
    public function getSeatSection()
    {
        return $this->container['seatSection'];
    }

    /**
     * Sets seatSection
     *
     * @param string $seatSection Applicable to reserved seating
     *
     * @return $this
     */
    public function setSeatSection($seatSection)
    {
        $this->container['seatSection'] = $seatSection;

        return $this;
    }

    /**
     * Gets seatRow
     *
     * @return string
     */
    public function getSeatRow()
    {
        return $this->container['seatRow'];
    }

    /**
     * Sets seatRow
     *
     * @param string $seatRow Applicable to reserved seating
     *
     * @return $this
     */
    public function setSeatRow($seatRow)
    {
        $this->container['seatRow'] = $seatRow;

        return $this;
    }

    /**
     * Gets seatNumber
     *
     * @return int
     */
    public function getSeatNumber()
    {
        return $this->container['seatNumber'];
    }

    /**
     * Sets seatNumber
     *
     * @param int $seatNumber Applicable to reserved seating
     *
     * @return $this
     */
    public function setSeatNumber($seatNumber)
    {
        $this->container['seatNumber'] = $seatNumber;

        return $this;
    }

    /**
     * Gets canceled
     *
     * @return bool
     */
    public function getCanceled()
    {
        return $this->container['canceled'];
    }

    /**
     * Sets canceled
     *
     * @param bool $canceled Canceled / Voided ticket
     *
     * @return $this
     */
    public function setCanceled($canceled)
    {
        $this->container['canceled'] = $canceled;

        return $this;
    }

    /**
     * Gets scans
     *
     * @return \InteractiveTicketing\Models\Scan[]
     */
    public function getScans()
    {
        return $this->container['scans'];
    }

    /**
     * Sets scans
     *
     * @param \InteractiveTicketing\Models\Scan[] $scans Array of ticket scan activity
     *
     * @return $this
     */
    public function setScans($scans)
    {
        $this->container['scans'] = $scans;

        return $this;
    }

    /**
     * Gets scanPointConfig
     *
     * @return \InteractiveTicketing\Models\ScanPointConfig
     */
    public function getScanPointConfig()
    {
        return $this->container['scanPointConfig'];
    }

    /**
     * Sets scanPointConfig
     *
     * @param \InteractiveTicketing\Models\ScanPointConfig $scanPointConfig scanPointConfig
     *
     * @return $this
     */
    public function setScanPointConfig($scanPointConfig)
    {
        $this->container['scanPointConfig'] = $scanPointConfig;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange] 
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
    #[\ReturnTypeWillChange] 
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
    #[\ReturnTypeWillChange] 
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
    #[\ReturnTypeWillChange] 
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
