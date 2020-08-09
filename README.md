# cloudmersive_dataintegration_api_client
Easily and directly query database backup files, convert into other file formats.

[Cloudmersive Data Integration API](https://cloudmersive.com/data-integration-api) - Easily and directly query database backup files, convert into other file formats.

- API version: v1
- Package version: 1.0.1


## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/cloudmersive/cloudmersive_dataintegration_api_client.git"
    }
  ],
  "require": {
    "cloudmersive/cloudmersive_dataintegration_api_client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/cloudmersive_dataintegration_api_client/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\BackupConvertApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_file = "/path/to/file.txt"; // \SplFileObject | Input file to perform the operation on

try {
    $result = $apiInstance->dataintegrationBackupConvertMssqlBakGetTablesPost($input_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupConvertApi->dataintegrationBackupConvertMssqlBakGetTablesPost: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BackupConvertApi* | [**dataintegrationBackupConvertMssqlBakGetTablesPost**](docs/Api/BackupConvertApi.md#dataintegrationbackupconvertmssqlbakgettablespost) | **POST** /dataintegration/backup/convert/mssql/bak/get/tables | Lists all tables stored in a SQL Server Backup (.BAK) file
*BackupConvertApi* | [**dataintegrationBackupConvertMssqlBakToCsvPost**](docs/Api/BackupConvertApi.md#dataintegrationbackupconvertmssqlbaktocsvpost) | **POST** /dataintegration/backup/convert/mssql/bak/to/csv | Converts a SQL Server Backup (.BAK) file into CSV for a specified table


## Documentation For Models

 - [MssqlBakEnumerateTablesResult](docs/Model/MssqlBakEnumerateTablesResult.md)
 - [MssqlTable](docs/Model/MssqlTable.md)


## Documentation For Authorization


## Apikey

- **Type**: API key
- **API key parameter name**: Apikey
- **Location**: HTTP header


## Author




