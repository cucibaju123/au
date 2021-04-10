<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WaktusController extends Controller
{
    public function index(Request $request){
        if($request->has('cari')){
            $data_waktu = \App\Waktu::where('nama', 'LIKE', '%'.$request->cari.'%')->get();
        }if($request->has('cari')){
            $data_waktu = \App\Waktu::where('id', 'LIKE', '%'.$request->cari.'%')->get();
        }else{
            $data_waktu = \App\Waktu::all();
        }
        return view('waktu.index', ['data_waktu' => $data_waktu]);
    }

    public function add(){
        return view('waktu.add');
    }

    public function create(Request $request){
        //Validasi Data
        $this->validate($request,[
            //Last time i stuck because i named the supposedly named 'id' column with 'nip'
            'kode' => 'required|unique:waktus',
            'pukul' => 'required',
        ]);
        
        
        $waktu = \App\Waktu::create($request->all());
        
        return redirect('/waktu')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id){
        $waktu = \App\Waktu::find($id);
        return view('waktu/edit', ['waktu' => $waktu]);
    }

    public function update(Request $request, $id){
        //Data Validation
        $this->validate($request,[
            'pukul' => 'required',
        ]);

        //dd($request->all());
        $waktu = \App\Waktu::find($id);
        $waktu->update($request->all());
        return redirect('/waktu')->with('success', 'Data berhasil diupdate');
    }

    public function delete($id){
        $waktu = \App\Waktu::find($id);
        $waktu->delete($waktu);
        return redirect('/waktu')->with('success', 'Data berhasil dihapus');
    }

    public function profile($id){
        $waktu = \App\Waktu::find($id);
        return view('waktu.profile', ['waktu' => $waktu]);
    }
}
