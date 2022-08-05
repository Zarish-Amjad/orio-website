<?php

namespace App\Http\Controllers;

use App\Models\ExplorModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class LoginController extends Controller
{

    public function login(Request $request)
    {
        $validated = $request->validate([
            Config::get('constants.USER') => 'required',
        ]);

        if ($validated) {
            $rest = new RestController();
            $user = $rest->getUserDetails($request->user);
            session()->push(Config::get('constants.USER'), $request->user);
            return ["status" => "success", "user" => $user];
        } else {
            return ["status" => "failed"];
        }
    }

    public function logout()
    {
        session()->flush();
        return redirect()->route('mainPage');
    }
}
