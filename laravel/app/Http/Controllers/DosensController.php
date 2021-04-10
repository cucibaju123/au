<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;

class DosensController extends Controller
{
    public function index(Request $request){
        if($request->has('cari')){
            $data_dosen = \App\Dosen::where('nama', 'LIKE', '%'.$request->cari.'%')->get();
        }else{
            $data_dosen = \App\Dosen::all();
        }
        return view('dosen.index', ['data_dosen' => $data_dosen]);
    }

    public function add(){
        $data_pengantar_surat = \App\PengantarSurat::all();
        return view('dosen.add', ['data_pengantar_surat' => $data_pengantar_surat]);
    }

    public function create(Request $request){
        //Validasi Data
        $this->validate($request,[
            //Last time i stuck because i named the supposedly named 'id' column with 'nip'
            'id' => 'size:18|unique:dosens|required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',          
            'pangkat' => 'required',
            'jabatan' => 'required',
        ]);
        
        
        $dosen = \App\Dosen::create($request->all());
        //Saving the Avatar to Public Folder
        // if($request->hasFile('avatar')){
            
        //     $request->file('avatar')->move('images/', $request->file('avatar')->getClientOriginalName());
        //     $dosen->avatar = $request->file('avatar')->getClientOriginalName();
        //     $dosen->save();
        //     /*Image intervention package to resize image
        //     $avatar = $request->file('avatar');
        //     $filename = time().'.'.$avatar->getClientOriginalExtension();
        //     $image = Image::make($avatar)->resize(50, 50)->save(public_path('public/images/' . $filename);

        //     $dosen->avatar = $avatar->getClientOriginalName();
        //     $dosen->save();
        //     */
        // }
        return redirect('/dosen')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id){
        $dosen = \App\Dosen::find($id);
        $data_pengantar_surat = \App\PengantarSurat::all();
        return view('dosen/edit', ['dosen' => $dosen, 'data_pengantar_surat' => $data_pengantar_surat]);
    }

    public function update(Request $request, $id){
        //Data Validation
        $this->validate($request,[
            //Last time i stuck because i named the supposedly named 'id' column with 'nip'
            'id' => 'size:18|required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'pangkat' => 'required',
            'jabatan' => 'required',
        ]);

        //dd($request->all());
        $dosen = \App\Dosen::find($id);
        $dosen->update($request->all());
        if($request->hasFile('avatar')){
            
            $request->file('avatar')->move('images/', $request->file('avatar')->getClientOriginalName());
            $dosen->avatar = $request->file('avatar')->getClientOriginalName();
            $dosen->save();
            /* Image intervention package to resize image
            $avatar = $request->file('avatar');
            $filename = time().'.'.$avatar->getClientOriginalExtension();
            $image = Image::make($avatar)->resize(50, 50)->save(public_path('public/images/' . $filename);

            $dosen->avatar = $avatar->getClientOriginalName();
            $dosen->save();
            */
        }
        return redirect('/dosen')->with('success', 'Data berhasil diupdate');
    }

    public function delete($id){
        $dosen = \App\Dosen::find($id);
        $dosen->delete($dosen);
        return redirect('/dosen')->with('success', 'Data berhasil dihapus');
    }

    public function profile($id){
        $dosen = \App\Dosen::find($id);
        return view('dosen.profile', ['dosen' => $dosen]);
    }
}
