<?php
/**
 * GetNode
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  NFQ\KunstmaanRestApi\PhpClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Šiaulių Bankas REST API
 *
 * Šiaulių Bankas REST API provides secure and efficient access to application data, enabling seamless data synchronization between Šiaulių Bankas and external systems.
 *
 * The version of the OpenAPI document: 0.1.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.10.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace NFQ\KunstmaanRestApi\PhpClient\Model;

use \ArrayAccess;
use \NFQ\KunstmaanRestApi\PhpClient\ObjectSerializer;

/**
 * GetNode Class Doc Comment
 *
 * @category Class
 * @package  NFQ\KunstmaanRestApi\PhpClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetNode implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetNode';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'hiddenFromNav' => 'bool',
        'refEntityName' => 'string',
        'internalName' => 'string',
        'slug' => 'string',
        'url' => 'string',
        'lft' => 'int',
        'rgt' => 'int',
        'lvl' => 'int',
        'parent' => 'object',
        'embedded' => '\NFQ\KunstmaanRestApi\PhpClient\Model\GetNodeAllOfEmbedded'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'hiddenFromNav' => null,
        'refEntityName' => null,
        'internalName' => null,
        'slug' => null,
        'url' => null,
        'lft' => null,
        'rgt' => null,
        'lvl' => null,
        'parent' => null,
        'embedded' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'hiddenFromNav' => false,
        'refEntityName' => false,
        'internalName' => false,
        'slug' => false,
        'url' => false,
        'lft' => false,
        'rgt' => false,
        'lvl' => false,
        'parent' => false,
        'embedded' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'hiddenFromNav' => 'hidden_from_nav',
        'refEntityName' => 'ref_entity_name',
        'internalName' => 'internal_name',
        'slug' => 'slug',
        'url' => 'url',
        'lft' => 'lft',
        'rgt' => 'rgt',
        'lvl' => 'lvl',
        'parent' => 'parent',
        'embedded' => '_embedded'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'hiddenFromNav' => 'setHiddenFromNav',
        'refEntityName' => 'setRefEntityName',
        'internalName' => 'setInternalName',
        'slug' => 'setSlug',
        'url' => 'setUrl',
        'lft' => 'setLft',
        'rgt' => 'setRgt',
        'lvl' => 'setLvl',
        'parent' => 'setParent',
        'embedded' => 'setEmbedded'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'hiddenFromNav' => 'getHiddenFromNav',
        'refEntityName' => 'getRefEntityName',
        'internalName' => 'getInternalName',
        'slug' => 'getSlug',
        'url' => 'getUrl',
        'lft' => 'getLft',
        'rgt' => 'getRgt',
        'lvl' => 'getLvl',
        'parent' => 'getParent',
        'embedded' => 'getEmbedded'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('hiddenFromNav', $data ?? [], null);
        $this->setIfExists('refEntityName', $data ?? [], null);
        $this->setIfExists('internalName', $data ?? [], null);
        $this->setIfExists('slug', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('lft', $data ?? [], null);
        $this->setIfExists('rgt', $data ?? [], null);
        $this->setIfExists('lvl', $data ?? [], null);
        $this->setIfExists('parent', $data ?? [], null);
        $this->setIfExists('embedded', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets hiddenFromNav
     *
     * @return bool|null
     */
    public function getHiddenFromNav()
    {
        return $this->container['hiddenFromNav'];
    }

    /**
     * Sets hiddenFromNav
     *
     * @param bool|null $hiddenFromNav hiddenFromNav
     *
     * @return self
     */
    public function setHiddenFromNav($hiddenFromNav)
    {
        if (is_null($hiddenFromNav)) {
            throw new \InvalidArgumentException('non-nullable hiddenFromNav cannot be null');
        }
        $this->container['hiddenFromNav'] = $hiddenFromNav;

        return $this;
    }

    /**
     * Gets refEntityName
     *
     * @return string|null
     */
    public function getRefEntityName()
    {
        return $this->container['refEntityName'];
    }

    /**
     * Sets refEntityName
     *
     * @param string|null $refEntityName refEntityName
     *
     * @return self
     */
    public function setRefEntityName($refEntityName)
    {
        if (is_null($refEntityName)) {
            throw new \InvalidArgumentException('non-nullable refEntityName cannot be null');
        }
        $this->container['refEntityName'] = $refEntityName;

        return $this;
    }

    /**
     * Gets internalName
     *
     * @return string|null
     */
    public function getInternalName()
    {
        return $this->container['internalName'];
    }

    /**
     * Sets internalName
     *
     * @param string|null $internalName internalName
     *
     * @return self
     */
    public function setInternalName($internalName)
    {
        if (is_null($internalName)) {
            throw new \InvalidArgumentException('non-nullable internalName cannot be null');
        }
        $this->container['internalName'] = $internalName;

        return $this;
    }

    /**
     * Gets slug
     *
     * @return string|null
     */
    public function getSlug()
    {
        return $this->container['slug'];
    }

    /**
     * Sets slug
     *
     * @param string|null $slug slug
     *
     * @return self
     */
    public function setSlug($slug)
    {
        if (is_null($slug)) {
            throw new \InvalidArgumentException('non-nullable slug cannot be null');
        }
        $this->container['slug'] = $slug;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url url
     *
     * @return self
     */
    public function setUrl($url)
    {
        if (is_null($url)) {
            throw new \InvalidArgumentException('non-nullable url cannot be null');
        }
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets lft
     *
     * @return int|null
     */
    public function getLft()
    {
        return $this->container['lft'];
    }

    /**
     * Sets lft
     *
     * @param int|null $lft lft
     *
     * @return self
     */
    public function setLft($lft)
    {
        if (is_null($lft)) {
            throw new \InvalidArgumentException('non-nullable lft cannot be null');
        }
        $this->container['lft'] = $lft;

        return $this;
    }

    /**
     * Gets rgt
     *
     * @return int|null
     */
    public function getRgt()
    {
        return $this->container['rgt'];
    }

    /**
     * Sets rgt
     *
     * @param int|null $rgt rgt
     *
     * @return self
     */
    public function setRgt($rgt)
    {
        if (is_null($rgt)) {
            throw new \InvalidArgumentException('non-nullable rgt cannot be null');
        }
        $this->container['rgt'] = $rgt;

        return $this;
    }

    /**
     * Gets lvl
     *
     * @return int|null
     */
    public function getLvl()
    {
        return $this->container['lvl'];
    }

    /**
     * Sets lvl
     *
     * @param int|null $lvl lvl
     *
     * @return self
     */
    public function setLvl($lvl)
    {
        if (is_null($lvl)) {
            throw new \InvalidArgumentException('non-nullable lvl cannot be null');
        }
        $this->container['lvl'] = $lvl;

        return $this;
    }

    /**
     * Gets parent
     *
     * @return object|null
     */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent
     *
     * @param object|null $parent parent
     *
     * @return self
     */
    public function setParent($parent)
    {
        if (is_null($parent)) {
            throw new \InvalidArgumentException('non-nullable parent cannot be null');
        }
        $this->container['parent'] = $parent;

        return $this;
    }

    /**
     * Gets embedded
     *
     * @return \NFQ\KunstmaanRestApi\PhpClient\Model\GetNodeAllOfEmbedded|null
     */
    public function getEmbedded()
    {
        return $this->container['embedded'];
    }

    /**
     * Sets embedded
     *
     * @param \NFQ\KunstmaanRestApi\PhpClient\Model\GetNodeAllOfEmbedded|null $embedded embedded
     *
     * @return self
     */
    public function setEmbedded($embedded)
    {
        if (is_null($embedded)) {
            throw new \InvalidArgumentException('non-nullable embedded cannot be null');
        }
        $this->container['embedded'] = $embedded;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


