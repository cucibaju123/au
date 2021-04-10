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
                    <h3 class="panel-title">Tambah Surat Tugas</h3>
                </div>
                <div class="panel-body">
                        <form action="/tugas/create" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <!-- displaying id and kode form -->
                            <div class="form-group{{$errors->has('no_surat') ? 'has-error' : ''}}">
                              <label for="exampleInputEmail1">Nomor Surat</label>
                              <input name="no_surat" value="{{old('no_surat')}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nomor surat">
                              @if($errors->has('no_surat'))
                              <span class="help-block">{{$errors->first('no_surat')}}</span>
                            @endif
                          </div>
                          <div class="form-group{{$errors->has('dosen_id') ? 'has-error' : ''}}">
                            <label for="exampleFormControlSelect1">Pilih Guru</label>
                            <select name="dosen_id" class="form-control" id="exampleFormControlSelect1">
                              @foreach ($data_dosen as $dosen)
                                <option value="{{$dosen->id}}" @if ($dosen->id == '{{$dosen->id}}') selected @endif>{{$dosen->nama}}</option>
                              @endforeach
                            </select>
                            @if($errors->has('dosen_id'))
                            <span class="help-block">{{$errors->first('dosen_id')}}</span>
                          @endif
                          </div>
                      
                    <div class="form-group{{$errors->has('tanggal') ? 'has-error' : ''}}">
                      <label for="exampleInputEmail1">Tanggal Surat</label>
                      <input name="tanggal" value="{{old('tanggal')}}" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="mm/dd/yyyy">
                      @if($errors->has('tanggal'))
                      <span class="help-block">{{$errors->first('tanggal')}}</span>
                    @endif
                  </div>
                  <div class="form-group{{$errors->has('tanggal_acara') ? 'has-error' : ''}}">
                    <label for="exampleInputEmail1">Tanggal Acara</label>
                    <input name="tanggal_acara" value="{{old('tanggal_acara')}}" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="mm/dd/yyyy">
                    @if($errors->has('tanggal_acara'))
                    <span class="help-block">{{$errors->first('tanggal_acara')}}</span>
                  @endif
                </div>
                <div class="form-group{{$errors->has('acara') ? 'has-error' : ''}}">
                  <label for="exampleInputEmail1">Nama Acara</label>
                  <input name="acara" value="{{old('acara')}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan acara lomba">
                  @if($errors->has('acara'))
                  <span class="help-block">{{$errors->first('acara')}}</span>
                @endif
              </div>
              <div class="form-group{{$errors->has('waktu_mulai') ? 'has-error' : ''}}">
                <label for="exampleInputEmail1">Waktu Mulai</label>
                <input name="waktu_mulai" value="{{old('waktu_mulai')}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="HH:mm">
                @if($errors->has('waktu_mulai'))
                <span class="help-block">{{$errors->first('waktu_mulai')}}</span>
              @endif
            </div>
            <div class="form-group{{$errors->has('waktu_selesai') ? 'has-error' : ''}}">
              <label for="exampleInputEmail1">Waktu Selesai</label>
              <input name="waktu_selesai" value="{{old('waktu_selesai')}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="HH:mm / Selesai">
              @if($errors->has('waktu_selesai'))
              <span class="help-block">{{$errors->first('waktu_selesai')}}</span>
            @endif
          </div>
          <div class="form-group{{$errors->has('alamat') ? 'has-error' : ''}}">
            <label for="exampleInputEmail1">Alamat/Tempat Acara</label>
            <textarea name="alamat" value="{{old('alamat')}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan alamat/tempat acara"></textarea>
            @if($errors->has('alamat'))
            <span class="help-block">{{$errors->first('alamat')}}</span>
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

