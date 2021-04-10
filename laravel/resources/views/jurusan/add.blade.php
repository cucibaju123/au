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
                    <h3 class="panel-title">Tambah Peserta KKN</h3>
                </div>
                <div class="panel-body">
                        <form action="/jurusan/create" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <!-- displaying id and kode form -->
                            <div class="form-group{{$errors->has('id') ? 'has-error' : ''}}">
                              <label for="exampleInputEmail1">NIM</label>
                              <input name="id" value="{{old('id')}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan NIM">
                              @if($errors->has('id'))
                              <span class="help-block">{{$errors->first('id')}}</span>
                            @endif
                          </div>
                          <div class="form-group{{$errors->has('nama') ? 'has-error' : ''}}">
                            <label for="exampleInputEmail1">Nama</label>
                            <input name="nama" value="{{old('nama')}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama">
                            @if($errors->has('nama'))
                            <span class="help-block">{{$errors->first('nama')}}</span>
                          @endif
                        </div>
                        <div class="form-group{{$errors->has('jurusan') ? 'has-error' : ''}}">
                          <label for="exampleInputEmail1">Jurusan</label>
                          <input name="jurusan" value="{{old('jurusan')}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan jurusan">
                          @if($errors->has('jurusan'))
                          <span class="help-block">{{$errors->first('jurusan')}}</span>
                        @endif
                      </div> 
                      <div class="form-group{{$errors->has('universitas') ? 'has-error' : ''}}">
                        <label for="exampleInputEmail1">Asal Universitas/Perguruan Tinggi</label>
                        <input name="universitas" value="{{old('universitas')}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan universitas/perguruan tinggi">
                        @if($errors->has('universitas'))
                        <span class="help-block">{{$errors->first('universitas')}}</span>
                      @endif
                    </div> 
                            <div class="form-group{{$errors->has('semester') ? 'has-error' : ''}}">
                              <label for="exampleFormControlSelect1">Pilih Semester</label>
                              <select name="semester" class="form-control" id="exampleFormControlSelect1">
                                <option value="I (Satu)"{{(old('semester') == 'I (Satu)') ? 'selected' : ''}}>I (Satu)</option>
                                <option value="II (Dua)"{{(old('semester') == 'II (Dua)') ? 'selected' : ''}}>II (Dua)</option>
                                <option value="III (Tiga)"{{(old('semester') == 'III (Tiga)') ? 'selected' : ''}}>III (Tiga)</option>
                                <option value="IV (Empat)"{{(old('semester') == 'IV (Empat)') ? 'selected' : ''}}>IV (Empat)</option>
                                <option value="V (Lima)"{{(old('semester') == 'V (Lima)') ? 'selected' : ''}}>V (Lima)</option>
                                <option value="VI (Enam)"{{(old('semester') == 'VI (Enam)') ? 'selected' : ''}}>VI (Enam)</option>
                                <option value="VII (Tujuh)"{{(old('semester') == 'VII (Tujuh)') ? 'selected' : ''}}>VII (Tujuh)</option>
                                <option value="VIII (Delapan)"{{(old('semester') == 'VIII (Delapan)') ? 'selected' : ''}}>VIII (Delapan)</option>
                                <option value="IX (Sembilan)"{{(old('semester') == 'IX (Sembilan)') ? 'selected' : ''}}>IX (Sembilan)</option>
                                <option value="X (Sepuluh)"{{(old('semester') == 'X (Sepuluh)') ? 'selected' : ''}}>X (Sepuluh)</option>
                              </select>
                              @if($errors->has('semester'))
                              <span class="help-block">{{$errors->first('semester')}}</span>
                            @endif
                            </div>
                            <div class="form-group{{$errors->has('alamat') ? 'has-error' : ''}}">
                              <label for="exampleInputEmail1">Alamat</label>
                              <textarea name="alamat" value="{{old('alamat')}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan alamat"></textarea>
                              @if($errors->has('alamat'))
                              <span class="help-block">{{$errors->first('alamat')}}</span>
                            @endif
                          </div>
                          <div class="form-group{{$errors->has('judul_program') ? 'has-error' : ''}}">
                            <label for="exampleInputEmail1">Judul Program</label>
                            <textarea name="judul_program" value="{{old('judul_program')}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Judul Program"></textarea>
                            @if($errors->has('judul_program'))
                            <span class="help-block">{{$errors->first('judul_program')}}</span>
                          @endif
                        </div> 
                      
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection

