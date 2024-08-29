@extends('layouts.induk')

@section('isi-kandungan-halaman')
<h1 class="mt-4">Senarai Users</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Senarai Users</li>
</ol>
<div class="row">
    <div class="col-md-4">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body">

                {{ $userTotal }}

                <!-- Komen dalam HTML -->

                <?php
                // Komen dalam PHP
                # Komen dalam PHP 2
                /*
                Komen dalam PHP 3
                Komen dalam PHP 3
                Komen dalam PHP 3
                */
                ?>

                {{-- Komen dalam Laravel Blade --}}

            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="#">Jumlah Keseluruhan</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card bg-warning text-white mb-4">
            <div class="card-body">{{ $userRoleAdmin }}</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="#">Jumlah Admin</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card bg-success text-white mb-4">
            <div class="card-body">{{ $userRoleUser }}</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="#">Jumlah User</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>

</div>

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        DataTable Example
    </div>
    <div class="card-body">

        @include('layouts.alerts')

        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Role</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>
                @foreach( $senaraiUsers AS $person )
                <tr>
                    <td>{{ $person->first_name }}</td>
                    <td>{{ $person->last_name }}</td>
                    <td>{{ $person->email }}</td>
                    <td>{{ $person->phone ?? "Tiada No. Telefon" }}</td>
                    <td>{{ $person->role }}</td>
                    <td>

                        <a href="" class="btn btn-info">Edit</a>

                        <button class="btn btn-danger">Delete</button>

                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
@endsection
