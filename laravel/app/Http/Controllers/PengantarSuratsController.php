<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpWord\Element\Table;
use PhpOffice\PhpWord\TemplateProcessor;

class PengantarSuratsController extends Controller
{
    public function index(Request $request){
            $data_surat = \App\PengantarSurat::all();
    
        return view('pengantar.index', ['data_surat' => $data_surat]);
    }

    public function add(){
        return view('pengantar.add');
    }

    public function create(Request $request){
        //Validasi Data
        $this->validate($request,[
            //Last time i stuck because i named the supposedly named 'id' column with 'nip'
            'no_surat' => 'required|unique:pengantar_surats',
            'tanggal' => 'required',
            'tanggal_kenaikan' => 'required',
            'pangkat_asal' => 'required',
            'pangkat_tujuan' => 'required',
            'jumlah' => 'required|integer',
            
        ]);
        
        
        $surat = \App\PengantarSurat::create($request->all());
   
       
        return redirect('/pengantar')->with('success', 'Data berhasil ditambahkan');
    }

    public function print($id){
        $surat = \App\PengantarSurat::find($id);
        $template = new \PhpOffice\PhpWord\TemplateProcessor(storage_path('template_pengantar.docx'));
        \Carbon\Carbon::setLocale('id');

        // $table = new Table(array('borderSize' => 1));
        
        // Set Value to Varible in template
        $template->setValue('no_surat', $surat->no_surat);
        $template->setValue('tanggal', \Carbon\Carbon::parse($surat->tanggal)->locale('id')->isoFormat('LL'));

        $template->setValue('tanggal_kenaikan', \Carbon\Carbon::parse($surat->tanggal_kenaikan)->locale('id')->format('d-m-Y'));
        $template->setValue('pangkat_asal', $surat->pangkat_asal);
        $template->setValue('pangkat_tujuan', $surat->pangkat_tujuan);
        $template->setValue('jumlah', $surat->jumlah);

        // Counting how many dosens a surat has
        // $rowCount = 0;
        // foreach ($surat->dosen as $dosen) {
        //     $rowCount = $rowCount + 1;
        // }

        // $template->cloneRow('nama', $rowCount);
        // Iterating on dosens name
        $nama_dosen = [];
        // $no = 1;
        foreach ($surat->dosen as $dosen) {
            array_push($nama_dosen, $dosen->nama);
            // $template->setValue('nama'. $no, $dosen->nama == null ? '' : $dosen->nama);
            // $no = $no+1;
        }
        $result = array_pad($nama_dosen, 5, 'Kosong');
        // dd($result[0]);
        for ($i = 0; $i < 5; $i++) {
            $template->setValue('nama'. ($i+1), $result[$i] == 'Kosong' ? '' : $result[$i]);
            $template->setValue('no'. ($i+1), $result[$i] == 'Kosong' ? '' : ($i+1));
        }

        
        // Output file name
        $filename = 'surat_pengantar.docx';

        header('Content-Type: application/octet-stream');
        header("Content-Disposition: attachment; filename=$filename");
        $template->saveAs('php://output');
        // return view('surat.print', ['surat' => $surat]);
    }

    public function update(Request $request, $id){
        //Data Validation
        $this->validate($request,[
            //Last time i stuck because i named the supposedly named 'id' column with 'nip'
            'no_surat' => 'required|unique:pengantar_surats',
            'tanggal' => 'required',
            'tanggal_kenaikan' => 'required',
            'pangkat_asal' => 'required',
            'pangkat_tujuan' => 'required',
            'jumlah' => 'required|integer',
           
        ]);

        //dd($request->all());
        $surat = \App\PengantarSurat::find($id);
        $surat->update($request->all());
       
        return redirect('/pengantar')->with('success', 'Data berhasil diupdate');
    }

    public function delete($id){
        $surat = \App\PengantarSurat::find($id);
        $surat->delete($surat);
        return redirect('/pengantar')->with('success', 'Data berhasil dihapus');
    }

}
