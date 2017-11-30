<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library\QC;

class LoginController extends Controller
{
    public function qqLoginApi()
    {
        $qc = new QC();
        dd(1);
        $qc->qq_login();
    }
}
