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
                    <h3 class="panel-title">Tambah Surat KKN</h3>
                </div>
                <div class="panel-body">
                        <form action="/kkn/create" method="POST" enctype="multipart/form-data">
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
                  <div class="form-group{{$errors->has('jurusan_id') ? 'has-error' : ''}}">
                    <label for="exampleFormControlSelect1">Pilih Peserta KKN</label>
                    <select name="jurusan_id" class="form-control" id="exampleFormControlSelect1">
                      @foreach ($data_jurusan as $jurusan)
                        <option value="{{$jurusan->id}}" @if ($jurusan->id == '{{$jurusan->id}}') selected @endif>{{$jurusan->nama}}</option>
                      @endforeach
                    </select>
                    @if($errors->has('jurusan_id'))
                    <span class="help-block">{{$errors->first('jurusan_id')}}</span>
                  @endif
                  </div>
                <div class="form-group{{$errors->has('kepada') ? 'has-error' : ''}}">
                  <label for="exampleInputEmail1">Kepada Yth.</label>
                  <input name="kepada" value="{{old('kepada')}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nama penerima surat">
                  @if($errors->has('kepada'))
                  <span class="help-block">{{$errors->first('kepada')}}</span>
                @endif
              </div>
              <div class="form-group{{$errors->has('lembaga') ? 'has-error' : ''}}">
                <label for="exampleInputEmail1">Lembaga/Instansi Yth.</label>
                <input name="lembaga" value="{{old('lembaga')}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nama lembaga/instansi penerima surat">
                @if($errors->has('lembaga'))
                <span class="help-block">{{$errors->first('lembaga')}}</span>
              @endif
            </div>
            <div class="form-group{{$errors->has('di') ? 'has-error' : ''}}">
              <label for="exampleInputEmail1">Tempat/Alamat Yth.</label>
              <input name="di" value="{{old('di')}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan tempat/kota/alamat penerima surat">
              @if($errors->has('di'))
              <span class="help-block">{{$errors->first('di')}}</span>
            @endif
          </div>
          <div class="form-group{{$errors->has('no_surat_ajuan') ? 'has-error' : ''}}">
            <label for="exampleInputEmail1">Nomor Surat Pengajuan KKN</label>
            <input name="no_surat_ajuan" value="{{old('no_surat_ajuan')}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan tempat/kota/alamat penerima surat">
            @if($errors->has('no_surat_ajuan'))
            <span class="help-block">{{$errors->first('no_surat_ajuan')}}</span>
          @endif
        </div>
              <div class="form-group{{$errors->has('tanggal_surat_ajuan') ? 'has-error' : ''}}">
                <label for="exampleInputEmail1">Tanggal Surat Pengajuan</label>
                <input name="tanggal_surat_ajuan" value="{{old('tanggal_surat_ajuan')}}" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="mm/dd/yyyy">
                @if($errors->has('tanggal_surat_ajuan'))
                <span class="help-block">{{$errors->first('tanggal_surat_ajuan')}}</span>
              @endif
            </div>

            <div class="form-group{{$errors->has('tanggal_mulai') ? 'has-error' : ''}}">
              <label for="exampleInputEmail1">Tanggal Mulai KKN</label>
              <input name="tanggal_mulai" value="{{old('tanggal_mulai')}}" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="mm/dd/yyyy">
              @if($errors->has('tanggal_mulai'))
              <span class="help-block">{{$errors->first('tanggal_mulai')}}</span>
            @endif
          </div>
          <div class="form-group{{$errors->has('tanggal_selesai') ? 'has-error' : ''}}">
            <label for="exampleInputEmail1">Tanggal Selsesai KKN</label>
            <input name="tanggal_selesai" value="{{old('tanggal_selesai')}}" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="mm/dd/yyyy">
            @if($errors->has('tanggal_selesai'))
            <span class="help-block">{{$errors->first('tanggal_selesai')}}</span>
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

