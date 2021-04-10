<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_surat_lomba = \App\Surat::all();
        $data_surat_tugas = \App\TugasSurat::all();
        $data_surat_kkn = \App\KknSurat::all();
        $data_surat_pindah = \App\PindahSurat::all();
        $data_surat_pengantar = \App\PengantarSurat::all();
        $data_siswa = \App\Ruang::all();
        $data_peserta_kkn = \App\Jurusan::all();
        $data_cabang_lomba = \App\Matkul::all();
        $data_guru = \App\Dosen::all();
        return view('dashboards.index', ['data_guru' => $data_guru,
        'data_siswa' => $data_siswa,
        'data_peserta_kkn' => $data_peserta_kkn,
        'data_cabang_lomba' => $data_cabang_lomba,
        'data_surat_lomba' => $data_surat_lomba,
        'data_surat_tugas' => $data_surat_tugas,
        'data_surat_kkn' => $data_surat_kkn,
        'data_surat_pindah' => $data_surat_pindah,
        'data_surat_pengantar' => $data_surat_pengantar,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
