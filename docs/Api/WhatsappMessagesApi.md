# YCloud\Client\WhatsappMessagesApi

All URIs are relative to https://api.ycloud.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**retrieve()**](WhatsappMessagesApi.md#retrieve) | **GET** /whatsapp/messages/{id} | Retrieve a message
[**send()**](WhatsappMessagesApi.md#send) | **POST** /whatsapp/messages | Enqueue a message
[**sendDirectly()**](WhatsappMessagesApi.md#sendDirectly) | **POST** /whatsapp/messages/sendDirectly | Send a message directly


## `retrieve()`

```php
retrieve($id): \YCloud\Client\Model\WhatsappMessage
```

Retrieve a message

Retrieves a WhatsApp message you've previously sent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 627c8640675de8fc689ab9d9; // string | ID of the object.

try {
    $result = $apiInstance->retrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappMessagesApi->retrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the object. |

### Return type

[**\YCloud\Client\Model\WhatsappMessage**](../Model/WhatsappMessage.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `send()`

```php
send($whatsapp_message_send_request): \YCloud\Client\Model\WhatsappMessage
```

Enqueue a message

Enqueues an outbound WhatsApp message for sending.  Queued messages will be submitted to the WhatsApp Business API asynchronously.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$whatsapp_message_send_request = new \YCloud\Client\Model\WhatsappMessageSendRequest(); // \YCloud\Client\Model\WhatsappMessageSendRequest

try {
    $result = $apiInstance->send($whatsapp_message_send_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappMessagesApi->send: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **whatsapp_message_send_request** | [**\YCloud\Client\Model\WhatsappMessageSendRequest**](../Model/WhatsappMessageSendRequest.md)|  |

### Return type

[**\YCloud\Client\Model\WhatsappMessage**](../Model/WhatsappMessage.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendDirectly()`

```php
sendDirectly($whatsapp_message_send_request): \YCloud\Client\Model\WhatsappMessage
```

Send a message directly

Sends an outbound WhatsApp message directly.  The message is submitted to the WhatsApp Business API synchronously. Typically used for sending OTP and instant messages.  The response body field `error.whatsappApiError` is included if we tried to request the WhatsApp Business API and got an error response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\WhatsappMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$whatsapp_message_send_request = new \YCloud\Client\Model\WhatsappMessageSendRequest(); // \YCloud\Client\Model\WhatsappMessageSendRequest

try {
    $result = $apiInstance->sendDirectly($whatsapp_message_send_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsappMessagesApi->sendDirectly: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **whatsapp_message_send_request** | [**\YCloud\Client\Model\WhatsappMessageSendRequest**](../Model/WhatsappMessageSendRequest.md)|  |

### Return type

[**\YCloud\Client\Model\WhatsappMessage**](../Model/WhatsappMessage.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
