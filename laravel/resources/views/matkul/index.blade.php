@extends('layouts.app')



@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data Cabang Lomba</h3>
                            <div class="right">
                                <a href="/matkul/add" class="btn btn-sm btn-primary float-right">Tambah Cabang</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            @if(count($data_matkul)>0)
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>No Surat Lomba</th>
                                        <th>Nama Lomba</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data_matkul as $matkul)
                                    <tr>
                                        <th>{{$matkul->id}}</th>
                                        <td>{{empty($matkul->surat) ? 'Kosong' : $matkul->surat->no_surat}}
                                        </td>
                                        <td>{{$matkul->nama}}</td>
                                        <td>
                                            <a href="/matkul/{{$matkul->id}}/edit" class="btn btn-info btn-sm">Edit</a>
                                            <a href="/matkul/{{$matkul->id}}/delete" class="btn btn-danger btn-sm"
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