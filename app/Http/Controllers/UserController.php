<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getSenaraiUsers()
    {

        // Senarai users yang aktif
        $userAktif = '50';
        $userInAktif = 20;
        $userBanned = 5;
        $userPending = 10;

        // Cara 1 attach/passing data daripada pembolehubah (variable) kepada template
        // return view('users.template-senarai-users')
        // ->with('userAktif', $userAktif)
        // ->with('userInAktif', $userInAktif);

        // Cara 2 attach/passing data daripada pembolehubah (variable) kepada template
        // return view('users.template-senarai-users', [
        //     'userAktif' => $userAktif,
        //     'userInAktif' => $userInAktif
        // ]);

        // Cara 3 attach/passing data daripada pembolehubah (variable) kepada template
        return view('users.template-senarai-users', compact(
            'userAktif',
            'userInAktif'
        ));

    }

    public function paparBorangUserBaru()
    {
        return view('users.template-tambah-user');
    }

    public function simpanRekodUserBaru()
    {

    }

    public function paparDetailUser()
    {

    }

    public function paparBorangEditUser()
    {

    }

    public function simpanRekodEditUser()
    {

    }

    public function deleteRekodUser()
    {

    }
}
