<?php
/**
 * ShipmentResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  MyDHL
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Integration for DHL Express MyDHL Service
 *
 * OpenAPI description for the Integration with MyDHL
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: thomas@spysystem.dk
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.1.3-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MyDHL\Model;

use \ArrayAccess;
use \MyDHL\ObjectSerializer;

/**
 * ShipmentResponse Class Doc Comment
 *
 * @category Class
 * @package  MyDHL
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ShipmentResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShipmentResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'shipment_identification_number' => 'string',
        'dispatch_confirmation_number' => 'string',
        'on_demand_delivery_url' => 'string',
        'response' => '\MyDHL\Model\Response',
        'notification' => '\MyDHL\Model\Notification[]',
        'packages_result' => '\MyDHL\Model\PackagesResult',
        'label_image' => '\MyDHL\Model\LabelImage[]',
        'documents' => '\MyDHL\Model\Documents',
        'total_net' => '\MyDHL\Model\TotalNet[]',
        'additional_information' => '\MyDHL\Model\AdditionalInformation'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'shipment_identification_number' => null,
        'dispatch_confirmation_number' => null,
        'on_demand_delivery_url' => null,
        'response' => null,
        'notification' => null,
        'packages_result' => null,
        'label_image' => null,
        'documents' => null,
        'total_net' => null,
        'additional_information' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'shipment_identification_number' => false,
        'dispatch_confirmation_number' => false,
        'on_demand_delivery_url' => false,
        'response' => false,
        'notification' => false,
        'packages_result' => false,
        'label_image' => false,
        'documents' => false,
        'total_net' => false,
        'additional_information' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of property to nullable mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPINullables()
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return array
     */
    public function getOpenAPINullablesSetToNull()
    {
        return $this->openAPINullablesSetToNull;
    }

    public function setOpenAPINullablesSetToNull($nullablesSetToNull)
    {
        $this->openAPINullablesSetToNull=$nullablesSetToNull;

        return $this;
    }

    /**
     * Checks if a property is nullable
     *
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        if (isset(self::$openAPINullables[$property])) {
            return self::$openAPINullables[$property];
        }

        return false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        if (in_array($property, $this->getOpenAPINullablesSetToNull())) {
            return true;
        }
        return false;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'shipment_identification_number' => 'ShipmentIdentificationNumber',
        'dispatch_confirmation_number' => 'DispatchConfirmationNumber',
        'on_demand_delivery_url' => 'OnDemandDeliveryURL',
        'response' => 'Response',
        'notification' => 'Notification',
        'packages_result' => 'PackagesResult',
        'label_image' => 'LabelImage',
        'documents' => 'Documents',
        'total_net' => 'TotalNet',
        'additional_information' => 'AdditionalInformation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipment_identification_number' => 'setShipmentIdentificationNumber',
        'dispatch_confirmation_number' => 'setDispatchConfirmationNumber',
        'on_demand_delivery_url' => 'setOnDemandDeliveryUrl',
        'response' => 'setResponse',
        'notification' => 'setNotification',
        'packages_result' => 'setPackagesResult',
        'label_image' => 'setLabelImage',
        'documents' => 'setDocuments',
        'total_net' => 'setTotalNet',
        'additional_information' => 'setAdditionalInformation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipment_identification_number' => 'getShipmentIdentificationNumber',
        'dispatch_confirmation_number' => 'getDispatchConfirmationNumber',
        'on_demand_delivery_url' => 'getOnDemandDeliveryUrl',
        'response' => 'getResponse',
        'notification' => 'getNotification',
        'packages_result' => 'getPackagesResult',
        'label_image' => 'getLabelImage',
        'documents' => 'getDocuments',
        'total_net' => 'getTotalNet',
        'additional_information' => 'getAdditionalInformation'
    ];

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
        return self::$openAPIModelName;
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
        $this->setIfExists('shipment_identification_number', $data, null);
        $this->setIfExists('dispatch_confirmation_number', $data, null);
        $this->setIfExists('on_demand_delivery_url', $data, null);
        $this->setIfExists('response', $data, null);
        $this->setIfExists('notification', $data, null);
        $this->setIfExists('packages_result', $data, null);
        $this->setIfExists('label_image', $data, null);
        $this->setIfExists('documents', $data, null);
        $this->setIfExists('total_net', $data, null);
        $this->setIfExists('additional_information', $data, null);
    }

    public function setIfExists(string $variableName, $fields, $defaultValue)
    {
        if (is_array($fields) && array_key_exists($variableName, $fields) && is_null($fields[$variableName]) && self::isNullable($variableName)) {
            array_push($this->openAPINullablesSetToNull, $variableName);
        }

        $this->container[$variableName] = isset($fields[$variableName]) ? $fields[$variableName] : $defaultValue;

        return $this;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['notification'] === null) {
            $invalidProperties[] = "'notification' can't be null";
        }
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
     * Gets shipment_identification_number
     *
     * @return string|null
     */
    public function getShipmentIdentificationNumber()
    {
        return $this->container['shipment_identification_number'];
    }

    /**
     * Sets shipment_identification_number
     *
     * @param string|null $shipment_identification_number shipment_identification_number
     *
     * @return $this
     */
    public function setShipmentIdentificationNumber($shipment_identification_number)
    {

        if (is_null($shipment_identification_number)) {
            throw new \InvalidArgumentException('non-nullable shipment_identification_number cannot be null');
        }

        $this->container['shipment_identification_number'] = $shipment_identification_number;

        return $this;
    }

    /**
     * Gets dispatch_confirmation_number
     *
     * @return string|null
     */
    public function getDispatchConfirmationNumber()
    {
        return $this->container['dispatch_confirmation_number'];
    }

    /**
     * Sets dispatch_confirmation_number
     *
     * @param string|null $dispatch_confirmation_number dispatch_confirmation_number
     *
     * @return $this
     */
    public function setDispatchConfirmationNumber($dispatch_confirmation_number)
    {

        if (is_null($dispatch_confirmation_number)) {
            throw new \InvalidArgumentException('non-nullable dispatch_confirmation_number cannot be null');
        }

        $this->container['dispatch_confirmation_number'] = $dispatch_confirmation_number;

        return $this;
    }

    /**
     * Gets on_demand_delivery_url
     *
     * @return string|null
     */
    public function getOnDemandDeliveryUrl()
    {
        return $this->container['on_demand_delivery_url'];
    }

    /**
     * Sets on_demand_delivery_url
     *
     * @param string|null $on_demand_delivery_url on_demand_delivery_url
     *
     * @return $this
     */
    public function setOnDemandDeliveryUrl($on_demand_delivery_url)
    {

        if (is_null($on_demand_delivery_url)) {
            throw new \InvalidArgumentException('non-nullable on_demand_delivery_url cannot be null');
        }

        $this->container['on_demand_delivery_url'] = $on_demand_delivery_url;

        return $this;
    }

    /**
     * Gets response
     *
     * @return \MyDHL\Model\Response|null
     */
    public function getResponse()
    {
        return $this->container['response'];
    }

    /**
     * Sets response
     *
     * @param \MyDHL\Model\Response|null $response response
     *
     * @return $this
     */
    public function setResponse($response)
    {

        if (is_null($response)) {
            throw new \InvalidArgumentException('non-nullable response cannot be null');
        }

        $this->container['response'] = $response;

        return $this;
    }

    /**
     * Gets notification
     *
     * @return \MyDHL\Model\Notification[]
     */
    public function getNotification()
    {
        return $this->container['notification'];
    }

    /**
     * Sets notification
     *
     * @param \MyDHL\Model\Notification[] $notification notification
     *
     * @return $this
     */
    public function setNotification($notification)
    {

        if (is_null($notification)) {
            throw new \InvalidArgumentException('non-nullable notification cannot be null');
        }

        $this->container['notification'] = $notification;

        return $this;
    }

    /**
     * Gets packages_result
     *
     * @return \MyDHL\Model\PackagesResult|null
     */
    public function getPackagesResult()
    {
        return $this->container['packages_result'];
    }

    /**
     * Sets packages_result
     *
     * @param \MyDHL\Model\PackagesResult|null $packages_result packages_result
     *
     * @return $this
     */
    public function setPackagesResult($packages_result)
    {

        if (is_null($packages_result)) {
            throw new \InvalidArgumentException('non-nullable packages_result cannot be null');
        }

        $this->container['packages_result'] = $packages_result;

        return $this;
    }

    /**
     * Gets label_image
     *
     * @return \MyDHL\Model\LabelImage[]|null
     */
    public function getLabelImage()
    {
        return $this->container['label_image'];
    }

    /**
     * Sets label_image
     *
     * @param \MyDHL\Model\LabelImage[]|null $label_image label_image
     *
     * @return $this
     */
    public function setLabelImage($label_image)
    {

        if (is_null($label_image)) {
            throw new \InvalidArgumentException('non-nullable label_image cannot be null');
        }

        $this->container['label_image'] = $label_image;

        return $this;
    }

    /**
     * Gets documents
     *
     * @return \MyDHL\Model\Documents|null
     */
    public function getDocuments()
    {
        return $this->container['documents'];
    }

    /**
     * Sets documents
     *
     * @param \MyDHL\Model\Documents|null $documents documents
     *
     * @return $this
     */
    public function setDocuments($documents)
    {

        if (is_null($documents)) {
            throw new \InvalidArgumentException('non-nullable documents cannot be null');
        }

        $this->container['documents'] = $documents;

        return $this;
    }

    /**
     * Gets total_net
     *
     * @return \MyDHL\Model\TotalNet[]|null
     */
    public function getTotalNet()
    {
        return $this->container['total_net'];
    }

    /**
     * Sets total_net
     *
     * @param \MyDHL\Model\TotalNet[]|null $total_net total_net
     *
     * @return $this
     */
    public function setTotalNet($total_net)
    {

        if (is_null($total_net)) {
            throw new \InvalidArgumentException('non-nullable total_net cannot be null');
        }

        $this->container['total_net'] = $total_net;

        return $this;
    }

    /**
     * Gets additional_information
     *
     * @return \MyDHL\Model\AdditionalInformation|null
     */
    public function getAdditionalInformation()
    {
        return $this->container['additional_information'];
    }

    /**
     * Sets additional_information
     *
     * @param \MyDHL\Model\AdditionalInformation|null $additional_information additional_information
     *
     * @return $this
     */
    public function setAdditionalInformation($additional_information)
    {

        if (is_null($additional_information)) {
            throw new \InvalidArgumentException('non-nullable additional_information cannot be null');
        }

        $this->container['additional_information'] = $additional_information;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


