# NFQ\KunstmaanRestApi\PhpClient\PagesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPage()**](PagesApi.md#getPage) | **GET** /api/public/pages/{id} | Get a page by node translation ID |
| [**getPages()**](PagesApi.md#getPages) | **GET** /api/public/pages | Retrieve nodes paginated |
| [**postApiPage()**](PagesApi.md#postApiPage) | **POST** /api/pages | Creates a ApiPage |
| [**putApiPage()**](PagesApi.md#putApiPage) | **PUT** /api/pages/{id} | Update a ApiPage |


## `getPage()`

```php
getPage($id): \NFQ\KunstmaanRestApi\PhpClient\Model\GetApiPage
```

Get a page by node translation ID

Get a page by node translation ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = NFQ\KunstmaanRestApi\PhpClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NFQ\KunstmaanRestApi\PhpClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new NFQ\KunstmaanRestApi\PhpClient\Api\PagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The node translation ID

try {
    $result = $apiInstance->getPage($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PagesApi->getPage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The node translation ID | |

### Return type

[**\NFQ\KunstmaanRestApi\PhpClient\Model\GetApiPage**](../Model/GetApiPage.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPages()`

```php
getPages($page, $limit, $type, $locale, $internalName, $nodeId, $online, $versionType): \NFQ\KunstmaanRestApi\PhpClient\Model\ApiPage
```

Retrieve nodes paginated

Get a pages of a certain type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = NFQ\KunstmaanRestApi\PhpClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NFQ\KunstmaanRestApi\PhpClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new NFQ\KunstmaanRestApi\PhpClient\Api\PagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = '1'; // string | The current page
$limit = '20'; // string | Amount of results (default 20)
$type = 'type_example'; // string | The FQCN of the page
$locale = 'locale_example'; // string | The language of your content
$internalName = 'internalName_example'; // string | The internal name of the page
$nodeId = 'nodeId_example'; // string | Node id
$online = 'true'; // string | Include only online nodes
$versionType = 'versionType_example'; // string | VersionType (public or draft)

try {
    $result = $apiInstance->getPages($page, $limit, $type, $locale, $internalName, $nodeId, $online, $versionType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PagesApi->getPages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **string**| The current page | [default to &#39;1&#39;] |
| **limit** | **string**| Amount of results (default 20) | [default to &#39;20&#39;] |
| **type** | **string**| The FQCN of the page | [optional] |
| **locale** | **string**| The language of your content | [optional] |
| **internalName** | **string**| The internal name of the page | [optional] |
| **nodeId** | **string**| Node id | [optional] |
| **online** | **string**| Include only online nodes | [optional] [default to &#39;true&#39;] |
| **versionType** | **string**| VersionType (public or draft) | [optional] |

### Return type

[**\NFQ\KunstmaanRestApi\PhpClient\Model\ApiPage**](../Model/ApiPage.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiPage()`

```php
postApiPage($postApiPage): \NFQ\KunstmaanRestApi\PhpClient\Model\ApiPage
```

Creates a ApiPage

Creates a ApiPage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = NFQ\KunstmaanRestApi\PhpClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NFQ\KunstmaanRestApi\PhpClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new NFQ\KunstmaanRestApi\PhpClient\Api\PagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$postApiPage = new \NFQ\KunstmaanRestApi\PhpClient\Model\PostApiPage(); // \NFQ\KunstmaanRestApi\PhpClient\Model\PostApiPage | apiPage

try {
    $result = $apiInstance->postApiPage($postApiPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PagesApi->postApiPage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **postApiPage** | [**\NFQ\KunstmaanRestApi\PhpClient\Model\PostApiPage**](../Model/PostApiPage.md)| apiPage | [optional] |

### Return type

[**\NFQ\KunstmaanRestApi\PhpClient\Model\ApiPage**](../Model/ApiPage.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putApiPage()`

```php
putApiPage($id, $apiPage): \NFQ\KunstmaanRestApi\PhpClient\Model\PutApiPage
```

Update a ApiPage

Update a ApiPage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = NFQ\KunstmaanRestApi\PhpClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NFQ\KunstmaanRestApi\PhpClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new NFQ\KunstmaanRestApi\PhpClient\Api\PagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The node translation ID
$apiPage = new \NFQ\KunstmaanRestApi\PhpClient\Model\ApiPage(); // \NFQ\KunstmaanRestApi\PhpClient\Model\ApiPage | apiPage

try {
    $result = $apiInstance->putApiPage($id, $apiPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PagesApi->putApiPage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The node translation ID | |
| **apiPage** | [**\NFQ\KunstmaanRestApi\PhpClient\Model\ApiPage**](../Model/ApiPage.md)| apiPage | [optional] |

### Return type

[**\NFQ\KunstmaanRestApi\PhpClient\Model\PutApiPage**](../Model/PutApiPage.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
