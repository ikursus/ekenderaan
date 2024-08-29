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
                    <th>Pemohon</th>
                    <th>Jenis Kenderaan</th>
                    <th>No. Kenderaan</th>
                    <th>Tarikh Tempahan</th>
                    <th>Tarikh Mula</th>
                    <th>Tarikh Akhir</th>
                    <th>Tujuan</th>
                    <th>Destinasi</th>
                    <th>Status</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>
                @foreach( $senaraiTempahan AS $booking )
                <tr>
                    <td>{{ $booking->first_name }} {{ $booking->last_name }}</td>
                    <td>{{ $booking->jenis_kenderaan }}</td>
                    <td>{{ $booking->no_kenderaan }}</td>
                    <td>{{ $booking->tarikh_tempahan }}</td>
                    <td>{{ $booking->tarikh_mula }}</td>
                    <td>{{ $booking->tarikh_akhir }}</td>
                    <td>{{ $booking->tujuan }}</td>
                    <td>{{ $booking->alamat_destinasi }}</td>
                    <td>{{ $booking->status }}</td>
                    <td>

                        <a href="{{ route('tempahan.edit', $booking->id) }}" class="btn btn-info">Edit</a>

                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-delete-{{ $booking->id }}">

                            Delete

                        </button>

                        <form method="POST" action="{{ route('tempahan.destroy', $booking->id) }}">
                            @csrf
                            @method('DELETE')

                            <!-- Modal -->
                            <div class="modal fade" id="modal-delete-{{ $booking->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Pengesahanan Delete</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <div class="modal-body">

                                        Adakah anda bersetuju untuk menghapuskan data {{ $booking->jenis_kenderaan }}?

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
                @endforeach

            </tbody>
        </table>

        {{ $senaraiTempahan->links() }}
    </div>
</div>
@endsection
