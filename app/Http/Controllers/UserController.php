<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function getSenaraiUsers()
    {

        // Dapat jumlah senarai users daripada table users
        $userTotal = DB::table('users')->count();
        // Dapatkan jumlah senarai users berstatus role admin
        $userRoleAdmin = DB::table('users')->where('role', '=', 'admin')->count();
        // Dapatkan jumlah senarai users berstatus role user
        $userRoleUser = DB::table('users')->where('role', '=', 'user')->count();

        // Panggil data senarai users daripada table users
        // $senaraiUsers = DB::table('users')->get();
        $senaraiUsers = DB::table('users')->paginate(5);

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
            'userTotal',
            'userRoleAdmin',
            'userRoleUser',
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



    public function paparBorangEditUser($id)
    {
        // Dapatkan rekod user berdasarkan ID
        $user = DB::table('users')->where('id', '=', $id)->first();

        return view('users.template-edit-user', compact('user'));
    }






    public function simpanRekodEditUser(Request $request, $id)
    {
        // Proses Validasi Borang
        $data = $request->validate( [
            'first_name' => 'required|string|min:3',
            'last_name' => ['required', 'string', 'min:3'],
            'email' => ['required', 'email:filter', 'unique:users,email,' . $id],
            'role' => ['required', 'in:admin,user']
        ] );

        // Semak jika ruangan password tidak kosong
        if( $request->has('password') && $request->filled('password'))
        {
            // Validate password
            $request->validate([
                'password' => ['min:4', 'confirmed']
            ]);

            // Kemudian attach password kepada $data
            $data['password'] = bcrypt($request->input('password'));
        }

        // Update rekod user berdasarkan ID User
        DB::table('users')->where('id', $id)->update($data);

        // Bagi respon akhir iaitu redirect dengan mesej berjaya
        return redirect()->route('users.getSenaraiUsers')
        ->with('mesej-berjaya', 'Rekod User Berjaya Dikemaskini');
    }









    public function deleteRekodUser($id)
    {
        // Delete Rekod user berdasarkan ID
        DB::table('users')->where('id', $id)->delete();

        // Bagi respon akhir iaitu redirect dengan mesej berjaya
        return redirect()->route('users.getSenaraiUsers')
        ->with('mesej-berjaya', 'Rekod berjaya dihapuskan');
    }
}
