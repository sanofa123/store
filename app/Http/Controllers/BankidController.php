<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use BankID;
//use GrandID\Client\BankID;


class BankidController extends Controller
{
    public function __construct() {
		$this->middleware('web');
	}

	public function bankid(Request $httpsrequestdata) {
		/**
		 * Initial BankID Service With wsdl url and
		 * Certificate
		 * For test
		 */
		$cer = "C:\wamp64\www\Laravel7-Shopping-Cart-main\cacert.pem";

		//$httpsrequestdata = new Request();
		// dd($cer);
		$initial = BankID::start('https://appapi2.test.bankid.com/rp/v4?wsdl',
			['local_cert' => $cer],
			false);





		
		if (session()->has("compl")) {
			# code...
			session()->forget("compl");
			session()->forget("orderRef");
			session()->forget("progress");
		}
		//session()->forget("orderRef");
		//return json_encode(Session()->has("orderRef"));

		if (session()->has("orderRef") && !session()->has('compl') && session()->has("progress")) {
			$response = BankID::collectResponse(session()->get("orderRef"));

			if ($response->progressStatus == "COMPLETE") {

				$user = User::where('personal_number', $httpsrequestdata->personalnumber)->first();

				if ($user != null) {
					//Auth::login($user->id);
					$login = User::bankidauth($user->id);
					if ($login) {
						session()->forget('personalnm');
						session()->forget("orderRef");
						session()->forget("progress");
						session()->put('compl', 'true');
						return "loggedin";
					} else {
						return json_encode($user);
					}

				} else {
					return "loggederror";
				}

				return json_encode($response->userInfo->personalNumber);
			} else {
				//session()->forget("orderRef");
				return $response->progressStatus;
			}
		} else {

			//return $response->progressStatus;
			//return json_encode(Session()->forget('progress'));

			if (!session()->has('orderRef') && !session()->has('progress')) {

				$personalnum = $httpsrequestdata->personalnumber;

				$response1 = BankID::getAuthResponse($personalnum);

				if (is_object($response1) && $response1->orderRef != "") {
					$response = BankID::collectResponse($response1->orderRef);
					session()->put('orderRef', $response1->orderRef);
					session()->put('personalnm', $personalnum);
					session()->put('progress', 'true');
					session('orderRef', $response1->orderRef);
					return json_encode($response1->orderRef);
				} else {
					return $response->progressStatus;
				}

			}
			return json_encode(session()->has('orderRef'));
			return view('login');

		}

	}

	public function isRegister(Request $pnum) {
		return json_encode($pnum);
		$user = User::where('personal_number', $pnum->pnum)->count();
		if ($user != '0') {
			return 'auth';
		} else {
			return 'reg';
		}

	}

	public function refresh() {
		session()->forget("compl");
		session()->forget("orderRef");
		session()->forget("progress");
		session()->forget('personalnm');
	}
}
