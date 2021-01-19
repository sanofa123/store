<?php

namespace App\Http\Controllers;
//namespace HelmutSchneider\Swish;

use Illuminate\Support\Facades\Input;

use HelmutSchneider\Swish\CertificateException;
use HelmutSchneider\Swish\Client;
use HelmutSchneider\Swish\Util;
use GrandID\Client\BankID;
use Illuminate\Http\Request;

use Redirect;
use Session;
use URL;
use Notification;

class SwishController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function payment()
    {
        $bankid = new BankID($env = "production");
        $bankid->gui = false;
        $bankid->personalNumber = "";
        $response = $bankid->FederatedLogin("API KEY", "SERVICE KEY");
        $sessionId = $response->getSessionId(); // returns the session id
        $redirectUrl = $response->getRedirect; 
        $response = $bankid->GetSession("API KEY", "SERVICE KEY", $bankid->getSessionId()); 
        $attributes = $response->getUserAttributes();
        $sessionId = $response->getSessionId(); // returns the sessionid
        $username = $response->getUsername(); // username
    }
}
