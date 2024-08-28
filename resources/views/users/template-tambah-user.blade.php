@extends('layouts.induk')

@section('isi-kandungan-halaman')
<h1 class="mt-4">Pengurusan Users</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Tambah User Baru</li>
</ol>

<form method="POST" action="">
    @csrf
    <div class="card mb-4">
        <div class="card-header">
            Maklumat User
        </div>
        <div class="card-body">

            <div class="row">
                <div class="col-md-6 mb-3">
                    <input type="text" name="first_name" class="form-control" placeholder="First Name">
                </div>
                <div class="col-md-6 mb-3">
                    <input type="text" name="last_name" class="form-control" placeholder="First Name">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Alamat Emel">
                </div>
                <div class="col-md-6 mb-3">
                    <input type="text" name="phone" class="form-control" placeholder="No. Telefon">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <div class="col-md-6 mb-3">
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Taip Semula Password">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <select name="role" class="form-control">
                        <option value="">-- Pilih Role --</option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>

        </div>
    </div>
</form>
@endsection
