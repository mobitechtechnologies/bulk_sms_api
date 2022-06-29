<?php


function sendSms($phoneNumber,$message){
    $apiKey="YOUR API_KEY";
    $sendeName="YOUR ASSIGNED SENDER NAME";

    $bodyRequest =array(
        "mobile" =>$phoneNumber,
        "response_type"=>"json",
        "sender_name"=>$sendeName,
        "service_id"=>0,
        "message"=>$message
    );
    $payload = json_encode($bodyRequest);
    $curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.mobitechtechnologies.com/sms/sendsms',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 15,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS =>$payload,
    CURLOPT_HTTPHEADER => array(
        'h_api_key: '.$apiKey,
        'Content-Type: application/json'
    ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);
    echo $response;

}

sendSms("2547XXXXXXXX",
"This is a message.\n\nRegards\nMobiTech Technologies");

?>