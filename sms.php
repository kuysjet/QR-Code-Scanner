<?php
header('Content-Type = application/json');

    $text = $_POST['text'];
    $number = $_POST['number'];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $url = "https://rest.nexmo.com/sms/json";
        $data = array(
            'from' => 'Vonage APIs',
            'text' => $text,
            'to' => $number,
            'api_key' => 'fd19536f',
            'api_secret' => 'vqpEErCfFE2FpDK9'
        );
    }

    $curl = curl_init();

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);


    $response = curl_exec($curl);

    if ($response === false) {
        $error = curl_error($curl);
        $result = array('success' => false, 'error' => $error); 
    } else {
        $result = array('success' => true, 'response' => json_decode($response, true));
    }
    
    curl_close($curl);

    echo json_encode($result);





   