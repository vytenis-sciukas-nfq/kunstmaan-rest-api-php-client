# OpenAPI\Client\PagesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPage()**](PagesApi.md#getPage) | **GET** /api/public/pages/{id} | Get a page by node translation ID |
| [**getPages()**](PagesApi.md#getPages) | **GET** /api/public/pages | Retrieve nodes paginated |
| [**postApiPage()**](PagesApi.md#postApiPage) | **POST** /api/pages | Creates a ApiPage |
| [**putApiPage()**](PagesApi.md#putApiPage) | **PUT** /api/pages/{id} | Update a ApiPage |


## `getPage()`

```php
getPage($id): \OpenAPI\Client\Model\GetApiPage
```

Get a page by node translation ID

Get a page by node translation ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PagesApi(
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

[**\OpenAPI\Client\Model\GetApiPage**](../Model/GetApiPage.md)

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
getPages($page, $limit, $type, $locale, $internal_name, $node_id, $online, $version_type): \OpenAPI\Client\Model\ApiPage
```

Retrieve nodes paginated

Get a pages of a certain type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = '1'; // string | The current page
$limit = '20'; // string | Amount of results (default 20)
$type = 'type_example'; // string | The FQCN of the page
$locale = 'locale_example'; // string | The language of your content
$internal_name = 'internal_name_example'; // string | The internal name of the page
$node_id = 'node_id_example'; // string | Node id
$online = 'true'; // string | Include only online nodes
$version_type = 'version_type_example'; // string | VersionType (public or draft)

try {
    $result = $apiInstance->getPages($page, $limit, $type, $locale, $internal_name, $node_id, $online, $version_type);
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
| **internal_name** | **string**| The internal name of the page | [optional] |
| **node_id** | **string**| Node id | [optional] |
| **online** | **string**| Include only online nodes | [optional] [default to &#39;true&#39;] |
| **version_type** | **string**| VersionType (public or draft) | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiPage**](../Model/ApiPage.md)

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
postApiPage($post_api_page): \OpenAPI\Client\Model\ApiPage
```

Creates a ApiPage

Creates a ApiPage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_api_page = new \OpenAPI\Client\Model\PostApiPage(); // \OpenAPI\Client\Model\PostApiPage | apiPage

try {
    $result = $apiInstance->postApiPage($post_api_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PagesApi->postApiPage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_api_page** | [**\OpenAPI\Client\Model\PostApiPage**](../Model/PostApiPage.md)| apiPage | [optional] |

### Return type

[**\OpenAPI\Client\Model\ApiPage**](../Model/ApiPage.md)

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
putApiPage($id, $api_page): \OpenAPI\Client\Model\PutApiPage
```

Update a ApiPage

Update a ApiPage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The node translation ID
$api_page = new \OpenAPI\Client\Model\ApiPage(); // \OpenAPI\Client\Model\ApiPage | apiPage

try {
    $result = $apiInstance->putApiPage($id, $api_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PagesApi->putApiPage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The node translation ID | |
| **api_page** | [**\OpenAPI\Client\Model\ApiPage**](../Model/ApiPage.md)| apiPage | [optional] |

### Return type

[**\OpenAPI\Client\Model\PutApiPage**](../Model/PutApiPage.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
