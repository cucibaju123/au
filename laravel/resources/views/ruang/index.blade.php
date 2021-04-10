@extends('layouts.app')



@section('content')
  <div class="main">
    <div class="main-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title">Data Siswa</h3>
                <div class="right">
                  <a href="/ruang/add" class="btn btn-sm btn-primary float-right">Tambah Siswa</a>  
                </div> 
              </div>
              <div class="panel-body">
            @if(count($data_ruang)>0)
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>NISN</th>
                      <th>NIS</th>
                      <th>Nama</th>
                      <th>Kelas</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data_ruang as $ruang)
                  <tr>
                    <th>{{$ruang->id}}</th>
                    <td>{{$ruang->nis}}</td>
                    <td>{{$ruang->nama}}</td>
                    <td>{{$ruang->kelas}}</td>
                    <td>
                      <a href="/ruang/{{$ruang->id}}/edit" class="btn btn-info btn-sm">Edit</a>
                      <a href="/ruang/{{$ruang->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin dihapus?')">Delete</a>
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


@section('content1')
    
    <div class="row">
        <div class="col-6">
            <h1>Data Ruang</h1>
        </div>
        <div class="col-6">
          <a href="/add" class="btn btn-sm btn-primary float-right">Tambah Ruang</a>  
        </div>

        @if(count($data_ruang)>0)
        <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Kode</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($data_ruang as $ruang)
                  <tr>
                    <th scope="row">{{$ruang->id}}</th>
                    <td>{{$ruang->kode}}</td>
                    <td>
                      <a href="/ruang/{{$ruang->id}}/edit" class="btn btn-outline-secondary btn-sm">Edit</a>
                      <a href="/ruang/{{$ruang->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin dihapus?')">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            @else
              <p>No Data Found</p>
        @endif
@endsection

@section('content2')
              <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Launch demo modal
      </button>
      
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
@endsection