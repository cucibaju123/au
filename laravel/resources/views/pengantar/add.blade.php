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
                    <h3 class="panel-title">Tambah Surat Pengantar</h3>
                </div>
                <div class="panel-body">
                        <form action="/pengantar/create" method="POST" enctype="multipart/form-data">
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
                  <div class="form-group{{$errors->has('tanggal_kenaikan') ? 'has-error' : ''}}">
                    <label for="exampleInputEmail1">Tanggal Kenaikan</label>
                    <input name="tanggal_kenaikan" value="{{old('tanggal_kenaikan')}}" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="mm/dd/yyyy">
                    @if($errors->has('tanggal_kenaikan'))
                    <span class="help-block">{{$errors->first('tanggal_kenaikan')}}</span>
                  @endif
                </div>
                  
                  <div class="form-group{{$errors->has('pangkat_asal') ? 'has-error' : ''}}">
                    <label for="exampleInputEmail1">Pangkat Asal</label>
                    <input name="pangkat_asal" value="{{old('pangkat_asal')}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nama pangkat asal">
                    @if($errors->has('pangkat_asal'))
                    <span class="help-block">{{$errors->first('pangkat_asal')}}</span>
                  @endif
                </div>
                <div class="form-group{{$errors->has('pangkat_tujuan') ? 'has-error' : ''}}">
                  <label for="exampleInputEmail1">Pangkat Tujuan</label>
                  <input name="pangkat_tujuan" value="{{old('pangkat_tujuan')}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nama pangkat tujuan">
                  @if($errors->has('pangkat_tujuan'))
                  <span class="help-block">{{$errors->first('pangkat_tujuan')}}</span>
                @endif
              </div>
                <div class="form-group{{$errors->has('jumlah') ? 'has-error' : ''}}">
                  <label for="exampleInputEmail1">Jumlah Stel</label>
                  <input name="jumlah" value="{{old('jumlah')}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan jumlah stel">
                  @if($errors->has('jumlah'))
                  <span class="help-block">{{$errors->first('jumlah')}}</span>
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

