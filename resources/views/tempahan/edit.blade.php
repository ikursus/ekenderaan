@extends('layouts.induk')

@section('isi-kandungan-halaman')
<h1 class="mt-4">Pengurusan Tempahan</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Tempahan Edit</li>
</ol>

<form method="POST" action="{{ route('tempahan.update', $tempahan->id) }}">
    @csrf
    @method('PATCH')
    <div class="card mb-4">
        <div class="card-header">
            Maklumat Tempahan
        </div>
        <div class="card-body">

            @include('layouts.alerts')

            <div class="row">
                <div class="col-md-6 mb-3">
                    <select name="jenis_kenderaan" class="form-control">

                        <option value="">-- Jenis Kenderaan --</option>

                        <option value="sedan" {{ (old('jenis_kenderaan') ?? $tempahan->jenis_kenderaan) == 'sedan' ? 'selected="selected"' : NULL }}>Sedan</option>
                        <option value="mpv" {{ (old('jenis_kenderaan') ?? $tempahan->jenis_kenderaan) == 'mpv' ? 'selected="selected"' : NULL }}>MPV</option>
                        <option value="suv" {{ (old('jenis_kenderaan') ?? $tempahan->jenis_kenderaan) == 'suv' ? 'selected="selected"' : NULL }}>SUV</option>

                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <input type="text" name="no_kenderaan" class="form-control" placeholder="No. Kenderaan" value="{{ old('no_kenderaan') ?? $tempahan->no_kenderaan }}">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <input type="text" name="nama_pemandu" class="form-control" placeholder="Nama Pemandu" value="{{ old('nama_pemandu') ?? $tempahan->nama_pemandu }}">
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 mb-3">
                    <input type="date" name="tarikh_tempahan" class="form-control" placeholder="Tarikh Tempahan" value="{{ old('tarikh_tempahan') ?? $tempahan->tarikh_tempahan }}">
                </div>
                <div class="col-md-4 mb-3">
                    <input type="date" name="tarikh_mula" class="form-control" placeholder="Tarikh Mula Guna" value="{{ old('tarikh_mula') ?? $tempahan->tarikh_mula }}">
                </div>
                <div class="col-md-4 mb-3">
                    <input type="date" name="tarikh_akhir" class="form-control" placeholder="Tarikh Akhir Guna" value="{{ old('tarikh_akhir') ?? $tempahan->tarikh_akhir }}">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <input type="text" name="tujuan" class="form-control" placeholder="Tujuan" value="{{ old('tujuan') ?? $tempahan->tujuan }}">
                </div>
                <div class="col-md-6 mb-3">
                    <input type="text" name="alamat_destinasi" class="form-control" placeholder="Destinasi" value="{{ old('alamat_destinasi') ?? $tempahan->alamat_destinasi }}">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">


                    <select name="status" class="form-control">
                        <option value="">-- Pilih Status --</option>

                        <option value="pending" {{ (old('status') ?? $tempahan->status) == 'pending' ? 'selected="selected"' : NULL }}>Pending</option>

                        <option value="lulus" {{ (old('status') ?? $tempahan->status) == 'lulus' ? 'selected="selected"' : NULL }}>Lulus</option>

                        <option value="ditolak" {{ (old('status') ?? $tempahan->status) == 'ditolak' ? 'selected="selected"' : NULL }}>Ditolak</option>

                        <option value="batal" {{ (old('status') ?? $tempahan->status) == 'batal' ? 'selected="selected"' : NULL }}>Batal</option>
                    </select>


                </div>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>

        </div>
    </div>
</form>
@endsection
