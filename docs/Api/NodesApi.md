# NFQ\KunstmaanRestApi\PhpClient\NodesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getNode()**](NodesApi.md#getNode) | **GET** /api/nodes/{id} | Retrieve a single node |
| [**getNodeChildren()**](NodesApi.md#getNodeChildren) | **GET** /api/nodes/{id}/children | Retrieve a single node&#39;s children |
| [**getNodeNested()**](NodesApi.md#getNodeNested) | **GET** /api/nodes/{id}/nested | Retrieve a nested nodes |
| [**getNodeParent()**](NodesApi.md#getNodeParent) | **GET** /api/nodes/{id}/parent | Retrieve a single node&#39;s parent |
| [**getNodes()**](NodesApi.md#getNodes) | **GET** /api/nodes | Retrieve nodes paginated |


## `getNode()`

```php
getNode($id): \NFQ\KunstmaanRestApi\PhpClient\Model\Node
```

Retrieve a single node

Get a node by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = NFQ\KunstmaanRestApi\PhpClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NFQ\KunstmaanRestApi\PhpClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new NFQ\KunstmaanRestApi\PhpClient\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The node ID

try {
    $result = $apiInstance->getNode($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->getNode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The node ID | |

### Return type

[**\NFQ\KunstmaanRestApi\PhpClient\Model\Node**](../Model/Node.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNodeChildren()`

```php
getNodeChildren($id, $includeChildren, $page, $limit): \NFQ\KunstmaanRestApi\PhpClient\Model\PaginatedNodeList
```

Retrieve a single node's children

Retrieve a single node's children

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = NFQ\KunstmaanRestApi\PhpClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NFQ\KunstmaanRestApi\PhpClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new NFQ\KunstmaanRestApi\PhpClient\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The node ID
$includeChildren = 'false'; // string | Do you want to include node children?
$page = '1'; // string | The current page
$limit = '20'; // string | Amount of results (default 20)

try {
    $result = $apiInstance->getNodeChildren($id, $includeChildren, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->getNodeChildren: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The node ID | |
| **includeChildren** | **string**| Do you want to include node children? | [default to &#39;false&#39;] |
| **page** | **string**| The current page | [default to &#39;1&#39;] |
| **limit** | **string**| Amount of results (default 20) | [default to &#39;20&#39;] |

### Return type

[**\NFQ\KunstmaanRestApi\PhpClient\Model\PaginatedNodeList**](../Model/PaginatedNodeList.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNodeNested()`

```php
getNodeNested($id): \NFQ\KunstmaanRestApi\PhpClient\Model\NestedNodeList
```

Retrieve a nested nodes

Retrieve a single node's children

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = NFQ\KunstmaanRestApi\PhpClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NFQ\KunstmaanRestApi\PhpClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new NFQ\KunstmaanRestApi\PhpClient\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The node ID, if 0 will return all nodes

try {
    $result = $apiInstance->getNodeNested($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->getNodeNested: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The node ID, if 0 will return all nodes | |

### Return type

[**\NFQ\KunstmaanRestApi\PhpClient\Model\NestedNodeList**](../Model/NestedNodeList.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNodeParent()`

```php
getNodeParent($id): \NFQ\KunstmaanRestApi\PhpClient\Model\Node
```

Retrieve a single node's parent

Retrieve a single node's parent

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = NFQ\KunstmaanRestApi\PhpClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NFQ\KunstmaanRestApi\PhpClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new NFQ\KunstmaanRestApi\PhpClient\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The node ID

try {
    $result = $apiInstance->getNodeParent($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->getNodeParent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The node ID | |

### Return type

[**\NFQ\KunstmaanRestApi\PhpClient\Model\Node**](../Model/Node.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNodes()`

```php
getNodes($page, $limit, $internalName, $locale, $hiddenFromNav, $refEntityName, $includeChildren): \NFQ\KunstmaanRestApi\PhpClient\Model\PaginatedNodeList
```

Retrieve nodes paginated

Get all nodes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = NFQ\KunstmaanRestApi\PhpClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NFQ\KunstmaanRestApi\PhpClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new NFQ\KunstmaanRestApi\PhpClient\Api\NodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = '1'; // string | The current page
$limit = '20'; // string | Amount of results (default 20)
$internalName = 'internalName_example'; // string | The internal name of the node
$locale = 'locale_example'; // string | Locale
$hiddenFromNav = 'hiddenFromNav_example'; // string | If true, only nodes hidden from nav will be returned
$refEntityName = 'refEntityName_example'; // string | Which pages you want to have returned
$includeChildren = 'includeChildren_example'; // string | Do you want to include node children?

try {
    $result = $apiInstance->getNodes($page, $limit, $internalName, $locale, $hiddenFromNav, $refEntityName, $includeChildren);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->getNodes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **string**| The current page | [optional] [default to &#39;1&#39;] |
| **limit** | **string**| Amount of results (default 20) | [optional] [default to &#39;20&#39;] |
| **internalName** | **string**| The internal name of the node | [optional] |
| **locale** | **string**| Locale | [optional] |
| **hiddenFromNav** | **string**| If true, only nodes hidden from nav will be returned | [optional] |
| **refEntityName** | **string**| Which pages you want to have returned | [optional] |
| **includeChildren** | **string**| Do you want to include node children? | [optional] |

### Return type

[**\NFQ\KunstmaanRestApi\PhpClient\Model\PaginatedNodeList**](../Model/PaginatedNodeList.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
