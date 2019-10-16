# Transaction

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transactionId** | **int** | The transaction ID | [optional] 
**dateTime** | **string** | The transaction time iso-8601 | [optional] 
**isRefund** | **bool** | The transaction is a refund | [optional] 
**amount** | **string** | The transaction amount | [optional] 
**type** | **string** | credit | cash | other | triPos | [optional] 
**cardTransactionId** | **string** | The payment gateway transaction identifier | [optional] 
**cardType** | **string** | The payment credit card type code | [optional] 
**cardLastFour** | **string** | The payment credit card last four digits | [optional] 
**cardName** | **string** | The payment credit card customer name on card | [optional] 
**referenceTransactionId** | **string** | Applicable to refund transaction, reference to the original &#x60;cardTransactionId&#x60; | [optional] 
**billStreet** | **string** | Billing street address | [optional] 
**billCity** | **string** | Billing city | [optional] 
**billStateProvince** | **string** | Billing state or province | [optional] 
**billPostalCode** | **string** | Billing post code / zip | [optional] 
**billCountry** | **string** | Billing country | [optional] 
**refundReason** | **string** | Applicable to refund transactions | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

