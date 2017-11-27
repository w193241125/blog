<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use HTMLPurifier;

class TestController extends Controller
{
    public function index()
    {
        $appId = env(QQ_APP_ID);
        $appKey = env(QQ_APP_KEY);
        $callbackUrl = urlencode('http://www.larwas.com');
        $url = 'https://graph.qq.com/oauth2.0/authorize'.'?response_type=code'.'&client_id='.$appId.'&redirect_uri='.$callbackUrl.'&state=test';
        $res = $this->getCurl($url);
        dd($res);

        HTMLPurifier_Config::createDefault();
    }

    /**
     * get方式模拟请求
     * @param $url
     * @return mixed
     */
    function getCurl($url)
    {
        $ch  = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch,CURLOPT_NOBODY, true);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $res = curl_exec($ch);
        curl_close($ch);
        return $res;
    }
}
