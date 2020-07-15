<?php

namespace App\Http\Controllers\Vx;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class TextController extends Controller
{
    //
    function token(){
        $appid="wxb43a67ebe1bd2a26";
        $secret="8ca5384405b188d4a4f9aa2462f0078e";
        $url="https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".$appid."&secret=".$secret;
        $result=file_get_contents($url);
        dd($result);
    }
    function token2(){
        $appid="wxb43a67ebe1bd2a26";
        $secret="8ca5384405b188d4a4f9aa2462f0078e";
        $url="https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".$appid."&secret=".$secret;
        $ch=curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $result = curl_exec($ch);
        curl_close($ch);
        dd($result);

    }
    function  token3(){
        $appid="wxb43a67ebe1bd2a26";
        $secret="8ca5384405b188d4a4f9aa2462f0078e";
        $url="https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".$appid."&secret=".$secret;
        $client=new Client();
        $response = $client->request('get',$url);
        $result=$response->getBody();
        echo $result;
    }
}
