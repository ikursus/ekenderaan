<?php

namespace App\Http\Controllers;

use App\Models\Tempahan;
use Illuminate\Http\Request;

class TempahanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $senaraiTempahan = Tempahan::paginate(10);

        return view( 'tempahan.index', compact('senaraiTempahan') );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tempahan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate data dan ambil data tersebut
        $data = $request->validate( [
            'jenis_kenderaan' => ['required'],
            'no_kenderaan' => ['required'],
            'tarikh_tempahan' => ['required', 'date'],
            'tarikh_mula' => ['required', 'date'],
            'tarikh_akhir' => ['required', 'date'],
            'nama_pemandu' => ['required'],
            'tujuan' => ['required'],
            'alamat_destinasi' => ['required'],
            'status' => ['required']
        ] );

        // Simpan data ke dalam table tempahan
        // Cara 1 Simpan data menggunakan model
        // $tempahan = new Tempahan;

        // $tempahan->jenis_kenderaan = $data['jenis_kenderaan'];
        // $tempahan->no_kenderaan = $data['no_kenderaan'];
        // $tempahan->tarikh_tempahan = $data['tarikh_tempahan'];
        // $tempahan->tarikh_mula = $data['tarikh_mula'];
        // $tempahan->tarikh_akhir = $data['tarikh_akhir'];
        // $tempahan->nama_pemandu = $data['nama_pemandu'];
        // $tempahan->tujuan = $data['tujuan'];
        // $tempahan->alamat_destinasi = $data['alamat_destinasi'];
        // $tempahan->status = $data['status'];

        // $tempahan->save();

        Tempahan::create($data);

        // Bagi respon berjaya
        return redirect()->route('tempahan.index')->with('mesej-berjaya', 'Rekod berjaya ditambah');


    }

    /**
     * Display the specified resource.
     */
    public function show(Tempahan $tempahan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tempahan $tempahan)
    {
        return view('tempahan.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tempahan $tempahan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tempahan $tempahan)
    {
        //
    }
}
