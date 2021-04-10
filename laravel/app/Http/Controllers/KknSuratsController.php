<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpWord\Element\Table;
use PhpOffice\PhpWord\TemplateProcessor;

class KknSuratsController extends Controller
{
    public function index(Request $request)
    {
        $data_surat = \App\KknSurat::all();
        //foreach ($data_surat as $surat) {
        //dd($surat->jurusan);
        //}
        return view('kkn.index', ['data_surat' => $data_surat]);
    }

    public function add()
    {
        $data_jurusan = \App\Jurusan::all();
        return view('kkn.add', ['data_jurusan' => $data_jurusan]);
    }

    public function create(Request $request)
    {
        //Validasi Data
        $this->validate($request, [
            //Last time i stuck because i named the supposedly named 'id' column with 'nip'
            'no_surat' => 'required|unique:kkn_surats',
            'jurusan_id' => 'required|unique:kkn_surats',
            'tanggal' => 'required',
            'kepada' => 'required',
            'lembaga' => 'required',
            'di' => 'required',
            'no_surat_ajuan' => 'required',
            'tanggal_surat_ajuan' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required',

        ]);


        $surat = \App\KknSurat::create($request->all());


        return redirect('/kkn')->with('success', 'Data berhasil ditambahkan');
    }

    public function print($id)
    {
        $surat = \App\KknSurat::find($id);
        $template = new \PhpOffice\PhpWord\TemplateProcessor(storage_path('template_kkn.docx'));
        \Carbon\Carbon::setLocale('id');

        // $table = new Table(array('borderSize' => 1));

        // Set Value to Varible in template
        $template->setValue('no_surat', $surat->no_surat);
        $template->setValue('tanggal', \Carbon\Carbon::parse($surat->tanggal)->locale('id')->isoFormat('LL'));

        $template->setValue('kepada', $surat->kepada);
        $template->setValue('lembaga', $surat->lembaga);
        $template->setValue('di', $surat->di);

        $template->setValue('tanggal_surat_ajuan', \Carbon\Carbon::parse($surat->tanggal_surat_ajuan)->locale('id')->isoFormat('LL'));
        $template->setValue('no_surat_ajuan', $surat->no_surat_ajuan);

        $template->setValue('nama', $surat->jurusan->nama);
        $template->setValue('nim', $surat->jurusan->id);
        $template->setValue('jurusan', $surat->jurusan->jurusan);
        $template->setValue('semester', $surat->jurusan->semester);
        $template->setValue('alamat', $surat->jurusan->alamat);
        $template->setValue('judul_program', $surat->jurusan->judul_program);

        $template->setValue('universitas', $surat->jurusan->universitas);
        $template->setValue('tanggal_mulai', \Carbon\Carbon::parse($surat->tanggal_mulai)->locale('id')->isoFormat('LL'));
        $template->setValue('tanggal_selesai', \Carbon\Carbon::parse($surat->tanggal_selesai)->locale('id')->isoFormat('LL'));




        // Output file name
        $filename = 'surat_kkn.docx';

        header('Content-Type: application/octet-stream');
        header("Content-Disposition: attachment; filename=$filename");
        $template->saveAs('php://output');
        // return view('surat.print', ['surat' => $surat]);
    }

    public function update(Request $request, $id)
    {
        //Data Validation
        $this->validate($request, [
            //Last time i stuck because i named the supposedly named 'id' column with 'nip'
            'no_surat' => 'required',
            'jurusan_id' => 'required',
            'tanggal' => 'required',
            'kepada' => 'required',
            'lembaga' => 'required',
            'di' => 'required',
            'no_surat_ajuan' => 'reuquired',
            'tanggal_surat_ajuan' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required',

        ]);

        //dd($request->all());
        $surat = \App\KknSurat::find($id);
        $surat->update($request->all());

        return redirect('/kkn')->with('success', 'Data berhasil diupdate');
    }

    public function delete($id)
    {
        $surat = \App\KknSurat::find($id);
        $surat->delete($surat);
        return redirect('/kkn')->with('success', 'Data berhasil dihapus');
    }
}