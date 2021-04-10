<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatkulsController extends Controller
{
    public function index(Request $request){
    
        $data_matkul = \App\Matkul::all();
        
        return view('matkul.index', ['data_matkul' => $data_matkul]);
    }

    public function add(){
        $data_surat = \App\Surat::all();
        return view('matkul.add', ['data_surat' => $data_surat]);
    }

    public function create(Request $request){
        //Validasi Data
        $this->validate($request,[
            'nama' => 'required',
        ]);
        
        
        $matkul = \App\Matkul::create($request->all());
        //Saving the Avatar to Public Folder
       
        return redirect('/matkul')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id){
        $matkul = \App\Matkul::find($id);
        $data_surat = \App\Surat::all();
        return view('matkul/edit', ['matkul' => $matkul, 'data_surat' => $data_surat]);
    }

    public function update(Request $request, $id){
        //Data Validation
        $this->validate($request,[
            'nama' => 'required',
        ]);

        //dd($request->all());
        $matkul = \App\Matkul::find($id);
        $matkul->update($request->all());
        return redirect('/matkul')->with('success', 'Data berhasil diupdate');
    }

    public function delete($id){
        $matkul = \App\Matkul::find($id);
        $matkul->delete($matkul);
        return redirect('/matkul')->with('success', 'Data berhasil dihapus');
    }
}
