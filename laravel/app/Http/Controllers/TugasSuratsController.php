<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpWord\Element\Table;
use PhpOffice\PhpWord\TemplateProcessor;

class TugasSuratsController extends Controller
{
    public function index(Request $request)
    {
        $data_surat = \App\TugasSurat::all();
        //foreach ($data_surat as $surat) {
        //dd($surat->dosen);
        //}
        return view('tugas.index', ['data_surat' => $data_surat]);
    }

    public function add()
    {
        $data_dosen = \App\Dosen::all();
        return view('tugas.add', ['data_dosen' => $data_dosen]);
    }

    public function create(Request $request)
    {
        //Validasi Data
        $this->validate($request, [
            //Last time i stuck because i named the supposedly named 'id' column with 'nip'
            'no_surat' => 'required|unique:tugas_surats',
            'dosen_id' => 'required|unique:tugas_surats',
            'tanggal' => 'required',
            'tanggal_acara' => 'required',
            'acara' => 'required',
            'waktu_mulai' => 'required',
            'waktu_selesai' => 'required',
            'alamat' => 'required',

        ]);


        $surat = \App\TugasSurat::create($request->all());


        return redirect('/tugas')->with('success', 'Data berhasil ditambahkan');
    }

    public function print($id)
    {
        $surat = \App\TugasSurat::find($id);
        $template = new \PhpOffice\PhpWord\TemplateProcessor(storage_path('template_tugas.docx'));
        \Carbon\Carbon::setLocale('id');

        // $table = new Table(array('borderSize' => 1));

        // Set Value to Varible in template
        $template->setValue('no_surat', $surat->no_surat);
        $template->setValue('tanggal', \Carbon\Carbon::parse($surat->tanggal)->locale('id')->isoFormat('LL'));
        $template->setValue('tanggal_acara', \Carbon\Carbon::parse($surat->tanggal_acara)->locale('id')->isoFormat('dddd, Do MMMM YYYY'));
        $template->setValue('nama', $surat->dosen->nama);
        $template->setValue('id', $surat->dosen->id);
        $template->setValue('pangkat', $surat->dosen->pangkat);
        $template->setValue('jabatan', $surat->dosen->jabatan);
        $template->setValue('waktu_mulai', $surat->waktu_mulai);
        $template->setValue('waktu_selesai', $surat->waktu_selesai);
        $template->setValue('acara', $surat->acara);
        $template->setValue('alamat', $surat->alamat);



        // Output file name
        $filename = 'surat_tugas.docx';

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
            'dosen_id' => 'required',
            'tanggal' => 'required',
            'tanggal_acara' => 'required',
            'acara' => 'required',
            'waktu_mulai' => 'required',
            'waktu_selesai' => 'required',
            'alamat' => 'required',

        ]);

        //dd($request->all());
        $surat = \App\TugasSurat::find($id);
        $surat->update($request->all());

        return redirect('/tugas')->with('success', 'Data berhasil diupdate');
    }

    public function delete($id)
    {
        $surat = \App\TugasSurat::find($id);
        $surat->delete($surat);
        return redirect('/tugas')->with('success', 'Data berhasil dihapus');
    }
}