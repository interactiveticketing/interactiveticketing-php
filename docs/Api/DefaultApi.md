# InteractiveTicketing\DefaultApi

All URIs are relative to *https://secure.interactiveticketing.com/developers/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**eventsEventIdGet**](DefaultApi.md#eventsEventIdGet) | **GET** /events/{eventId} | Single Event
[**eventsEventIdOrdersGet**](DefaultApi.md#eventsEventIdOrdersGet) | **GET** /events/{eventId}/orders | Search Orders
[**eventsEventIdOrdersOrderIdGet**](DefaultApi.md#eventsEventIdOrdersOrderIdGet) | **GET** /events/{eventId}/orders/{orderId} | Single Order
[**eventsGet**](DefaultApi.md#eventsGet) | **GET** /events | All Events

# **eventsEventIdGet**
> \InteractiveTicketing\Models\Event eventsEventIdGet($eventId)

Single Event

Get single event with `eventId`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new InteractiveTicketing\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$eventId = 789; // int | ID of event to return

try {
    $result = $apiInstance->eventsEventIdGet($eventId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->eventsEventIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **eventId** | **int**| ID of event to return |

### Return type

[**\InteractiveTicketing\Models\Event**](../Model/Event.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventsEventIdOrdersGet**
> \InteractiveTicketing\Models\PaginatedOrders eventsEventIdOrdersGet($eventId, $fromOrderId, $start, $limit, $testMode, $orderType)

Search Orders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new InteractiveTicketing\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$eventId = 56; // int | ID of event to return
$fromOrderId = 56; // int | Return orders with `orderId` greater than `fromOrderId`.
$start = 56; // int | For pagination, return orders from `start` row index.
$limit = 56; // int | For pagination, limit results to `limit` number of rows.
$testMode = true; // bool | Query test orders only.
$orderType = "orderType_example"; // string | To query only `web`, `pos`, or `kiosk` orders.

try {
    $result = $apiInstance->eventsEventIdOrdersGet($eventId, $fromOrderId, $start, $limit, $testMode, $orderType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->eventsEventIdOrdersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **eventId** | **int**| ID of event to return |
 **fromOrderId** | **int**| Return orders with &#x60;orderId&#x60; greater than &#x60;fromOrderId&#x60;. | [optional]
 **start** | **int**| For pagination, return orders from &#x60;start&#x60; row index. | [optional]
 **limit** | **int**| For pagination, limit results to &#x60;limit&#x60; number of rows. | [optional]
 **testMode** | **bool**| Query test orders only. | [optional]
 **orderType** | **string**| To query only &#x60;web&#x60;, &#x60;pos&#x60;, or &#x60;kiosk&#x60; orders. | [optional]

### Return type

[**\InteractiveTicketing\Models\PaginatedOrders**](../Model/PaginatedOrders.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventsEventIdOrdersOrderIdGet**
> \InteractiveTicketing\Models\Order eventsEventIdOrdersOrderIdGet($eventId, $orderId)

Single Order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new InteractiveTicketing\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$eventId = 789; // int | ID of event to return
$orderId = 789; // int | ID of order to return

try {
    $result = $apiInstance->eventsEventIdOrdersOrderIdGet($eventId, $orderId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->eventsEventIdOrdersOrderIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **eventId** | **int**| ID of event to return |
 **orderId** | **int**| ID of order to return |

### Return type

[**\InteractiveTicketing\Models\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventsGet**
> \InteractiveTicketing\Models\Event[] eventsGet()

All Events

Get list of all events with their `eventId` for your user key

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new InteractiveTicketing\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->eventsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->eventsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\InteractiveTicketing\Models\Event[]**](../Model/Event.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

