<?php
/**
 * BackupConvertApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Data Integration API
 *
 * Easily and directly query database backup files, convert into other file formats.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * BackupConvertApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BackupConvertApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation dataintegrationBackupConvertMssqlBakGetTablesPost
     *
     * Lists all tables stored in a SQL Server Backup (.BAK) file
     *
     * @param  \SplFileObject $input_file Input file to perform the operation on (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\MssqlBakEnumerateTablesResult
     */
    public function dataintegrationBackupConvertMssqlBakGetTablesPost($input_file = null)
    {
        list($response) = $this->dataintegrationBackupConvertMssqlBakGetTablesPostWithHttpInfo($input_file);
        return $response;
    }

    /**
     * Operation dataintegrationBackupConvertMssqlBakGetTablesPostWithHttpInfo
     *
     * Lists all tables stored in a SQL Server Backup (.BAK) file
     *
     * @param  \SplFileObject $input_file Input file to perform the operation on (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\MssqlBakEnumerateTablesResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function dataintegrationBackupConvertMssqlBakGetTablesPostWithHttpInfo($input_file = null)
    {
        $returnType = '\Swagger\Client\Model\MssqlBakEnumerateTablesResult';
        $request = $this->dataintegrationBackupConvertMssqlBakGetTablesPostRequest($input_file);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\MssqlBakEnumerateTablesResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation dataintegrationBackupConvertMssqlBakGetTablesPostAsync
     *
     * Lists all tables stored in a SQL Server Backup (.BAK) file
     *
     * @param  \SplFileObject $input_file Input file to perform the operation on (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function dataintegrationBackupConvertMssqlBakGetTablesPostAsync($input_file = null)
    {
        return $this->dataintegrationBackupConvertMssqlBakGetTablesPostAsyncWithHttpInfo($input_file)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation dataintegrationBackupConvertMssqlBakGetTablesPostAsyncWithHttpInfo
     *
     * Lists all tables stored in a SQL Server Backup (.BAK) file
     *
     * @param  \SplFileObject $input_file Input file to perform the operation on (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function dataintegrationBackupConvertMssqlBakGetTablesPostAsyncWithHttpInfo($input_file = null)
    {
        $returnType = '\Swagger\Client\Model\MssqlBakEnumerateTablesResult';
        $request = $this->dataintegrationBackupConvertMssqlBakGetTablesPostRequest($input_file);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'dataintegrationBackupConvertMssqlBakGetTablesPost'
     *
     * @param  \SplFileObject $input_file Input file to perform the operation on (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function dataintegrationBackupConvertMssqlBakGetTablesPostRequest($input_file = null)
    {

        $resourcePath = '/dataintegration/backup/convert/mssql/bak/get/tables';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // form params
        if ($input_file !== null) {
            $multipart = true;
            $formParams['inputFile'] = \GuzzleHttp\Psr7\try_fopen(ObjectSerializer::toFormValue($input_file), 'rb');
        }
        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['text/plain', 'application/json', 'text/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['text/plain', 'application/json', 'text/json'],
                ['multipart/form-data']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Apikey');
        if ($apiKey !== null) {
            $headers['Apikey'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation dataintegrationBackupConvertMssqlBakToCsvPost
     *
     * Converts a SQL Server Backup (.BAK) file into CSV for a specified table
     *
     * @param  string $table_name Name of the table to return (optional)
     * @param  \SplFileObject $input_file Input file to perform the operation on (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return string
     */
    public function dataintegrationBackupConvertMssqlBakToCsvPost($table_name = null, $input_file = null)
    {
        list($response) = $this->dataintegrationBackupConvertMssqlBakToCsvPostWithHttpInfo($table_name, $input_file);
        return $response;
    }

    /**
     * Operation dataintegrationBackupConvertMssqlBakToCsvPostWithHttpInfo
     *
     * Converts a SQL Server Backup (.BAK) file into CSV for a specified table
     *
     * @param  string $table_name Name of the table to return (optional)
     * @param  \SplFileObject $input_file Input file to perform the operation on (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of string, HTTP status code, HTTP response headers (array of strings)
     */
    public function dataintegrationBackupConvertMssqlBakToCsvPostWithHttpInfo($table_name = null, $input_file = null)
    {
        $returnType = 'string';
        $request = $this->dataintegrationBackupConvertMssqlBakToCsvPostRequest($table_name, $input_file);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'string',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation dataintegrationBackupConvertMssqlBakToCsvPostAsync
     *
     * Converts a SQL Server Backup (.BAK) file into CSV for a specified table
     *
     * @param  string $table_name Name of the table to return (optional)
     * @param  \SplFileObject $input_file Input file to perform the operation on (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function dataintegrationBackupConvertMssqlBakToCsvPostAsync($table_name = null, $input_file = null)
    {
        return $this->dataintegrationBackupConvertMssqlBakToCsvPostAsyncWithHttpInfo($table_name, $input_file)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation dataintegrationBackupConvertMssqlBakToCsvPostAsyncWithHttpInfo
     *
     * Converts a SQL Server Backup (.BAK) file into CSV for a specified table
     *
     * @param  string $table_name Name of the table to return (optional)
     * @param  \SplFileObject $input_file Input file to perform the operation on (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function dataintegrationBackupConvertMssqlBakToCsvPostAsyncWithHttpInfo($table_name = null, $input_file = null)
    {
        $returnType = 'string';
        $request = $this->dataintegrationBackupConvertMssqlBakToCsvPostRequest($table_name, $input_file);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'dataintegrationBackupConvertMssqlBakToCsvPost'
     *
     * @param  string $table_name Name of the table to return (optional)
     * @param  \SplFileObject $input_file Input file to perform the operation on (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function dataintegrationBackupConvertMssqlBakToCsvPostRequest($table_name = null, $input_file = null)
    {

        $resourcePath = '/dataintegration/backup/convert/mssql/bak/to/csv';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($table_name !== null) {
            $headerParams['tableName'] = ObjectSerializer::toHeaderValue($table_name);
        }


        // form params
        if ($input_file !== null) {
            $multipart = true;
            $formParams['inputFile'] = \GuzzleHttp\Psr7\try_fopen(ObjectSerializer::toFormValue($input_file), 'rb');
        }
        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['text/csv']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['text/csv'],
                ['multipart/form-data']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Apikey');
        if ($apiKey !== null) {
            $headers['Apikey'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
