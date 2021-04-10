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
                    <h3 class="panel-title">Tambah Data Kurikulum</h3>
                </div>
                <div class="panel-body">
                        <form action="/kurikulum/create" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <!-- displaying id and kode form -->
                            <div class="form-group{{$errors->has('kode') ? 'has-error' : ''}}">
                              <label for="exampleInputEmail1">Kode Kurikulum</label>
                              <input name="kode" value="{{old('kode')}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Kode">
                              @if($errors->has('kode'))
                              <span class="help-block">{{$errors->first('kode')}}</span>
                            @endif
                          </div>
                            <div class="form-group{{$errors->has('tahun') ? 'has-error' : ''}}">
                                <label for="exampleInputEmail1">Tahun Kurikulum</label>
                                <input name="tahun" value="{{old('tahun')}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Tahun">
                                @if($errors->has('tahun'))
                                <span class="help-block">{{$errors->first('tahun')}}</span>
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

