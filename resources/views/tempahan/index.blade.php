@extends('layouts.induk')

@section('isi-kandungan-halaman')
<h1 class="mt-4">Senarai Tempahan</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Senarai Tempahan</li>
</ol>
<div class="row">
    <div class="col-md-4">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body">



            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="#">Jumlah Keseluruhan</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card bg-warning text-white mb-4">
            <div class="card-body"></div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="#">Jumlah Admin</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card bg-success text-white mb-4">
            <div class="card-body"></div>
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
        Senarai Tempahan
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
                {{-- @foreach( $senaraiUsers AS $person )
                <tr>
                    <td>{{ $person->first_name }}</td>
                    <td>{{ $person->last_name }}</td>
                    <td>{{ $person->email }}</td>
                    <td>{{ $person->phone ?? "Tiada No. Telefon" }}</td>
                    <td>{{ $person->role }}</td>
                    <td>

                        <a href="{{ route('users.paparBorangEditUser', $person->id) }}" class="btn btn-info">Edit</a>

                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-delete-{{ $person->id }}">

                            Delete

                        </button>

                        <form method="POST" action="{{ route('users.deleteRekodUser', $person->id) }}">
                            @csrf
                            @method('DELETE')

                            <!-- Modal -->
                            <div class="modal fade" id="modal-delete-{{ $person->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Pengesahanan Delete</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <div class="modal-body">

                                        Adakah anda bersetuju untuk menghapuskan data {{ $person->first_name }}?

                                    </div>

                                    <div class="modal-footer">

                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-danger">Ya, Sila Delete</button>

                                    </div>
                                </div>
                                </div>
                            </div>


                        </form>

                    </td>
                </tr>
                @endforeach --}}

            </tbody>
        </table>

        {{-- {{ $senaraiUsers->links() }} --}}
    </div>
</div>
@endsection
