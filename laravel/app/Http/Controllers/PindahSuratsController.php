<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpWord\Element\Table;
use PhpOffice\PhpWord\TemplateProcessor;

class PindahSuratsController extends Controller
{
    public function index(Request $request){
            $data_surat = \App\PindahSurat::all();
    
        return view('pindah.index', ['data_surat' => $data_surat]);
    }

    public function add(){
        $data_ruang = \App\Ruang::all();
        return view('pindah.add', ['data_ruang' => $data_ruang]);
    }

    public function create(Request $request){
        //Validasi Data
        $this->validate($request,[
            //Last time i stuck because i named the supposedly named 'id' column with 'nip'
            'no_surat' => 'required|unique:pindah_surats',
            'tanggal' => 'required',
            'ruang_id' => 'required|unique:pindah_surats',
            'wali' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            'sekolah_tujuan' => 'required',
            'alamat_sekolah_tujuan' => 'required',
            
        ]);
        
        
        $surat = \App\PindahSurat::create($request->all());
   
       
        return redirect('/pindah')->with('success', 'Data berhasil ditambahkan');
    }

    public function print($id){
        $surat = \App\PindahSurat::find($id);
        $template = new \PhpOffice\PhpWord\TemplateProcessor(storage_path('template_pindah.docx'));
        \Carbon\Carbon::setLocale('id');

        // $table = new Table(array('borderSize' => 1));
        
        // Set Value to Varible in template
        $template->setValue('no_surat', $surat->no_surat);
        $template->setValue('tanggal', \Carbon\Carbon::parse($surat->tanggal)->locale('id')->isoFormat('LL'));

        $template->setValue('nama', $surat->ruang->nama);
        $template->setValue('tempat_lahir', $surat->ruang->tempat_lahir);
        $template->setValue('tanggal_lahir', \Carbon\Carbon::parse($surat->ruang->tanggal_lahir)->locale('id')->isoFormat('LL'));
        $template->setValue('nis', $surat->ruang->nis);
        $template->setValue('nisn', $surat->ruang->id);
        $template->setValue('kelas', $surat->ruang->kelas);

        $template->setValue('wali', $surat->wali);
        $template->setValue('pekerjaan', $surat->pekerjaan);
        $template->setValue('alamat', $surat->alamat);

        $template->setValue('sekolah_tujuan', $surat->sekolah_tujuan);
        $template->setValue('alamat_sekolah_tujuan', $surat->alamat_sekolah_tujuan);



        
        // Output file name
        $filename = 'surat_pindah.docx';

        header('Content-Type: application/octet-stream');
        header("Content-Disposition: attachment; filename=$filename");
        $template->saveAs('php://output');
        // return view('surat.print', ['surat' => $surat]);
    }

    public function update(Request $request, $id){
        //Data Validation
        $this->validate($request,[
            //Last time i stuck because i named the supposedly named 'id' column with 'nip'
            'no_surat' => 'required',
            'tanggal' => 'required',
            'ruang_id' => 'required|unique:pindah_surats',
            'wali' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            'sekolah_tujuan' => 'required',
            'alamat_sekolah_tujuan' => 'required',
           
        ]);

        //dd($request->all());
        $surat = \App\PindahSurat::find($id);
        $surat->update($request->all());
       
        return redirect('/pindah')->with('success', 'Data berhasil diupdate');
    }

    public function delete($id){
        $surat = \App\PindahSurat::find($id);
        $surat->delete($surat);
        return redirect('/pindah')->with('success', 'Data berhasil dihapus');
    }

}
