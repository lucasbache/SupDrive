<?php
/**
 * Created by PhpStorm.
 * User: nicol
 * Date: 15/03/2018
 * Time: 22:38
 */

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ApiAuthController extends Controller
{
    //fonction login
    public function login(Request $request){
        $http = new Client;

        $response = $http->post('http://localhost:80/SupDrive/public/oauth/token', [
            'form_params' => [
                'grant_type' => 'password',
                'client_id' => '2',
                'client_secret' => 'hmc9y5HEN8fO9g00NeHFxGE9bhP1jwuLu4WiQ08S',
                'username' => $request['email'],
                'password' => $request['password'],
                'scope' => '*',
            ],
        ]);
        return json_decode((string) $response->getBody(), true);
    }

}