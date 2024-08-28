<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function getSenaraiUsers()
    {

        // Senarai users yang aktif
        $userAktif = '50';
        $userInAktif = 20;
        $userBanned = 5;
        $userPending = 10;

        // Panggil data senarai users daripada table users
        $senaraiUsers = DB::table('users')->get();

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
            'userInAktif',
            'senaraiUsers'
        ));

    }

    public function paparBorangUserBaru()
    {
        return view('users.template-tambah-user');
    }







    public function simpanRekodUserBaru(Request $request)
    {
        // Proses Validasi Borang
        $data = $request->validate( [
            'first_name' => 'required|string|min:3',
            'last_name' => ['required', 'string', 'min:3'],
            'email' => ['required', 'email:filter', 'unique:users,email'],
            'password' => ['required', 'min:4', 'confirmed'],
            'role' => ['required', 'in:admin,user']
        ] );

        // Encrypt password
        $data['password'] = bcrypt( $request->input('password') );

        // Simpan data ke table users
        DB::table('users')->insert($data);

        // Bagi response redirect ke senarai users jika berjaya simpan
        return redirect()->route('users.getSenaraiUsers')
        ->with('mesej-berjaya', 'Rekod berjaya disimpan');

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
