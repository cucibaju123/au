@extends('layouts.app')



@section('content')
  <div class="main">
    <div class="main-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title">Data Waktu</h3>
                <div class="right">
                  <a href="/waktu/add" class="btn btn-sm btn-primary float-right">Tambah Waktu</a>  
                </div> 
              </div>
              <div class="panel-body">
            @if(count($data_waktu)>0)
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Kode</th>
                      <th>Pukul</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data_waktu as $waktu)
                  <tr>
                    <th>{{$waktu->id}}</th>
                    <td>{{$waktu->kode}}</td>
                    <td>{{$waktu->pukul}}</td>
                    <td>
                      <a href="/waktu/{{$waktu->id}}/edit" class="btn btn-info btn-sm">Edit</a>
                      <a href="/waktu/{{$waktu->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin dihapus?')">Delete</a>
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