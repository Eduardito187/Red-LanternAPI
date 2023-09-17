<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\Login\Customer;

class LoginControllers extends Controller
{
    /**
     * @var Customer
     */
    protected $customer;

    public function __construct() {
        $this->customer = new Customer();
    }

    /**
     * @param Request $request
     * @return Response
    */
    public function LoginIndex(Request $request)
    {
        return view('admin/login');
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function Login(Request $request)
    {
        $params = $request->all();
        if (isset($params["username"]) && isset($params["password"])){
            $this->customer->initLogin("__TOKEN__");
            return redirect()->route("Home");
        }else {
            return redirect()->route("Login");
        }
    }
}