<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RuangsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_ruang = \App\Ruang::all();
        return view('ruang.index',['data_ruang' => $data_ruang]);
    }

    public function add(){
        $data_matkul = \App\Matkul::all();
        return view('ruang.add', ['data_matkul' => $data_matkul]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request,[
            //Validasi Kode Ruang
            'id' => 'unique:ruangs|required',
            'nis' => 'required',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'kelas' => 'required',
        ]);
        $ruang = \App\Ruang::create($request->all());
        return redirect('/ruang')->with('success', 'Data berhasil ditambahkan');
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
        $ruang = \App\Ruang::find($id);
        $data_matkul = \App\Matkul::all();
        return view('ruang.edit', ['ruang' => $ruang, 'data_matkul' => $data_matkul]);
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
        $this->validate($request,[
            //Validasi Kode Ruang
            'id' => 'required',
            'nis' => 'required',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'kelas' => 'required',
        ]);

        $ruang = \App\Ruang::find($id);
        $ruang->update($request->all());
        return redirect('/ruang')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ruang = \App\Ruang::find($id);
        $ruang->delete($ruang);
        return redirect('/ruang')->with('success', 'Data berhasil dihapus');
    }
}
