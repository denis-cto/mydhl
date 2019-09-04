<?php
/**
 * InternationalDetail
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
 * OpenAPI Generator version: 4.1.1
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
 * InternationalDetail Class Doc Comment
 *
 * @category Class
 * @package  MyDHL
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InternationalDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InternationalDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'content' => 'string',
        'commodities' => '\MyDHL\Model\Commodities',
        'export_declaration' => '\MyDHL\Model\ExportDeclaration'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'content' => null,
        'commodities' => null,
        'export_declaration' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'content' => 'Content',
        'commodities' => 'Commodities',
        'export_declaration' => 'ExportDeclaration'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'content' => 'setContent',
        'commodities' => 'setCommodities',
        'export_declaration' => 'setExportDeclaration'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'content' => 'getContent',
        'commodities' => 'getCommodities',
        'export_declaration' => 'getExportDeclaration'
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

    const CONTENT_DOCUMENTS = 'DOCUMENTS';
    const CONTENT_NON_DOCUMENTS = 'NON_DOCUMENTS';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getContentAllowableValues()
    {
        return [
            self::CONTENT_DOCUMENTS,
            self::CONTENT_NON_DOCUMENTS,
        ];
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
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['commodities'] = isset($data['commodities']) ? $data['commodities'] : null;
        $this->container['export_declaration'] = isset($data['export_declaration']) ? $data['export_declaration'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['content'] === null) {
            $invalidProperties[] = "'content' can't be null";
        }
        $allowedValues = $this->getContentAllowableValues();
        if (!is_null($this->container['content']) && !in_array($this->container['content'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'content', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['commodities'] === null) {
            $invalidProperties[] = "'commodities' can't be null";
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
     * Gets content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string $content content
     *
     * @return $this
     */
    public function setContent($content)
    {
        $allowedValues = $this->getContentAllowableValues();
        if (!in_array($content, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'content', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets commodities
     *
     * @return \MyDHL\Model\Commodities
     */
    public function getCommodities()
    {
        return $this->container['commodities'];
    }

    /**
     * Sets commodities
     *
     * @param \MyDHL\Model\Commodities $commodities commodities
     *
     * @return $this
     */
    public function setCommodities($commodities)
    {
        $this->container['commodities'] = $commodities;

        return $this;
    }

    /**
     * Gets export_declaration
     *
     * @return \MyDHL\Model\ExportDeclaration|null
     */
    public function getExportDeclaration()
    {
        return $this->container['export_declaration'];
    }

    /**
     * Sets export_declaration
     *
     * @param \MyDHL\Model\ExportDeclaration|null $export_declaration export_declaration
     *
     * @return $this
     */
    public function setExportDeclaration($export_declaration)
    {
        $this->container['export_declaration'] = $export_declaration;

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


