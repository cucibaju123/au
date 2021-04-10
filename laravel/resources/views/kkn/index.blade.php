@extends('layouts.app')



@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data Surat KKN</h3>
                            <div class="right">
                                <a href="/kkn/add" class="btn btn-sm btn-primary float-right">Tambah Surat</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            @if(count($data_surat)>0)
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No Surat</th>
                                        <th>Tanggal Surat</th>
                                        <th>Nama Peserta</th>
                                        <th>Universitas</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data_surat as $surat)
                                    <tr>
                                        <th>{{$surat->no_surat}}</th>
                                        <td>{{$surat->tanggal}}</td>
                                        <td>{{!empty($surat->jurusan) ? $surat->jurusan->nama : "Kosong"}}</td>
                                        <td>{{!empty($surat->jurusan) ? $surat->jurusan->universitas : "Kosong"}}</td>
                                        <td>
                                            <a href="/kkn/{{$surat->id}}/print" @click.prevent="print"
                                                class="btn btn-info btn-sm">Download</a>
                                            <a href="/kkn/{{$surat->id}}/delete" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Yakin ingin dihapus?')">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @else
                            <p class="text-center">Data not found</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection