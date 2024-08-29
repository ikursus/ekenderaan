@extends('layouts.induk')

@section('isi-kandungan-halaman')
<h1 class="mt-4">Pengurusan Tempahan</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Tempahan Baru</li>
</ol>

<form method="POST" action="{{ route('tempahan.store') }}">
    @csrf
    <div class="card mb-4">
        <div class="card-header">
            Maklumat Tempahan
        </div>
        <div class="card-body">

            @include('layouts.alerts')

            <div class="row">
                <div class="col-md-6 mb-3">
                    <input type="text" name="first_name" class="form-control" placeholder="First Name" value="{{ old('first_name') }}">
                </div>
                <div class="col-md-6 mb-3">
                    <input type="text" name="last_name" class="form-control" placeholder="Last Name" value="{{ old('last_name') }}">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Alamat Emel" value="{{ old('email') }}">
                </div>
                <div class="col-md-6 mb-3">
                    <input type="text" name="phone" class="form-control" placeholder="No. Telefon" value="{{ old('phone') }}">
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

                        <option value="admin" {{ old('role') == 'admin' ? 'selected="selected"' : NULL }}>Admin</option>

                        <option value="user" {{ old('role') == 'user' ? 'selected="selected"' : NULL }}>User</option>

                    </select>


                </div>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>

        </div>
    </div>
</form>
@endsection
