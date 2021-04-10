@extends('layouts.app')



@section('content')
  <div class="main">
    <div class="main-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title">Data Peserta KKN</h3>
                <div class="right">
                  <a href="/jurusan/add" class="btn btn-sm btn-primary float-right">Tambah Peserta</a>  
                </div> 
              </div>
              <div class="panel-body">
            @if(count($data_jurusan)>0)
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>NIM</th>
                      <th>Nama</th>
                      <th>Jurusan</th>
                      <th>Semester</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data_jurusan as $jurusan)
                  <tr>
                    <th>{{$jurusan->id}}</th>
                    <td>{{$jurusan->nama}}</td>
                    <td>{{$jurusan->jurusan}}</td>
                    <td>{{$jurusan->semester}}</td>
                    <td>
                      <a href="/jurusan/{{$jurusan->id}}/edit" class="btn btn-info btn-sm">Edit</a>
                      <a href="/jurusan/{{$jurusan->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin dihapus?')">Delete</a>
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
