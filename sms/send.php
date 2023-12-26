<?php
    use Infobip\Api\SmsApi;
    use Infobip\Configuration;
    use Infobip\Model\SmsAdvancedTextualRequest;
    use Infobip\Model\SmsDestination;
    use Infobip\Model\SmsTextualMessage;

    require '../vendor/autoload.php';
    $otp = rand(100000, 999999);
    $RECIPIENT = "84982193203";
    $SENDER = "InfoSMS";
    $MESSAGE_TEXT = "Ma OTP: ".$otp.".";
    
    $BASE_URL = "https://2vjr2z.api.infobip.com";
    $API_KEY = "bb2b75c4e97dd7292f6525e78c9c6c30-addaabe1-df70-48fe-a529-c038861ac889";

    $configuration = new Configuration(host: $BASE_URL, apiKey: $API_KEY);

    $sendSmsApi = new SmsApi(config: $configuration);

    $destination = new SmsDestination(
        to: $RECIPIENT
    );

    $message = new SmsTextualMessage(destinations: [$destination], from: $SENDER, text: $MESSAGE_TEXT);

    $request = new SmsAdvancedTextualRequest(messages: [$message]);

    try {
        $smsResponse = $sendSmsApi->sendSmsMessage($request);
    
        echo $smsResponse->getBulkId() . PHP_EOL;
    
        foreach ($smsResponse->getMessages() ?? [] as $message) {
            echo sprintf('Message ID: %s, status: %s', $message->getMessageId(), $message->getStatus()?->getName()) . PHP_EOL;
        }
    } catch (Throwable $apiException) {
        echo("HTTP Code: " . $apiException->getCode() . "\n");
    }
    
?>