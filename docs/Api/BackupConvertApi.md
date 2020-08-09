# Swagger\Client\BackupConvertApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dataintegrationBackupConvertMssqlBakGetTablesPost**](BackupConvertApi.md#dataintegrationBackupConvertMssqlBakGetTablesPost) | **POST** /dataintegration/backup/convert/mssql/bak/get/tables | Lists all tables stored in a SQL Server Backup (.BAK) file
[**dataintegrationBackupConvertMssqlBakToCsvPost**](BackupConvertApi.md#dataintegrationBackupConvertMssqlBakToCsvPost) | **POST** /dataintegration/backup/convert/mssql/bak/to/csv | Converts a SQL Server Backup (.BAK) file into CSV for a specified table


# **dataintegrationBackupConvertMssqlBakGetTablesPost**
> \Swagger\Client\Model\MssqlBakEnumerateTablesResult dataintegrationBackupConvertMssqlBakGetTablesPost($input_file)

Lists all tables stored in a SQL Server Backup (.BAK) file

### Example
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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **input_file** | **\SplFileObject**| Input file to perform the operation on | [optional]

### Return type

[**\Swagger\Client\Model\MssqlBakEnumerateTablesResult**](../Model/MssqlBakEnumerateTablesResult.md)

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataintegrationBackupConvertMssqlBakToCsvPost**
> string dataintegrationBackupConvertMssqlBakToCsvPost($table_name, $input_file)

Converts a SQL Server Backup (.BAK) file into CSV for a specified table

Input the target table to extract the data as a CSV format file.  Supports a wide array of SQL Server .BAK files and SQL Server backup file versions.  Consumes 1 API call per MB of input data.

### Example
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
$table_name = "table_name_example"; // string | Name of the table to return
$input_file = "/path/to/file.txt"; // \SplFileObject | Input file to perform the operation on

try {
    $result = $apiInstance->dataintegrationBackupConvertMssqlBakToCsvPost($table_name, $input_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupConvertApi->dataintegrationBackupConvertMssqlBakToCsvPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **table_name** | **string**| Name of the table to return | [optional]
 **input_file** | **\SplFileObject**| Input file to perform the operation on | [optional]

### Return type

**string**

### Authorization

[Apikey](../../README.md#Apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

