<?php
    $header_name = $_GET['name'];
    $header_content= $_GET['content'];
    $image_url = $_GET['src'];
    $image_ext = $_GET['ext'];

    $curl_h = curl_init($image_url);
    curl_setopt($curl_h, CURLOPT_HTTPHEADER, array(
        'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
        'Accept-Encoding: gzip, deflate',
        'Dnt: 1',
        'Upgrade-Insecure-Requests: 1',
        "$header_name: $header_content"
    ));
    curl_setopt($curl_h, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl_h);
    curl_close($curl_h);
    
    header("Content-Type: image/$image_ext");
    header('Access-Control-Allow-Origin: *');
    echo $response;
    die();
?>
