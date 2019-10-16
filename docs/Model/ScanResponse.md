# ScanResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**valid** | **bool** | True indicates scan passed validation | [optional] 
**code** | **string** | Returns code string | [optional] 
**message** | **string** | Returns message | [optional] 
**details** | **string** | Returns details | [optional] 
**scanTime** | **string** | Returns current time used for the scan | [optional] 
**method** | **string** | single, mobile, or passbook based on suffix on barcodes | [optional] 
**barcode** | **string** | The barcode for the scan | [optional] 
**scanPointId** | **string** | The scanPointId for the scan | [optional] 
**testMode** | **bool** | True if test mode is used | [optional] 
**event** | [**\InteractiveTicketing\Models\Event**](Event.md) |  | [optional] 
**ticket** | [**\InteractiveTicketing\Models\Ticket**](Ticket.md) |  | [optional] 
**offlineTicket** | [**\InteractiveTicketing\Models\OfflineTicket**](OfflineTicket.md) |  | [optional] 
**thirdPartyTicket** | [**\InteractiveTicketing\Models\ThirdPartyTicket**](ThirdPartyTicket.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

