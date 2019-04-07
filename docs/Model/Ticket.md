# Ticket

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ticketId** | **int** | The ticket ID | [optional] 
**barcode** | **string** | The ticket barcode | [optional] 
**canceled** | **bool** | Canceled / Voided ticket | [optional] 
**name** | **string** | Name of ticket | [optional] 
**details** | **string** | Details about the ticket | [optional] 
**price** | **string** | Purchase price for the ticket | [optional] 
**slotDate** | **string** | Applicable to timed ticketing | [optional] 
**slotTime** | **string** | Applicable to timed ticketing | [optional] 
**slotAllDay** | **bool** | Applicable to timed ticketing | [optional] 
**nameOnTicket** | **string** | Customer name printed on ticket | [optional] 
**seatEventTitle** | **string** | Applicable to reserved seating | [optional] 
**seatVenueTitle** | **string** | Applicable to reserved seating | [optional] 
**seatSection** | **string** | Applicable to reserved seating | [optional] 
**seatCustom1** | **string** | Applicable to reserved seating | [optional] 
**seatCustom2** | **string** | Applicable to reserved seating | [optional] 
**seatRow** | **string** | Applicable to reserved seating | [optional] 
**seatRowLabel** | **string** | Applicable to reserved seating | [optional] 
**seatNumber** | **int** | Applicable to reserved seating | [optional] 
**seatNumberLabel** | **string** | Applicable to reserved seating | [optional] 
**seatText** | **string** | Applicable to reserved seating | [optional] 
**noPrint** | **bool** | Indicates tickets that should not be printed | [optional] 
**noBarcode** | **bool** | Indicates tickets that should not be barcoded | [optional] 
**discount** | **string** | Discounts applied to the ticket | [optional] 
**fee** | **string** | Oranization charged service fee | [optional] 
**tax** | **string** | Oranization chaarged tax | [optional] 
**refund** | **string** | Alloted refund back to ticket (for reports) | [optional] 
**promoCode** | **string** | Applicable to promo code discounts | [optional] 
**promoName** | **string** | Applicable to promo code discounts | [optional] 
**promoDescription** | **string** | Applicable to promo code discounts | [optional] 
**scans** | [**\InteractiveTicketing\Models\Scan[]**](Scan.md) | Array of ticket scan activity | [optional] 
**scanPointConfig** | [**\InteractiveTicketing\Models\ScanPointConfig**](ScanPointConfig.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

