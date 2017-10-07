<?php
namespace AppBundle\Services;

class CurlService {

    public function sendGetRequest ($url) {
        $curl = curl_init();
        curl_setopt($curl,CURLOPT_URL,$url);
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        return curl_exec($curl);
    }
}