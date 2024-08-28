<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function paparkanBorangLogin()
    {
        return view('authentication.template-login');
    }

    public function dapatkanDataLogin(Request $request)
    {
        // Validasi data borang
        $request->validate([
            'inputEmail' => 'required|email:filter', // Cara 1 validation
            'inputPassword' => ['required', 'min:3'],
            'inputRememberPassword' => ['sometimes', 'boolean']
        ]);

        // return $request->all();
        // return $request->input('inputEmail');
        // return $request->only('inputEmail', '_token');
        return $request->except('_token');
    }

    public function logout()
    {
        return redirect()->route('login');
    }

}
