<?php
use Illuminate\Support\Facades\Storage;

function getTicket()
{
    $email = auth()->user()->email;

    $parts = explode("@", $email);
    $username =  auth()->user()->samaccountname;//$parts[0];
    $domain = 'KMG';//explode(".", $parts[1])[0];

    //$username =  'd.doszhanov';
    //$domain = 'KMG';
    $url = env('QLIK_HOST').":4243/qps/hdr/ticket?xrfkey=ABCDEFG123456789"; //env('SenseProxy');

    $domain = strtoupper($domain);
    $username = strtolower($username);




    $reqFields = array('UserDirectory' => $domain, 'UserId' => $username, 'Attributes' => array());

    



    $request = curl_init();
    $options = array(
        CURLOPT_URL => $url,
        CURLOPT_SSLCERT => \Storage::disk('local')->path('client.pem'),
        CURLOPT_SSLCERTPASSWD => 'secret',
        CURLOPT_SSLKEY => \Storage::disk('local')->path('client_key.pem'),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_HTTPHEADER => array('X-Qlik-Xrfkey:ABCDEFG123456789', 'Content-Type: application/json', 'X-Qlik-User:UserDirectory=KMG; UserId=qlik.service'),
        CURLOPT_POSTFIELDS => json_encode($reqFields),
    );
    curl_setopt($request, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt_array($request, $options);
    $response = curl_exec($request);
    $ticket = '';
    $decodedJSON = json_decode($response);
    $ticket = $decodedJSON->{'Ticket'};

    curl_close($request);

    return $ticket;
}
