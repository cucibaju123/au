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
                    <h3 class="panel-title">Tambah Data Ruang</h3>
                </div>
                <div class="panel-body">
                        <form action="/ruang/create" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <!-- displaying id and kode form -->
                            <div class="form-group{{$errors->has('id') ? 'has-error' : ''}}">
                              <label for="exampleInputEmail1">NIP</label>
                              <input name="id" value="{{old('id')}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan NISN">
                              @if($errors->has('id'))
                                <span class="help-block">{{$errors->first('id')}}</span>
                              @endif  
                          </div>
                          <div class="form-group{{$errors->has('nis') ? 'has-error' : ''}}">
                            <label for="exampleInputEmail1">NIP</label>
                            <input name="nis" value="{{old('nis')}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan NIS">
                            @if($errors->has('nis'))
                              <span class="help-block">{{$errors->first('nis')}}</span>
                            @endif  
                        </div>
                          <div class="form-group{{$errors->has('nama') ? 'has-error' : ''}}">
                              <label for="exampleInputEmail1">Nama Lengkap</label>
                              <input name="nama" value="{{old('nama')}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Lengkap">
                              @if($errors->has('nama'))
                              <span class="help-block">{{$errors->first('nama')}}</span>
                            @endif
                          </div>
                          <div class="form-group{{$errors->has('tempat_lahir') ? 'has-error' : ''}}">
                            <label for="exampleInputtempat_lahir1">Tempat Lahir</label>
                            <input name="tempat_lahir" value="{{old('tempat_lahir')}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Tempat Lahir">
                            @if($errors->has('tempat_lahir'))
                            <span class="help-block">{{$errors->first('tempat_lahir')}}</span>
                          @endif
                        </div>
                        <div class="form-group{{$errors->has('tanggal_lahir') ? 'has-error' : ''}}">
                          <label for="exampleInputtanggal_lahir1">Tempat Lahir</label>
                          <input name="tanggal_lahir" value="{{old('tanggal_lahir')}}" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="yyyy/mm/dd">
                          @if($errors->has('tanggal_lahir'))
                          <span class="help-block">{{$errors->first('tanggal_lahir')}}</span>
                        @endif
                      </div>
                        <div class="form-group{{$errors->has('kelas') ? 'has-error' : ''}}">
                          <label for="exampleInputEmail1">Kelas</label>
                          <input name="kelas" value="{{old('kelas')}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan kelas">
                          @if($errors->has('kelas'))
                          <span class="help-block">{{$errors->first('kelas')}}</span>
                        @endif
                      </div>
                      <div class="form-group{{$errors->has('matkul_id') ? 'has-error' : ''}}">
                        <label for="exampleFormControlSelect1">Pilih Cabang Lomba</label>
                        <select name="matkul_id" class="form-control" id="exampleFormControlSelect1">
                          <option value="Kosong"{{(old('matkul_id') == 'Kosong') ? 'selected' : ''}}>Kosong</option>
                          @foreach ($data_matkul as $matkul)
                          <option value="{{$matkul->id}}" @if ($matkul->id == '{{$matkul->id}}') selected @endif>{{$matkul->nama}}</option>
                          @endforeach
                        </select>
                        @if($errors->has('matkul_id'))
                        <span class="help-block">{{$errors->first('matkul_id')}}</span>
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

