# NFQ\KunstmaanRestApi\PhpClient\RedirectApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getRedirects()**](RedirectApi.md#getRedirects) | **GET** /api/redirects | Retrieve form submissions paginated |


## `getRedirects()`

```php
getRedirects($page, $limit): \NFQ\KunstmaanRestApi\PhpClient\Model\ListRedirect
```

Retrieve form submissions paginated

Get all redirects

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = NFQ\KunstmaanRestApi\PhpClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NFQ\KunstmaanRestApi\PhpClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new NFQ\KunstmaanRestApi\PhpClient\Api\RedirectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = '1'; // string | The current page
$limit = '20'; // string | Amount of results (default 20)

try {
    $result = $apiInstance->getRedirects($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RedirectApi->getRedirects: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **string**| The current page | [optional] [default to &#39;1&#39;] |
| **limit** | **string**| Amount of results (default 20) | [optional] [default to &#39;20&#39;] |

### Return type

[**\NFQ\KunstmaanRestApi\PhpClient\Model\ListRedirect**](../Model/ListRedirect.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)