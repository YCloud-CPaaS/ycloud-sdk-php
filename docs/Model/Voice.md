# # Voice

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique ID for the object. |
**to** | **string** | The recipient&#39;s phone number in E.164 format. |
**verification_code** | **string** | The verification code to be sent, 4 to 6 digits. | [optional]
**language** | **string** | [ISO 639 Language Code](https://www.iso.org/iso-639-language-codes.html). | [optional]
**region_code** | **string** | [ISO 3166-1 alpha-2 country code](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2). | [optional]
**total_segments** | **int** | Number of message segments. It&#39;s always 1 for voice calls. | [optional]
**total_price** | **double** | Total price of this message. | [optional]
**currency** | **string** | [ISO 4217 currency code](https://en.wikipedia.org/wiki/ISO_4217) | [optional]
**status** | **string** | Delivery status. One of &#x60;accepted&#x60;, &#x60;sent&#x60;, &#x60;delivered&#x60;, &#x60;undelivered&#x60;. | [optional]
**error_code** | **string** | Error code when the message is undeliverable. | [optional]
**create_time** | **\DateTime** | The time at which this message was created, formatted in [RFC 3339](https://datatracker.ietf.org/doc/html/rfc3339). e.g., &#x60;2022-03-01T12:00:00.000Z&#x60;. | [optional]
**update_time** | **\DateTime** | The time at which the delivery report for this message was updated, formatted in [RFC 3339](https://datatracker.ietf.org/doc/html/rfc3339). e.g., &#x60;2022-03-01T12:00:00.000Z&#x60;. | [optional]
**external_id** | **string** | A unique string to reference the object. This can be an order number or similar, and can be used to reconcile the object with your internal systems. | [optional]
**callback_url** | **string** | Delivery report URL. You can provide a URL, and we will push the updated status report to your server in time. e.g., https://httpbin.org/anything?tag&#x3D;api. Note: We recommend configuring Webhook Endpoints instead. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
