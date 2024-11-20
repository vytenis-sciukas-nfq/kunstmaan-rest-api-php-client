# NFQ KunstmaanRestApi PhpClient

Šiaulių Bankas REST API provides secure and efficient access to application data, enabling seamless data synchronization between Šiaulių Bankas and external systems.


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/NFQ KunstmaanRestApi PhpClient/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ArticleApi* | [**getAuthors**](docs/Api/ArticleApi.md#getauthors) | **GET** /api/authors/{type} | Retrieve form submissions paginated
*ConfigApi* | [**getConfig**](docs/Api/ConfigApi.md#getconfig) | **GET** /api/config/{internalName} | Retrieve form submissions paginated
*FormSubmissionApi* | [**getFormSubmissions**](docs/Api/FormSubmissionApi.md#getformsubmissions) | **GET** /api/form-submission | Retrieve form submissions paginated
*MediaApi* | [**deleteFolder**](docs/Api/MediaApi.md#deletefolder) | **DELETE** /api/folder/{id} | deletes Folder
*MediaApi* | [**deleteMedia**](docs/Api/MediaApi.md#deletemedia) | **DELETE** /api/media/{id} | deletes Media
*MediaApi* | [**getFolder**](docs/Api/MediaApi.md#getfolder) | **GET** /api/folder | Retrieve folders paginated
*MediaApi* | [**getMedia**](docs/Api/MediaApi.md#getmedia) | **GET** /api/media | Retrieve media paginated
*MediaApi* | [**getMediaItem**](docs/Api/MediaApi.md#getmediaitem) | **GET** /api/media/{id} | Retrieve a single media
*MediaApi* | [**moveFolder**](docs/Api/MediaApi.md#movefolder) | **PUT** /api/folder/{id}/{targetId} | move Folder
*MediaApi* | [**postFolder**](docs/Api/MediaApi.md#postfolder) | **POST** /api/folder/{parentId} | Creates a new Folder
*MediaApi* | [**postMedia**](docs/Api/MediaApi.md#postmedia) | **POST** /api/media | Creates a new Media
*MediaApi* | [**putFolder**](docs/Api/MediaApi.md#putfolder) | **PUT** /api/folder/{id} | updates Folder
*MediaApi* | [**updateMedia**](docs/Api/MediaApi.md#updatemedia) | **PUT** /api/media/{id} | updates a Media
*MenuApi* | [**addMenuItem**](docs/Api/MenuApi.md#addmenuitem) | **POST** /api/menu/{id}/add | Creates a new Menu item
*MenuApi* | [**deleteMenu**](docs/Api/MenuApi.md#deletemenu) | **DELETE** /api/menu/{id} | deletes Menu
*MenuApi* | [**deleteMenuItem**](docs/Api/MenuApi.md#deletemenuitem) | **DELETE** /api/menu-item/{id} | deletes MenuItem
*MenuApi* | [**getMenuItems**](docs/Api/MenuApi.md#getmenuitems) | **GET** /api/menu/{id}/items | Retrieve menu items paginated
*MenuApi* | [**getMenus**](docs/Api/MenuApi.md#getmenus) | **GET** /api/menu | Retrieve menu paginated
*MenuApi* | [**postMenu**](docs/Api/MenuApi.md#postmenu) | **POST** /api/menu | Creates a new Menu
*MenuApi* | [**putMenu**](docs/Api/MenuApi.md#putmenu) | **PUT** /api/menu/{id} | Update a menu
*MenuApi* | [**putMenuItem**](docs/Api/MenuApi.md#putmenuitem) | **PUT** /api/menu-item/{id} | Update a menuItem
*NodesApi* | [**getNode**](docs/Api/NodesApi.md#getnode) | **GET** /api/nodes/{id} | Retrieve a single node
*NodesApi* | [**getNodeChildren**](docs/Api/NodesApi.md#getnodechildren) | **GET** /api/nodes/{id}/children | Retrieve a single node&#39;s children
*NodesApi* | [**getNodeParent**](docs/Api/NodesApi.md#getnodeparent) | **GET** /api/nodes/{id}/parent | Retrieve a single node&#39;s parent
*NodesApi* | [**getNodes**](docs/Api/NodesApi.md#getnodes) | **GET** /api/nodes | Retrieve nodes paginated
*PagesApi* | [**getPage**](docs/Api/PagesApi.md#getpage) | **GET** /api/public/pages/{id} | Get a page by node translation ID
*PagesApi* | [**getPages**](docs/Api/PagesApi.md#getpages) | **GET** /api/public/pages | Retrieve nodes paginated
*PagesApi* | [**postApiPage**](docs/Api/PagesApi.md#postapipage) | **POST** /api/pages | Creates a ApiPage
*PagesApi* | [**putApiPage**](docs/Api/PagesApi.md#putapipage) | **PUT** /api/pages/{id} | Update a ApiPage
*RedirectApi* | [**getRedirects**](docs/Api/RedirectApi.md#getredirects) | **GET** /api/redirects | Retrieve form submissions paginated
*TranslationsApi* | [**createTranslation**](docs/Api/TranslationsApi.md#createtranslation) | **POST** /api/translations/{domain} | 
*TranslationsApi* | [**deprecateTranslation**](docs/Api/TranslationsApi.md#deprecatetranslation) | **PUT** /api/translations/deprecate/{domain} | 
*TranslationsApi* | [**disableTranslation**](docs/Api/TranslationsApi.md#disabletranslation) | **PUT** /api/translations/disable/{domain} | 
*TranslationsApi* | [**enableTranslation**](docs/Api/TranslationsApi.md#enabletranslation) | **PUT** /api/translations/enable/{domain} | 
*TranslationsApi* | [**getTranslation**](docs/Api/TranslationsApi.md#gettranslation) | **GET** /api/public/translations/{domain}/{keyword} | 
*TranslationsApi* | [**getTranslations**](docs/Api/TranslationsApi.md#gettranslations) | **GET** /api/public/translations | 
*TranslationsApi* | [**getTranslationsByDomain**](docs/Api/TranslationsApi.md#gettranslationsbydomain) | **GET** /api/public/translations/{domain}/ | 

## Models

- [ApiContext](docs/Model/ApiContext.md)
- [ApiEntity](docs/Model/ApiEntity.md)
- [ApiPage](docs/Model/ApiPage.md)
- [ApiPagePart](docs/Model/ApiPagePart.md)
- [ApiPageTemplate](docs/Model/ApiPageTemplate.md)
- [Author](docs/Model/Author.md)
- [DeprecateKeyword](docs/Model/DeprecateKeyword.md)
- [DisablingDate](docs/Model/DisablingDate.md)
- [ErrorModel](docs/Model/ErrorModel.md)
- [Folder](docs/Model/Folder.md)
- [FolderList](docs/Model/FolderList.md)
- [FormSubmission](docs/Model/FormSubmission.md)
- [FormSubmissionList](docs/Model/FormSubmissionList.md)
- [GetApiPage](docs/Model/GetApiPage.md)
- [GetNode](docs/Model/GetNode.md)
- [GetNodeTranslation](docs/Model/GetNodeTranslation.md)
- [ListAuthor](docs/Model/ListAuthor.md)
- [ListRedirect](docs/Model/ListRedirect.md)
- [Media](docs/Model/Media.md)
- [MediaList](docs/Model/MediaList.md)
- [Menu](docs/Model/Menu.md)
- [MenuItem](docs/Model/MenuItem.md)
- [MenuItemList](docs/Model/MenuItemList.md)
- [MenuList](docs/Model/MenuList.md)
- [Node](docs/Model/Node.md)
- [NodeTranslation](docs/Model/NodeTranslation.md)
- [NodeVersion](docs/Model/NodeVersion.md)
- [PostApiPage](docs/Model/PostApiPage.md)
- [PostFolder](docs/Model/PostFolder.md)
- [PostMenu](docs/Model/PostMenu.md)
- [PostMenuItem](docs/Model/PostMenuItem.md)
- [PostNode](docs/Model/PostNode.md)
- [PostNodeTranslation](docs/Model/PostNodeTranslation.md)
- [PostTranslation](docs/Model/PostTranslation.md)
- [PutApiPage](docs/Model/PutApiPage.md)
- [PutMedia](docs/Model/PutMedia.md)
- [PutMenuItem](docs/Model/PutMenuItem.md)
- [PutTranslation](docs/Model/PutTranslation.md)
- [Seo](docs/Model/Seo.md)
- [SingleConfig](docs/Model/SingleConfig.md)
- [SingleRedirect](docs/Model/SingleRedirect.md)
- [SingleTranslation](docs/Model/SingleTranslation.md)
- [UploadMedia](docs/Model/UploadMedia.md)

## Authorization

Authentication schemes defined for the API:
### ApiKeyAuth

- **Type**: API key
- **API key parameter name**: X-API-Key
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `0.1.0`
    - Package version: `1.0.0`
    - Generator version: `7.10.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
