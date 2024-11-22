# OpenAPI\Client\TranslationsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createTranslation()**](TranslationsApi.md#createTranslation) | **POST** /api/translations/{domain} |  |
| [**deprecateTranslation()**](TranslationsApi.md#deprecateTranslation) | **PUT** /api/translations/deprecate/{domain} |  |
| [**disableTranslation()**](TranslationsApi.md#disableTranslation) | **PUT** /api/translations/disable/{domain} |  |
| [**enableTranslation()**](TranslationsApi.md#enableTranslation) | **PUT** /api/translations/enable/{domain} |  |
| [**getTranslation()**](TranslationsApi.md#getTranslation) | **GET** /api/public/translations/{domain}/{keyword} |  |
| [**getTranslations()**](TranslationsApi.md#getTranslations) | **GET** /api/public/translations |  |
| [**getTranslationsByDomain()**](TranslationsApi.md#getTranslationsByDomain) | **GET** /api/public/translations/{domain}/ |  |


## `createTranslation()`

```php
createTranslation($domain, $post_translation, $force): SingleTranslation[]
```



Create multiple translations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TranslationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = 'domain_example'; // string | the domain of the languages you want
$post_translation = array(new \OpenAPI\Client\Model\PostTranslation()); // PostTranslation[] | The posted translations
$force = 'force_example'; // string | Force=true will overwrite existing translations, otherwise will be skipped

try {
    $result = $apiInstance->createTranslation($domain, $post_translation, $force);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationsApi->createTranslation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| the domain of the languages you want | |
| **post_translation** | [**PostTranslation[]**](../Model/PostTranslation.md)| The posted translations | |
| **force** | **string**| Force&#x3D;true will overwrite existing translations, otherwise will be skipped | [optional] |

### Return type

[**SingleTranslation[]**](../Model/SingleTranslation.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deprecateTranslation()`

```php
deprecateTranslation($domain, $deprecate_keyword)
```



deprecate translations by keyword

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TranslationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = 'domain_example'; // string | the domain of the languages you want
$deprecate_keyword = array(new \OpenAPI\Client\Model\DeprecateKeyword()); // DeprecateKeyword[] | The posted translations

try {
    $apiInstance->deprecateTranslation($domain, $deprecate_keyword);
} catch (Exception $e) {
    echo 'Exception when calling TranslationsApi->deprecateTranslation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| the domain of the languages you want | |
| **deprecate_keyword** | [**DeprecateKeyword[]**](../Model/DeprecateKeyword.md)| The posted translations | |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `disableTranslation()`

```php
disableTranslation($domain, $disabling_date)
```



disable translations by keyword

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TranslationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = 'domain_example'; // string | the domain of the languages you want
$disabling_date = new \OpenAPI\Client\Model\DisablingDate(); // \OpenAPI\Client\Model\DisablingDate | The posted translations

try {
    $apiInstance->disableTranslation($domain, $disabling_date);
} catch (Exception $e) {
    echo 'Exception when calling TranslationsApi->disableTranslation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| the domain of the languages you want | |
| **disabling_date** | [**\OpenAPI\Client\Model\DisablingDate**](../Model/DisablingDate.md)| The posted translations | |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enableTranslation()`

```php
enableTranslation($domain, $deprecate_keyword)
```



re-enable translations by keyword

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TranslationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = 'domain_example'; // string | the domain of the languages you want
$deprecate_keyword = array(new \OpenAPI\Client\Model\DeprecateKeyword()); // DeprecateKeyword[] | The posted translations

try {
    $apiInstance->enableTranslation($domain, $deprecate_keyword);
} catch (Exception $e) {
    echo 'Exception when calling TranslationsApi->enableTranslation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| the domain of the languages you want | |
| **deprecate_keyword** | [**DeprecateKeyword[]**](../Model/DeprecateKeyword.md)| The posted translations | |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTranslation()`

```php
getTranslation($keyword, $domain, $locale): \OpenAPI\Client\Model\SingleTranslation
```



Get a translation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TranslationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$keyword = 'keyword_example'; // string | the keyword of the translation you want
$domain = 'domain_example'; // string | the domain of the languages you want
$locale = 'locale_example'; // string | the locale of the languages you want

try {
    $result = $apiInstance->getTranslation($keyword, $domain, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationsApi->getTranslation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **keyword** | **string**| the keyword of the translation you want | |
| **domain** | **string**| the domain of the languages you want | |
| **locale** | **string**| the locale of the languages you want | [optional] |

### Return type

[**\OpenAPI\Client\Model\SingleTranslation**](../Model/SingleTranslation.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTranslations()`

```php
getTranslations($locale): SingleTranslation[]
```



Get a list of all translations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TranslationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$locale = 'locale_example'; // string | the locale of the languages you want

try {
    $result = $apiInstance->getTranslations($locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationsApi->getTranslations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **locale** | **string**| the locale of the languages you want | [optional] |

### Return type

[**SingleTranslation[]**](../Model/SingleTranslation.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTranslationsByDomain()`

```php
getTranslationsByDomain($domain, $locale): SingleTranslation[]
```



Get a list of all translations by domain only

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TranslationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = 'domain_example'; // string | the domain of the languages you want
$locale = 'locale_example'; // string | the locale of the languages you want

try {
    $result = $apiInstance->getTranslationsByDomain($domain, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationsApi->getTranslationsByDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| the domain of the languages you want | |
| **locale** | **string**| the locale of the languages you want | [optional] |

### Return type

[**SingleTranslation[]**](../Model/SingleTranslation.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
