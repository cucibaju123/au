@extends('layouts.app')

@section('content')
<div class="main">
        <div class="main-content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <!-- INPUTS -->  
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Edit Data Jurusan</h3>
                    </div>
                    <div class="panel-body">
                            <form action="/jurusan/{{$jurusan->id}}/update" method="POST" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group{{$errors->has('id') ? 'has-error' : ''}}">
                                  <label for="exampleInputEmail1">NIM</label>
                                  <input name="id" value="{{$jurusan->id}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Kode Prodi">
                                  @if($errors->has('kod_prodi'))
                                    <span class="help-block">{{$errors->first('id')}}</span>
                                  @endif
                                </div>
                                <div class="form-group{{$errors->has('nama') ? 'has-error' : ''}}">
                                  <label for="exampleInputEmail1">Nama</label>
                                  <input name="nama" value="{{$jurusan->nama}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama">
                                  @if($errors->has('nama'))
                                    <span class="help-block">{{$errors->first('nama')}}</span>
                                  @endif
                                </div>  
                                <div class="form-group{{$errors->has('jurusan') ? 'has-error' : ''}}">
                                  <label for="exampleInputEmail1">Jurusan</label>
                                  <input name="jurusan" value="{{$jurusan->jurusan}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan jurusan">
                                  @if($errors->has('jurusan'))
                                    <span class="help-block">{{$errors->first('jurusan')}}</span>
                                  @endif
                                </div> 
                                <div class="form-group{{$errors->has('universitas') ? 'has-error' : ''}}">
                                  <label for="exampleInputEmail1">Asal Universitas/Perguruan Tinggi</label>
                                  <input name="universitas" value="{{$jurusan->jurusan}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan universitas">
                                  @if($errors->has('universitas'))
                                    <span class="help-block">{{$errors->first('universitas')}}</span>
                                  @endif
                                </div> 
                                <div class="form-group{{$errors->has('semester') ? 'has-error' : ''}}">
                                  <label for="exampleFormControlSelect1">Pilih Semester</label>
                                  <select name="semester" class="form-control" id="exampleFormControlSelect1">
                                    <option value='I (Satu)' @if ($jurusan->semester == 'I (Satu)') selected @endif>I (Satu)</option>
                                    <option value='II (Dua)' @if ($jurusan->semester == 'II (Dua)') selected @endif>II (Dua)</option>
                                    <option value='III (Tiga)' @if ($jurusan->semester == 'III (Tiga)') selected @endif>III (Tiga)</option>
                                    <option value='IV (Empat)' @if ($jurusan->semester == 'IV (Empat)') selected @endif>IV (Empat)</option>
                                    <option value='V (Lima)' @if ($jurusan->semester == 'V (Lima)') selected @endif>V (Lima)</option>
                                    <option value='VI (Enam)' @if ($jurusan->semester == 'VI (Enam)') selected @endif>VI (Enam)</option>
                                    <option value='VII (Tujuh)' @if ($jurusan->semester == 'VII (Tujuh)') selected @endif>VII (Tujuh)</option>
                                    <option value='VIII (Delapan)' @if ($jurusan->semester == 'VIII (Delapan)') selected @endif>VIII (Delapan)</option>
                                    <option value='IX (Sembilan)' @if ($jurusan->semester == 'IX (Sembilan)') selected @endif>IX (Sembilan)</option>
                                    <option value='X (Sepuluh)' @if ($jurusan->semester == 'X (Sepuluh)') selected @endif>X (Sepuluh)</option>
                                  </select>
                                  @if($errors->has('semester'))
                                  <span class="help-block">{{$errors->first('semester')}}</span>
                                @endif
                                </div> 
                                <div class="form-group{{$errors->has('alamat') ? 'has-error' : ''}}">
                                  <label for="exampleInputEmail1">Alamat</label>
                                  <textarea name="alamat" value="{{$jurusan->alamat}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan alamat">{{$jurusan->alamat}}</textarea>
                                  @if($errors->has('alamat'))
                                    <span class="help-block">{{$errors->first('alamat')}}</span>
                                  @endif
                                </div>
                                <div class="form-group{{$errors->has('judul_program') ? 'has-error' : ''}}">
                                  <label for="exampleInputEmail1">Judul Program</label>
                                  <textarea name="judul_program" value="{{$jurusan->judul_program}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan judul program">{{$jurusan->judul_program}}</textarea>
                                  @if($errors->has('judul_program'))
                                    <span class="help-block">{{$errors->first('judul_program')}}</span>
                                  @endif
                                </div>
                               
                                <button type="submit" class="btn btn-info">Update</button>
                            </form>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
@endsection
