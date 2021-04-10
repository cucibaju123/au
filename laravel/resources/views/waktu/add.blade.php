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
                    <h3 class="panel-title">Tambah Data Waktu</h3>
                </div>
                <div class="panel-body">
                        <form action="/waktu/create" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <!-- displaying kode and pukul form -->
                            <div class="form-group{{$errors->has('kode') ? 'has-error' : ''}}">
                                <label for="exampleInputEmail1">Kode Waktu</label>
                                <input name="kode" value="{{old('kode')}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Kode Waktu">
                                @if($errors->has('kode'))
                                <span class="help-block">{{$errors->first('kode')}}</span>
                              @endif
                            </div>
                            <div class="form-group{{$errors->has('pukul') ? 'has-error' : ''}}">
                              <label for="exampleInputEmail1">Pukul</label>
                              <input name="pukul" value="{{old('pukul')}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Jam">
                              @if($errors->has('pukul'))
                              <span class="help-block">{{$errors->first('pukul')}}</span>
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

