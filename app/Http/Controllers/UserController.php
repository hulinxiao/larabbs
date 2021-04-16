<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    //
    public function update(Request $request,$id)
    {

        $value = $request->session()->all();

        Log::info('this is test log info',['session' => $value]);

                $res = $request->session()->pull('url');


        echo url()->previous();
        die;
        dump($request->all());
        dump($id);
    }
}
