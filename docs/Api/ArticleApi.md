# NFQ\KunstmaanRestApi\PhpClient\ArticleApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAuthors()**](ArticleApi.md#getAuthors) | **GET** /api/authors/{type} | Retrieve form submissions paginated |


## `getAuthors()`

```php
getAuthors($type, $page, $limit): \NFQ\KunstmaanRestApi\PhpClient\Model\ListAuthor
```

Retrieve form submissions paginated

get all authors

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = NFQ\KunstmaanRestApi\PhpClient\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NFQ\KunstmaanRestApi\PhpClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new NFQ\KunstmaanRestApi\PhpClient\Api\ArticleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | The type of author
$page = '1'; // string | The current page
$limit = '20'; // string | Amount of results (default 20)

try {
    $result = $apiInstance->getAuthors($type, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticleApi->getAuthors: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**| The type of author | |
| **page** | **string**| The current page | [optional] [default to &#39;1&#39;] |
| **limit** | **string**| Amount of results (default 20) | [optional] [default to &#39;20&#39;] |

### Return type

[**\NFQ\KunstmaanRestApi\PhpClient\Model\ListAuthor**](../Model/ListAuthor.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
