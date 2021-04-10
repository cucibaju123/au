<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpWord\Element\Table;
use PhpOffice\PhpWord\TemplateProcessor;

class SuratsController extends Controller
{
    public function index(Request $request){
            $data_surat = \App\Surat::all();
    
        return view('surat.index', ['data_surat' => $data_surat]);
    }

    public function add(){
        return view('surat.add');
    }

    public function create(Request $request){
        //Validasi Data
        $this->validate($request,[
            //Last time i stuck because i named the supposedly named 'id' column with 'nip'
            'no_surat' => 'required|unique:surats',
            'tanggal' => 'required',
            'lomba' => 'required',
            'jenjang' => 'required',
            'alamat_pertama' => 'required',
            'tahun_lomba' => 'required',
            'tahun_ajaran' => 'required',
            
        ]);
        
        
        $surat = \App\Surat::create($request->all());
   
       
        return redirect('/surat')->with('success', 'Data berhasil ditambahkan');
    }

    public function print($id){
        $surat = \App\Surat::find($id);
        $template = new \PhpOffice\PhpWord\TemplateProcessor(storage_path('template.docx'));
        \Carbon\Carbon::setLocale('id');

        // $table = new Table(array('borderSize' => 1));
        $rowCount = 0;
        foreach ($surat->matkul as $matkul) {
            foreach ($matkul->ruang as $ruang) {
                $rowCount = $rowCount + 1;
            }
        }
        
        // Set Value to Varible in template
        $template->setValue('no_surat', $surat->no_surat);
        $template->setValue('tanggal', \Carbon\Carbon::parse($surat->tanggal)->locale('id')->isoFormat('LL'));
        $template->setValue('lomba', $surat->lomba);
        $template->setValue('jenjang', $surat->jenjang);
        $template->setValue('alamat_pertama', $surat->alamat_pertama);
        $template->setValue('alamat_kedua', $surat->alamat_kedua);
        $template->setValue('tahun', $surat->tahun_lomba);
        $template->setValue('tahun_ajaran', $surat->tahun_ajaran);

        // Isi Tabel Sesuai Isi Database
        $template->cloneRow('no', $rowCount);
        $no = 1;
        foreach ($surat->matkul as $matkul){
            foreach ($matkul->ruang as $ruang){
                $template->setValue('no#' . $no , $no);
                $template->setValue('nama#' . $no , $ruang->nama);
                $template->setValue('kelas#' . $no , $ruang->kelas);
                $template->setValue('cabang_lomba#' . $no , $matkul->nama);
                $no = $no + 1;
            }
        }

        
        // Output file name
        $filename = 'surat_lomba.docx';

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
            'lomba' => 'required',
            'jenjang' => 'required',
            'alamat_pertama' => 'required',
            'tahun_lomba' => 'required',
            'tahun_ajaran' => 'required',
           
        ]);

        //dd($request->all());
        $surat = \App\Surat::find($id);
        $surat->update($request->all());
       
        return redirect('/surat')->with('success', 'Data berhasil diupdate');
    }

    public function delete($id){
        $surat = \App\Surat::find($id);
        $surat->delete($surat);
        return redirect('/surat')->with('success', 'Data berhasil dihapus');
    }

}
