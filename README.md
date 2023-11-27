# YCloud SDK for PHP

The [YCloud](https://ycloud.com) API is organized around [REST](https://en.wikipedia.org/wiki/Representational_state_transfer). Our API is designed to have predictable, resource-oriented URLs, return [JSON](https://www.json.org) responses, and use standard HTTP response codes and verbs.


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), run the following command in your project directory:

```shell
composer require ycloud/ycloud-sdk-php
```

Alternatively, add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/ycloud-cpaas/ycloud-sdk-php.git"
    }
  ],
  "require": {
    "ycloud/ycloud-sdk-php": "*@dev"
  }
}
```

Then run `composer install`.

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');


$apiInstance = new YCloud\Client\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->retrieve();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->retrieve: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.ycloud.com/v2*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BalanceApi* | [**retrieve**](docs/Api/BalanceApi.md#retrieve) | **GET** /balance | Retrieve balance
*ContactsApi* | [**create**](docs/Api/ContactsApi.md#create) | **POST** /contact/contacts | Create a contact
*ContactsApi* | [**delete**](docs/Api/ContactsApi.md#delete) | **DELETE** /contact/contacts/{id} | Delete a contact
*ContactsApi* | [**list**](docs/Api/ContactsApi.md#list) | **GET** /contact/contacts | List contacts
*ContactsApi* | [**retrieve**](docs/Api/ContactsApi.md#retrieve) | **GET** /contact/contacts/{id} | Retrieve a contact
*ContactsApi* | [**update**](docs/Api/ContactsApi.md#update) | **PATCH** /contact/contacts/{id} | Update a contact
*EmailsApi* | [**send**](docs/Api/EmailsApi.md#send) | **POST** /emails | Send an email
*SmsApi* | [**list**](docs/Api/SmsApi.md#list) | **GET** /sms | List SMS records
*SmsApi* | [**send**](docs/Api/SmsApi.md#send) | **POST** /sms | Send an SMS
*VerifyApi* | [**check**](docs/Api/VerifyApi.md#check) | **POST** /verify/verificationChecks | Check a verification
*VerifyApi* | [**send**](docs/Api/VerifyApi.md#send) | **POST** /verify/verifications | Start a verification
*VoicesApi* | [**list**](docs/Api/VoicesApi.md#list) | **GET** /voices | List voice records
*VoicesApi* | [**send**](docs/Api/VoicesApi.md#send) | **POST** /voices | Send a voice code
*WebhookEndpointsApi* | [**create**](docs/Api/WebhookEndpointsApi.md#create) | **POST** /webhookEndpoints | Create a webhook endpoint
*WebhookEndpointsApi* | [**delete**](docs/Api/WebhookEndpointsApi.md#delete) | **DELETE** /webhookEndpoints/{id} | Delete a webhook endpoint
*WebhookEndpointsApi* | [**list**](docs/Api/WebhookEndpointsApi.md#list) | **GET** /webhookEndpoints | List webhook endpoints
*WebhookEndpointsApi* | [**retrieve**](docs/Api/WebhookEndpointsApi.md#retrieve) | **GET** /webhookEndpoints/{id} | Retrieve a webhook endpoint
*WebhookEndpointsApi* | [**rotateSecret**](docs/Api/WebhookEndpointsApi.md#rotatesecret) | **POST** /webhookEndpoints/{id}/rotateSecret | Rotate a webhook endpoint secret
*WebhookEndpointsApi* | [**update**](docs/Api/WebhookEndpointsApi.md#update) | **PATCH** /webhookEndpoints/{id} | Update a webhook endpoint
*WhatsappBusinessAccountsApi* | [**list**](docs/Api/WhatsappBusinessAccountsApi.md#list) | **GET** /whatsapp/businessAccounts | List WABAs
*WhatsappBusinessAccountsApi* | [**retrieve**](docs/Api/WhatsappBusinessAccountsApi.md#retrieve) | **GET** /whatsapp/businessAccounts/{id} | Retrieve a WABA
*WhatsappMessagesApi* | [**retrieve**](docs/Api/WhatsappMessagesApi.md#retrieve) | **GET** /whatsapp/messages/{id} | Retrieve a message
*WhatsappMessagesApi* | [**send**](docs/Api/WhatsappMessagesApi.md#send) | **POST** /whatsapp/messages | Enqueue a message
*WhatsappMessagesApi* | [**sendDirectly**](docs/Api/WhatsappMessagesApi.md#senddirectly) | **POST** /whatsapp/messages/sendDirectly | Send a message directly
*WhatsappPhoneNumbersApi* | [**list**](docs/Api/WhatsappPhoneNumbersApi.md#list) | **GET** /whatsapp/phoneNumbers | List phone numbers
*WhatsappPhoneNumbersApi* | [**retrieve**](docs/Api/WhatsappPhoneNumbersApi.md#retrieve) | **GET** /whatsapp/phoneNumbers/{wabaId}/{phoneNumber} | Retrieve a phone number
*WhatsappPhoneNumbersApi* | [**retrieveCommerceSettings**](docs/Api/WhatsappPhoneNumbersApi.md#retrievecommercesettings) | **GET** /whatsapp/phoneNumbers/{wabaId}/{phoneNumber}/whatsappCommerceSettings | Retrieve commerce settings
*WhatsappPhoneNumbersApi* | [**retrieveProfile**](docs/Api/WhatsappPhoneNumbersApi.md#retrieveprofile) | **GET** /whatsapp/phoneNumbers/{wabaId}/{phoneNumber}/profile | Retrieve a phone number profile
*WhatsappPhoneNumbersApi* | [**updateCommerceSettings**](docs/Api/WhatsappPhoneNumbersApi.md#updatecommercesettings) | **PATCH** /whatsapp/phoneNumbers/{wabaId}/{phoneNumber}/whatsappCommerceSettings | Update commerce settings
*WhatsappPhoneNumbersApi* | [**updateProfile**](docs/Api/WhatsappPhoneNumbersApi.md#updateprofile) | **PATCH** /whatsapp/phoneNumbers/{wabaId}/{phoneNumber}/profile | Update a phone number profile
*WhatsappTemplatesApi* | [**create**](docs/Api/WhatsappTemplatesApi.md#create) | **POST** /whatsapp/templates | Create a template
*WhatsappTemplatesApi* | [**deleteByName**](docs/Api/WhatsappTemplatesApi.md#deletebyname) | **DELETE** /whatsapp/templates/{wabaId}/{name} | Delete templates by name
*WhatsappTemplatesApi* | [**deleteByNameAndLanguage**](docs/Api/WhatsappTemplatesApi.md#deletebynameandlanguage) | **DELETE** /whatsapp/templates/{wabaId}/{name}/{language} | Delete a template
*WhatsappTemplatesApi* | [**editByNameAndLanguage**](docs/Api/WhatsappTemplatesApi.md#editbynameandlanguage) | **PATCH** /whatsapp/templates/{wabaId}/{name}/{language} | Edit a template
*WhatsappTemplatesApi* | [**list**](docs/Api/WhatsappTemplatesApi.md#list) | **GET** /whatsapp/templates | List templates
*WhatsappTemplatesApi* | [**retrieveByNameAndLanguage**](docs/Api/WhatsappTemplatesApi.md#retrievebynameandlanguage) | **GET** /whatsapp/templates/{wabaId}/{name}/{language} | Retrieve a template

## Models

- [Balance](docs/Model/Balance.md)
- [Contact](docs/Model/Contact.md)
- [ContactCreateRequest](docs/Model/ContactCreateRequest.md)
- [ContactCustomAttribute](docs/Model/ContactCustomAttribute.md)
- [ContactPage](docs/Model/ContactPage.md)
- [ContactUpdateRequest](docs/Model/ContactUpdateRequest.md)
- [Email](docs/Model/Email.md)
- [EmailContentType](docs/Model/EmailContentType.md)
- [EmailDelivery](docs/Model/EmailDelivery.md)
- [EmailSendRequest](docs/Model/EmailSendRequest.md)
- [Error](docs/Model/Error.md)
- [ErrorResponse](docs/Model/ErrorResponse.md)
- [Event](docs/Model/Event.md)
- [EventType](docs/Model/EventType.md)
- [Mailbox](docs/Model/Mailbox.md)
- [MetaBusinessAccountVerificationStatus](docs/Model/MetaBusinessAccountVerificationStatus.md)
- [Page](docs/Model/Page.md)
- [Sms](docs/Model/Sms.md)
- [SmsInbound](docs/Model/SmsInbound.md)
- [SmsPage](docs/Model/SmsPage.md)
- [SmsSendRequest](docs/Model/SmsSendRequest.md)
- [Verification](docs/Model/Verification.md)
- [VerificationChannel](docs/Model/VerificationChannel.md)
- [VerificationCheck](docs/Model/VerificationCheck.md)
- [VerificationCheckRequest](docs/Model/VerificationCheckRequest.md)
- [VerificationFallback](docs/Model/VerificationFallback.md)
- [VerificationSendRequest](docs/Model/VerificationSendRequest.md)
- [VerificationStatus](docs/Model/VerificationStatus.md)
- [Voice](docs/Model/Voice.md)
- [VoicePage](docs/Model/VoicePage.md)
- [VoiceSendRequest](docs/Model/VoiceSendRequest.md)
- [WebhookEndpoint](docs/Model/WebhookEndpoint.md)
- [WebhookEndpointCreateRequest](docs/Model/WebhookEndpointCreateRequest.md)
- [WebhookEndpointPage](docs/Model/WebhookEndpointPage.md)
- [WebhookEndpointStatus](docs/Model/WebhookEndpointStatus.md)
- [WebhookEndpointUpdateRequest](docs/Model/WebhookEndpointUpdateRequest.md)
- [WhatsappApiError](docs/Model/WhatsappApiError.md)
- [WhatsappBusinessAccount](docs/Model/WhatsappBusinessAccount.md)
- [WhatsappBusinessAccountBanState](docs/Model/WhatsappBusinessAccountBanState.md)
- [WhatsappBusinessAccountPage](docs/Model/WhatsappBusinessAccountPage.md)
- [WhatsappBusinessAccountRestrictionInfo](docs/Model/WhatsappBusinessAccountRestrictionInfo.md)
- [WhatsappBusinessAccountReviewStatus](docs/Model/WhatsappBusinessAccountReviewStatus.md)
- [WhatsappBusinessAccountUpdateEventEnum](docs/Model/WhatsappBusinessAccountUpdateEventEnum.md)
- [WhatsappCommerceSettings](docs/Model/WhatsappCommerceSettings.md)
- [WhatsappCommerceSettingsUpdateRequest](docs/Model/WhatsappCommerceSettingsUpdateRequest.md)
- [WhatsappConversation](docs/Model/WhatsappConversation.md)
- [WhatsappConversationOriginType](docs/Model/WhatsappConversationOriginType.md)
- [WhatsappConversationType](docs/Model/WhatsappConversationType.md)
- [WhatsappInboundMessage](docs/Model/WhatsappInboundMessage.md)
- [WhatsappInboundMessageButton](docs/Model/WhatsappInboundMessageButton.md)
- [WhatsappInboundMessageContext](docs/Model/WhatsappInboundMessageContext.md)
- [WhatsappInboundMessageError](docs/Model/WhatsappInboundMessageError.md)
- [WhatsappInboundMessageInteractive](docs/Model/WhatsappInboundMessageInteractive.md)
- [WhatsappInboundMessageInteractiveButtonReply](docs/Model/WhatsappInboundMessageInteractiveButtonReply.md)
- [WhatsappInboundMessageInteractiveListReply](docs/Model/WhatsappInboundMessageInteractiveListReply.md)
- [WhatsappInboundMessageLocation](docs/Model/WhatsappInboundMessageLocation.md)
- [WhatsappInboundMessageMedia](docs/Model/WhatsappInboundMessageMedia.md)
- [WhatsappInboundMessageOrder](docs/Model/WhatsappInboundMessageOrder.md)
- [WhatsappInboundMessageOrderProductItem](docs/Model/WhatsappInboundMessageOrderProductItem.md)
- [WhatsappInboundMessageReferral](docs/Model/WhatsappInboundMessageReferral.md)
- [WhatsappInboundMessageReferredProduct](docs/Model/WhatsappInboundMessageReferredProduct.md)
- [WhatsappInboundMessageSystem](docs/Model/WhatsappInboundMessageSystem.md)
- [WhatsappInboundMessageText](docs/Model/WhatsappInboundMessageText.md)
- [WhatsappInboundMessageType](docs/Model/WhatsappInboundMessageType.md)
- [WhatsappMessage](docs/Model/WhatsappMessage.md)
- [WhatsappMessageContact](docs/Model/WhatsappMessageContact.md)
- [WhatsappMessageContactAddress](docs/Model/WhatsappMessageContactAddress.md)
- [WhatsappMessageContactEmail](docs/Model/WhatsappMessageContactEmail.md)
- [WhatsappMessageContactName](docs/Model/WhatsappMessageContactName.md)
- [WhatsappMessageContactOrg](docs/Model/WhatsappMessageContactOrg.md)
- [WhatsappMessageContactPhone](docs/Model/WhatsappMessageContactPhone.md)
- [WhatsappMessageContactUrl](docs/Model/WhatsappMessageContactUrl.md)
- [WhatsappMessageContext](docs/Model/WhatsappMessageContext.md)
- [WhatsappMessageInteractive](docs/Model/WhatsappMessageInteractive.md)
- [WhatsappMessageInteractiveAction](docs/Model/WhatsappMessageInteractiveAction.md)
- [WhatsappMessageInteractiveActionButton](docs/Model/WhatsappMessageInteractiveActionButton.md)
- [WhatsappMessageInteractiveActionButtonReply](docs/Model/WhatsappMessageInteractiveActionButtonReply.md)
- [WhatsappMessageInteractiveActionParameters](docs/Model/WhatsappMessageInteractiveActionParameters.md)
- [WhatsappMessageInteractiveActionSection](docs/Model/WhatsappMessageInteractiveActionSection.md)
- [WhatsappMessageInteractiveActionSectionProductItem](docs/Model/WhatsappMessageInteractiveActionSectionProductItem.md)
- [WhatsappMessageInteractiveActionSectionRow](docs/Model/WhatsappMessageInteractiveActionSectionRow.md)
- [WhatsappMessageInteractiveBody](docs/Model/WhatsappMessageInteractiveBody.md)
- [WhatsappMessageInteractiveFooter](docs/Model/WhatsappMessageInteractiveFooter.md)
- [WhatsappMessageInteractiveHeader](docs/Model/WhatsappMessageInteractiveHeader.md)
- [WhatsappMessageLocation](docs/Model/WhatsappMessageLocation.md)
- [WhatsappMessageMedia](docs/Model/WhatsappMessageMedia.md)
- [WhatsappMessageReaction](docs/Model/WhatsappMessageReaction.md)
- [WhatsappMessageSendRequest](docs/Model/WhatsappMessageSendRequest.md)
- [WhatsappMessageStatus](docs/Model/WhatsappMessageStatus.md)
- [WhatsappMessageTemplate](docs/Model/WhatsappMessageTemplate.md)
- [WhatsappMessageTemplateComponent](docs/Model/WhatsappMessageTemplateComponent.md)
- [WhatsappMessageTemplateComponentCard](docs/Model/WhatsappMessageTemplateComponentCard.md)
- [WhatsappMessageTemplateComponentCardComponent](docs/Model/WhatsappMessageTemplateComponentCardComponent.md)
- [WhatsappMessageTemplateComponentParameter](docs/Model/WhatsappMessageTemplateComponentParameter.md)
- [WhatsappMessageTemplateComponentParameterAction](docs/Model/WhatsappMessageTemplateComponentParameterAction.md)
- [WhatsappMessageTemplateComponentParameterActionSection](docs/Model/WhatsappMessageTemplateComponentParameterActionSection.md)
- [WhatsappMessageTemplateComponentParameterActionSectionProductItem](docs/Model/WhatsappMessageTemplateComponentParameterActionSectionProductItem.md)
- [WhatsappMessageTemplateComponentParameterLimitedTimeOffer](docs/Model/WhatsappMessageTemplateComponentParameterLimitedTimeOffer.md)
- [WhatsappMessageTemplateLanguage](docs/Model/WhatsappMessageTemplateLanguage.md)
- [WhatsappMessageText](docs/Model/WhatsappMessageText.md)
- [WhatsappMessageType](docs/Model/WhatsappMessageType.md)
- [WhatsappPhoneNumber](docs/Model/WhatsappPhoneNumber.md)
- [WhatsappPhoneNumberCodeVerificationStatus](docs/Model/WhatsappPhoneNumberCodeVerificationStatus.md)
- [WhatsappPhoneNumberNameStatus](docs/Model/WhatsappPhoneNumberNameStatus.md)
- [WhatsappPhoneNumberPage](docs/Model/WhatsappPhoneNumberPage.md)
- [WhatsappPhoneNumberProfile](docs/Model/WhatsappPhoneNumberProfile.md)
- [WhatsappPhoneNumberProfileUpdateRequest](docs/Model/WhatsappPhoneNumberProfileUpdateRequest.md)
- [WhatsappPhoneNumberProfileVertical](docs/Model/WhatsappPhoneNumberProfileVertical.md)
- [WhatsappPhoneNumberQualityRating](docs/Model/WhatsappPhoneNumberQualityRating.md)
- [WhatsappPhoneNumberQualityUpdateEventEnum](docs/Model/WhatsappPhoneNumberQualityUpdateEventEnum.md)
- [WhatsappPhoneNumberStatus](docs/Model/WhatsappPhoneNumberStatus.md)
- [WhatsappProfile](docs/Model/WhatsappProfile.md)
- [WhatsappReviewDecision](docs/Model/WhatsappReviewDecision.md)
- [WhatsappTemplate](docs/Model/WhatsappTemplate.md)
- [WhatsappTemplateCategory](docs/Model/WhatsappTemplateCategory.md)
- [WhatsappTemplateComponent](docs/Model/WhatsappTemplateComponent.md)
- [WhatsappTemplateComponentButton](docs/Model/WhatsappTemplateComponentButton.md)
- [WhatsappTemplateComponentButtonOtpType](docs/Model/WhatsappTemplateComponentButtonOtpType.md)
- [WhatsappTemplateComponentButtonType](docs/Model/WhatsappTemplateComponentButtonType.md)
- [WhatsappTemplateComponentCard](docs/Model/WhatsappTemplateComponentCard.md)
- [WhatsappTemplateComponentCardComponent](docs/Model/WhatsappTemplateComponentCardComponent.md)
- [WhatsappTemplateComponentExample](docs/Model/WhatsappTemplateComponentExample.md)
- [WhatsappTemplateComponentLimitedTimeOffer](docs/Model/WhatsappTemplateComponentLimitedTimeOffer.md)
- [WhatsappTemplateCreateRequest](docs/Model/WhatsappTemplateCreateRequest.md)
- [WhatsappTemplateEditRequest](docs/Model/WhatsappTemplateEditRequest.md)
- [WhatsappTemplatePage](docs/Model/WhatsappTemplatePage.md)
- [WhatsappTemplateQualityRating](docs/Model/WhatsappTemplateQualityRating.md)
- [WhatsappTemplateStatus](docs/Model/WhatsappTemplateStatus.md)
- [WhatsappTemplateStatusUpdateEventEnum](docs/Model/WhatsappTemplateStatusUpdateEventEnum.md)

## Authorization

### api_key

- **Type**: API key
- **API key parameter name**: X-API-Key
- **Location**: HTTP header
