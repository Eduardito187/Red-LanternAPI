<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerControllers extends Controller
{
    /**
     * @param Request $request
     * @return Response
    */
    public function Home(Request $request)
    {
        return view('admin/adm/home');
    }
}
