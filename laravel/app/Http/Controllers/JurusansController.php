<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JurusansController extends Controller
{
    public function index(Request $request){
         $data_jurusan = \App\Jurusan::all();
        return view('jurusan.index', ['data_jurusan' => $data_jurusan]);
    }

    public function add(){
        $data_surat_kkn = \App\KknSurat::all();
        return view('jurusan.add', ['data_surat_kkn' => $data_surat_kkn]);
    }

    public function create(Request $request){
        //Validasi Data
        $this->validate($request,[
            //Last time i stuck because i named the supposedly named 'id' column with 'nip'
            'id' => 'required|unique:jurusans',
            'nama' => 'required',
            'jurusan' => 'required',
            'universitas' => 'required',
            'semester' => 'required',
            'alamat' => 'required',
            'judul_program' => 'required',
        ]);
        
        
        $jurusan = \App\Jurusan::create($request->all());
        
        return redirect('/jurusan')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id){
        $jurusan = \App\Jurusan::find($id);
        $data_surat_kkn = \App\KknSurat::all();
        return view('jurusan/edit', ['jurusan' => $jurusan, 'data_surat_kkn' => $data_surat_kkn]);
    }

    public function update(Request $request, $id){
        //Data Validation
        $this->validate($request,[
            'id' => 'required',
            'nama' => 'required',
            'jurusan' => 'required',
            'universitas' => 'required',
            'semester' => 'required',
            'alamat' => 'required',
            'judul_program' => 'required',
        ]);

        //dd($request->all());
        $jurusan = \App\Jurusan::find($id);
        $jurusan->update($request->all());
        return redirect('/jurusan')->with('success', 'Data berhasil diupdate');
    }

    public function delete($id){
        $jurusan = \App\Jurusan::find($id);
        $jurusan->delete($jurusan);
        return redirect('/jurusan')->with('success', 'Data berhasil dihapus');
    }

    public function profile($id){
        $jurusan = \App\Jurusan::find($id);
        return view('waktu.profile', ['jurusan' => $jurusan]);
    }
}
