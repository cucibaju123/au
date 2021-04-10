@extends('layouts.app')



@section('content')
  <div class="main">
    <div class="main-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title">Data Kurikulum</h3>
                <div class="right">
                  <a href="/kurikulum/add" class="btn btn-sm btn-primary float-right">Tambah Kurikulum</a>  
                </div> 
              </div>
              <div class="panel-body">
            @if(count($data_kurikulum)>0)
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Kode</th>
                      <th>Tahun</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data_kurikulum as $kurikulum)
                  <tr>
                    <th>{{$kurikulum->id}}</th>
                    <td>{{$kurikulum->kode}}</td>
                    <td>{{$kurikulum->tahun}}</td>
                    <td>
                      <a href="/kurikulum/{{$kurikulum->id}}/edit" class="btn btn-info btn-sm">Edit</a>
                      <a href="/kurikulum/{{$kurikulum->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin dihapus?')">Delete</a>
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
