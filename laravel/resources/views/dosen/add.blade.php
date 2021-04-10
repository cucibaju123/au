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
                    <h3 class="panel-title">Tambah Data Guru</h3>
                </div>
                <div class="panel-body">
                        <form action="/dosen/create" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <!-- last time you stuck here with displaying error help-block -->
                            <div class="form-group{{$errors->has('id') ? 'has-error' : ''}}">
                                <label for="exampleInputEmail1">NIP</label>
                                <input name="id" value="{{old('id')}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan NIP">
                                @if($errors->has('id'))
                                  <span class="help-block">{{$errors->first('id')}}</span>
                                @endif  
                            </div>
                           
                            <div class="form-group{{$errors->has('nama') ? 'has-error' : ''}}">
                                <label for="exampleInputEmail1">Nama Lengkap</label>
                                <input name="nama" value="{{old('nama')}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Lengkap">
                                @if($errors->has('nama'))
                                <span class="help-block">{{$errors->first('nama')}}</span>
                              @endif
                            </div>
                            <div class="form-group{{$errors->has('jenis_kelamin') ? 'has-error' : ''}}">
                                    <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
                                    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                                      <option value="Laki-laki"{{(old('jenis_kelamin') == 'Laki-laki') ? 'selected' : ''}}>Laki-laki</option>
                                      <option value="Perempuan"{{(old('jenis_kelamin') == 'Perempuan') ? 'selected' : ''}}>Perempuan</option>
                                    </select>
                                    @if($errors->has('jenis_kelamin'))
                                    <span class="help-block">{{$errors->first('jenis_kelamin')}}</span>
                                  @endif
                                  </div>
                            <div class="form-group{{$errors->has('pangkat') ? 'has-error' : ''}}">
                              <label for="exampleInputpangkat1">Pangkat</label>
                              <input name="pangkat" value="{{old('pangkat')}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Pembina   Tk. I IV/b">
                              @if($errors->has('pangkat'))
                              <span class="help-block">{{$errors->first('pangkat')}}</span>
                            @endif
                          </div>
                          <div class="form-group{{$errors->has('jabatan') ? 'has-error' : ''}}">
                            <label for="exampleInputEmail1">Jabatan</label>
                            <input name="jabatan" value="{{old('jabatan')}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan jabatan">
                            @if($errors->has('jabatan'))
                            <span class="help-block">{{$errors->first('jabatan')}}</span>
                          @endif
                        </div>
                        <div class="form-group{{$errors->has('pengantar_surat_id') ? 'has-error' : ''}}">
                          <label for="exampleFormControlSelect1">Pilih Cabang Lomba</label>
                          <select name="pengantar_surat_id" class="form-control" id="exampleFormControlSelect1">
                            <option value="Kosong"{{(old('pengantar_surat_id') == 'Kosong') ? 'selected' : ''}}>Kosong</option>
                            @foreach ($data_pengantar_surat as $matkul)
                            <option value="{{$matkul->id}}" @if ($matkul->id == '{{$matkul->id}}') selected @endif>{{$matkul->no_surat}}</option>
                            @endforeach
                          </select>
                          @if($errors->has('pengantar_surat_id'))
                          <span class="help-block">{{$errors->first('pengantar_surat_id')}}</span>
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

