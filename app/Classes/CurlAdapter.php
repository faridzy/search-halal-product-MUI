<?php
/**
 * Created by PhpStorm.
 * User: mfarid
 * Date: 06/04/18
 * Time: 21.58
 */

namespace App\Classes;
use GuzzleHttp;

class CurlAdapter
{
    public  function getProductHalal($params){
        $client= new GuzzleHttp\Client();
        $request=$client->request('GET', 'https://sites.google.com/macros/exec?service=AKfycbx_-gZbLP7Z2gGxehXhWMWDAAQsTp3e3bmpTBiaLuzSDQSbIFWD&menu=nama_produk&query='.$params.'');
        $response=$request->getBody()->getContents();
        return json_decode($response);
    }

}