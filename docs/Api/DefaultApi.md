# InteractiveTicketing\DefaultApi

All URIs are relative to *https://secure.interactiveticketing.com/developers/api/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**eventsEventIdAbandonedShoppingCartsGet**](DefaultApi.md#eventseventidabandonedshoppingcartsget) | **GET** /events/{eventId}/abandonedShoppingCarts | Query Abandoned Shopping Cart Data
[**eventsEventIdGet**](DefaultApi.md#eventseventidget) | **GET** /events/{eventId} | Fetch Event by ID
[**eventsEventIdOrdersBarcodeBarcodeGet**](DefaultApi.md#eventseventidordersbarcodebarcodeget) | **GET** /events/{eventId}/orders/barcode/{barcode} | Fetch Order by Barcode
[**eventsEventIdOrdersGet**](DefaultApi.md#eventseventidordersget) | **GET** /events/{eventId}/orders | Query Orders
[**eventsEventIdOrdersOrderIdGet**](DefaultApi.md#eventseventidordersorderidget) | **GET** /events/{eventId}/orders/{orderId} | Fetch Order by ID
[**eventsGet**](DefaultApi.md#eventsget) | **GET** /events | List All Events
[**scanPost**](DefaultApi.md#scanpost) | **POST** /scan | Scan Ticket

# **eventsEventIdAbandonedShoppingCartsGet**
> \InteractiveTicketing\Models\PaginatedCartEmails eventsEventIdAbandonedShoppingCartsGet($eventId, $fromCartEmailId, $email, $start, $limit)

Query Abandoned Shopping Cart Data

Returns paginated list of cart data from the event. The `cartEmailId` is not unique across all events. Use `fromCartEmailId` parameter to loop through orders if you are pulling down all data.

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
$fromCartEmailId = 56; // int | Return entries with `cartEmailId` greater than `fromCartEmailId`.
$email = 56; // int | Return entries with matching email address.
$start = 56; // int | For pagination, return orders from `start` row index.
$limit = 56; // int | For pagination, limit results to `limit` number of rows.

try {
    $result = $apiInstance->eventsEventIdAbandonedShoppingCartsGet($eventId, $fromCartEmailId, $email, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->eventsEventIdAbandonedShoppingCartsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **eventId** | **int**| ID of event to return |
 **fromCartEmailId** | **int**| Return entries with &#x60;cartEmailId&#x60; greater than &#x60;fromCartEmailId&#x60;. | [optional]
 **email** | **int**| Return entries with matching email address. | [optional]
 **start** | **int**| For pagination, return orders from &#x60;start&#x60; row index. | [optional]
 **limit** | **int**| For pagination, limit results to &#x60;limit&#x60; number of rows. | [optional]

### Return type

[**\InteractiveTicketing\Models\PaginatedCartEmails**](../Model/PaginatedCartEmails.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventsEventIdGet**
> \InteractiveTicketing\Models\Event eventsEventIdGet($eventId)

Fetch Event by ID

Get single event with `eventId`.

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

# **eventsEventIdOrdersBarcodeBarcodeGet**
> \InteractiveTicketing\Models\Order eventsEventIdOrdersBarcodeBarcodeGet($eventId, $barcode)

Fetch Order by Barcode

Get single order with `eventId` and `barcode`.

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
$barcode = "barcode_example"; // string | Barcode from ticket of the order to return

try {
    $result = $apiInstance->eventsEventIdOrdersBarcodeBarcodeGet($eventId, $barcode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->eventsEventIdOrdersBarcodeBarcodeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **eventId** | **int**| ID of event to return |
 **barcode** | **string**| Barcode from ticket of the order to return |

### Return type

[**\InteractiveTicketing\Models\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventsEventIdOrdersGet**
> \InteractiveTicketing\Models\PaginatedOrders eventsEventIdOrdersGet($eventId, $fromOrderId, $start, $limit, $testMode, $orderType)

Query Orders

Returns paginated list of orders from the event. The `orderId` is not unique across all events. Use `fromOrderId` parameter to loop through orders if you are pulling down all data.

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

Fetch Order by ID

Get single order with `eventId` and `orderId`.

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

List All Events

Get list of all your events with their `eventId`.

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

# **scanPost**
> \InteractiveTicketing\Models\ScanResponse scanPost($body)

Scan Ticket

Scan a ticket or third party barcode.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new InteractiveTicketing\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \InteractiveTicketing\Models\ScanRequest(); // \InteractiveTicketing\Models\ScanRequest | List of user object

try {
    $result = $apiInstance->scanPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->scanPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\InteractiveTicketing\Models\ScanRequest**](../Model/ScanRequest.md)| List of user object |

### Return type

[**\InteractiveTicketing\Models\ScanResponse**](../Model/ScanResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

