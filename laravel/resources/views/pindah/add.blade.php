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
                    <h3 class="panel-title">Tambah Surat Pindah</h3>
                </div>
                <div class="panel-body">
                        <form action="/pindah/create" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <!-- displaying id and kode form -->
                            <div class="form-group{{$errors->has('no_surat') ? 'has-error' : ''}}">
                              <label for="exampleInputEmail1">Nomor Surat</label>
                              <input name="no_surat" value="{{old('no_surat')}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nomor surat">
                              @if($errors->has('no_surat'))
                              <span class="help-block">{{$errors->first('no_surat')}}</span>
                            @endif
                          </div>
                      
                    <div class="form-group{{$errors->has('tanggal') ? 'has-error' : ''}}">
                      <label for="exampleInputEmail1">Tanggal Surat</label>
                      <input name="tanggal" value="{{old('tanggal')}}" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="mm/dd/yyyy">
                      @if($errors->has('tanggal'))
                      <span class="help-block">{{$errors->first('tanggal')}}</span>
                    @endif
                  </div>
                  <div class="form-group{{$errors->has('ruang_id') ? 'has-error' : ''}}">
                    <label for="exampleFormControlSelect1">Pilih Siswa</label>
                    <select name="ruang_id" class="form-control" id="exampleFormControlSelect1">
                      @foreach ($data_ruang as $ruang)
                        <option value="{{$ruang->id}}" @if ($ruang->id == '{{$ruang->id}}') selected @endif>{{$ruang->nama}}</option>
                      @endforeach
                    </select>
                    @if($errors->has('ruang_id'))
                    <span class="help-block">{{$errors->first('ruang_id')}}</span>
                  @endif
                  </div>
                  <div class="form-group{{$errors->has('wali') ? 'has-error' : ''}}">
                    <label for="exampleInputEmail1">Nama Wali</label>
                    <input name="wali" value="{{old('wali')}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nama wali">
                    @if($errors->has('wali'))
                    <span class="help-block">{{$errors->first('wali')}}</span>
                  @endif
                </div>
                <div class="form-group{{$errors->has('pekerjaan') ? 'has-error' : ''}}">
                  <label for="exampleInputEmail1">Pekerjaan Wali</label>
                  <input name="pekerjaan" value="{{old('pekerjaan')}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan pekerjaan wali">
                  @if($errors->has('pekerjaan'))
                  <span class="help-block">{{$errors->first('pekerjaan')}}</span>
                @endif
              </div>
              <div class="form-group{{$errors->has('alamat') ? 'has-error' : ''}}">
                <label for="exampleInputEmail1">Alamat Wali</label>
                <textarea name="alamat" value="{{old('alamat')}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan alamat wali"></textarea>
                @if($errors->has('alamat'))
                <span class="help-block">{{$errors->first('alamat')}}</span>
              @endif
            </div>
                <div class="form-group{{$errors->has('sekolah_tujuan') ? 'has-error' : ''}}">
                  <label for="exampleInputEmail1">Sekolah Pindahan</label>
                  <input name="sekolah_tujuan" value="{{old('sekolah_tujuan')}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nama sekolah pindahan">
                  @if($errors->has('sekolah_tujuan'))
                  <span class="help-block">{{$errors->first('sekolah_tujuan')}}</span>
                @endif
              </div>
              <div class="form-group{{$errors->has('alamat_sekolah_tujuan') ? 'has-error' : ''}}">
                <label for="exampleInputEmail1">Alamat/Daerah Sekolah Pindahan</label>
                <input name="alamat_sekolah_tujuan" value="{{old('alamat_sekolah_tujuan')}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan alamat/daerah sekolah pindahan">
                @if($errors->has('alamat_sekolah_tujuan'))
                <span class="help-block">{{$errors->first('alamat_sekolah_tujuan')}}</span>
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

