# # UnsubscriberCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | [**\YCloud\Client\Model\UnsubscriberType**](UnsubscriberType.md) |  |
**customer** | **string** | The customer who has opted out. For &#x60;type&#x3D;PHONE_NUMBER&#x60;, it should be a phone number in [E.164](https://en.wikipedia.org/wiki/E.164) format. |
**channel** | [**\YCloud\Client\Model\UnsubscriberChannel**](UnsubscriberChannel.md) |  |
**region_code** | **string** | The customer&#39;s region code, formatted in [ISO 3166-1 alpha-2 country code](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
