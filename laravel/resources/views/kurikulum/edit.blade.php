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
                        <h3 class="panel-title">Edit Data Kurikulum</h3>
                    </div>
                    <div class="panel-body">
                            <form action="/kurikulum/{{$kurikulum->id}}/update" method="POST" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group{{$errors->has('kode') ? 'has-error' : ''}}">
                                  <label for="exampleInputEmail1">Kode</label>
                                  <input name="kode" value="{{$kurikulum->kode}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Kode">
                                  @if($errors->has('kode'))
                                    <span class="help-block">{{$errors->first('kode')}}</span>
                                  @endif
                                </div>  
                                <div class="form-group{{$errors->has('tahun') ? 'has-error' : ''}}">
                                  <label for="exampleInputEmail1">Tahun</label>
                                  <input name="tahun" value="{{$kurikulum->tahun}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Tahun">
                                  @if($errors->has('tahun'))
                                    <span class="help-block">{{$errors->first('tahun')}}</span>
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
