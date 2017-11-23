<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $appId = env(QQ_APP_ID);
        $appKey = env(QQ_APP_KEY);
        echo 1;
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
