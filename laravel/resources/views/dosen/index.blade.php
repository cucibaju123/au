@extends('layouts.app')



@section('content')
  <div class="main">
    <div class="main-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title">Data Guru</h3>
                <div class="right">
                  <a href="/dosen/add" class="btn btn-sm btn-primary float-right">Tambah Data Guru</a>  
                </div> 
              </div>
              <div class="panel-body">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>NIP</th>
                      <th>Nama</th>
                      <th>Jenis Kelamin</th>
                      <th>Pangkat</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data_dosen as $dosen)
                  <tr>
                    <th>{{$dosen->id}}</th>
                    <td>{{$dosen->nama}}</td>
                    {{-- <th><a href="/dosen/{{$dosen->id}}/profile">{{$dosen->id}}</a></th>
                    <td><a href="/dosen/{{$dosen->id}}/profile">{{$dosen->nama}}</a></td> --}}
                    <td>{{$dosen->jenis_kelamin}}</td>
                    <td>{{$dosen->pangkat}}</td>
                    <td>
                      <a href="/dosen/{{$dosen->id}}/edit" class="btn btn-info btn-sm">Edit</a>
                      <a href="/dosen/{{$dosen->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin dihapus?')">Hapus</a>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection