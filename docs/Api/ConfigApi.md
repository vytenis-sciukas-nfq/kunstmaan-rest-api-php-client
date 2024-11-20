# NFQ\KunstmaanRestApi\PhpClient\ConfigApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getConfig()**](ConfigApi.md#getConfig) | **GET** /api/config/{internalName} | Retrieve form submissions paginated |


## `getConfig()`

```php
getConfig($internalName): \NFQ\KunstmaanRestApi\PhpClient\Model\SingleConfig
```

Retrieve form submissions paginated

Get config by internal name

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = NFQ\KunstmaanRestApi\PhpClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NFQ\KunstmaanRestApi\PhpClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new NFQ\KunstmaanRestApi\PhpClient\Api\ConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$internalName = 'internalName_example'; // string

try {
    $result = $apiInstance->getConfig($internalName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigApi->getConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **internalName** | **string**|  | |

### Return type

[**\NFQ\KunstmaanRestApi\PhpClient\Model\SingleConfig**](../Model/SingleConfig.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
