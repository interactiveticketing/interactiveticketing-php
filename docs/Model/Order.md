# Order

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**orderId** | **int** | The order ID | [optional] 
**dateTime** | **string** | The order time iso-8601 | [optional] 
**testOrder** | **bool** | True indicates a test order | [optional] 
**orderType** | **string** | web | pos | kiosk | [optional] 
**firstName** | **string** | Customer first name | [optional] 
**lastName** | **string** | Customer last name | [optional] 
**email** | **string** | Customer email address | [optional] 
**phone** | **string** | Customer phone number | [optional] 
**mobilePhone** | **string** | Customer mobile phone number | [optional] 
**street** | **string** | Customer street address | [optional] 
**city** | **string** | Customer city | [optional] 
**stateProvince** | **string** | Customer state or province name | [optional] 
**country** | **string** | Customer country | [optional] 
**postalCode** | **string** | Customer postal code / zip | [optional] 
**fees** | **string** | Organization charged service fee | [optional] 
**taxes** | **string** | Organization charged taxes | [optional] 
**donations** | **string** | Organization charged donations | [optional] 
**grandTotal** | **string** | Total charges | [optional] 
**coupons** | **int** | Coupons | [optional] 
**couponsTotal** | **int** | Coupons Total | [optional] 
**iPAddress** | **string** | Customer IP Address | [optional] 
**browserName** | **string** | Customer Browser | [optional] 
**browserDevice** | **string** | mobile | desktop | [optional] 
**sourceCode** | **string** | Source code passed to the purchase interface s&#x3D;myTrackingCode | [optional] 
**searchTag** | **string** | Custom searchTag applied to order to bookmark it | [optional] 
**survey** | [**\InteractiveTicketing\Models\Survey[]**](Survey.md) | Array of additional form question responses | [optional] 
**transactions** | [**\InteractiveTicketing\Models\Transaction[]**](Transaction.md) | Array of payment/refund transactions | [optional] 
**tickets** | [**\InteractiveTicketing\Models\Ticket[]**](Ticket.md) | Array of tickets ordered | [optional] 
**posCashierName** | **string** | Applicable to pos orders | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

