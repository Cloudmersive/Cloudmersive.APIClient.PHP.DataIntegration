# cloudmersive_video_api_client
The video APIs help you convert, encode, and transcode videos.

[Cloudmersive Video and Media Services API](https://cloudmersive.com/video-and-media-services-api) - Convert and encode video and media files and content between file formats. On-demand.

- API version: v1
- Package version: 1.0.2


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
      "url": "https://github.com/cloudmersive/cloudmersive_video_api_client.git"
    }
  ],
  "require": {
    "cloudmersive/cloudmersive_video_api_client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/cloudmersive_video_api_client/vendor/autoload.php');
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

$apiInstance = new Swagger\Client\Api\AudioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_file = "/path/to/file.txt"; // \SplFileObject | Input file to perform the operation on.
$file_url = "file_url_example"; // string | Optional; URL of an audio file being used for conversion. Use this option for files larger than 2GB.
$bit_rate = "bit_rate_example"; // string | Optional; Specify the desired bitrate of the converted audio file in kilobytes per second (kB/s). Value may be between 48 and 1,411. By default, the optimal bitrate will be chosen automatically.

try {
    $result = $apiInstance->audioConvertToAac($input_file, $file_url, $bit_rate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudioApi->audioConvertToAac: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.cloudmersive.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AudioApi* | [**audioConvertToAac**](docs/Api/AudioApi.md#audioconverttoaac) | **POST** /audio/convert/to/aac | Convert Audio File to AAC format.
*AudioApi* | [**audioConvertToM4a**](docs/Api/AudioApi.md#audioconverttom4a) | **POST** /audio/convert/to/m4a | Convert Audio File to M4A format.
*AudioApi* | [**audioConvertToMp3**](docs/Api/AudioApi.md#audioconverttomp3) | **POST** /audio/convert/to/mp3 | Convert Audio File to MP3 format.
*AudioApi* | [**audioConvertToWav**](docs/Api/AudioApi.md#audioconverttowav) | **POST** /audio/convert/to/wav | Convert Audio File to WAV format.
*VideoApi* | [**videoConvertToGif**](docs/Api/VideoApi.md#videoconverttogif) | **POST** /video/convert/to/gif | Convert Video to Animated GIF format.
*VideoApi* | [**videoConvertToMov**](docs/Api/VideoApi.md#videoconverttomov) | **POST** /video/convert/to/mov | Convert Video to MOV format.
*VideoApi* | [**videoConvertToMp4**](docs/Api/VideoApi.md#videoconverttomp4) | **POST** /video/convert/to/mp4 | Convert Video to MP4 format.
*VideoApi* | [**videoConvertToStillFrames**](docs/Api/VideoApi.md#videoconverttostillframes) | **POST** /video/convert/to/still-frames | Convert Video to PNG Still Frames.
*VideoApi* | [**videoConvertToWebm**](docs/Api/VideoApi.md#videoconverttowebm) | **POST** /video/convert/to/webm | Convert Video to WEBM format.
*VideoApi* | [**videoCutVideo**](docs/Api/VideoApi.md#videocutvideo) | **POST** /video/cut | Cut a Video to a Shorter Length
*VideoApi* | [**videoGetInfo**](docs/Api/VideoApi.md#videogetinfo) | **POST** /video/convert/get-info | Get detailed information about a video or audio file
*VideoApi* | [**videoResizeVideo**](docs/Api/VideoApi.md#videoresizevideo) | **POST** /video/resize/preserveAspectRatio | Resizes a Video Preserving the Original Aspect Ratio.
*VideoApi* | [**videoResizeVideoSimple**](docs/Api/VideoApi.md#videoresizevideosimple) | **POST** /video/resize/target | Resizes a Video without Preserving Aspect Ratio.
*VideoApi* | [**videoScanForNsfw**](docs/Api/VideoApi.md#videoscanfornsfw) | **POST** /video/scan/nsfw | Scan a Video for NSFW content.
*VideoApi* | [**videoSplitVideo**](docs/Api/VideoApi.md#videosplitvideo) | **POST** /video/split | Split a Video into Two Shorter Videos


## Documentation For Models

 - [MediaInformation](docs/Model/MediaInformation.md)
 - [NsfwResult](docs/Model/NsfwResult.md)
 - [NsfwScannedFrame](docs/Model/NsfwScannedFrame.md)
 - [SplitVideoResult](docs/Model/SplitVideoResult.md)
 - [StillFrame](docs/Model/StillFrame.md)
 - [StillFramesResult](docs/Model/StillFramesResult.md)
 - [VideoFile](docs/Model/VideoFile.md)


## Documentation For Authorization


## Apikey

- **Type**: API key
- **API key parameter name**: Apikey
- **Location**: HTTP header


## Author




