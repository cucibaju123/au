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
                        <h3 class="panel-title">Edit Data Mata Kuliah</h3>
                    </div>
                    <div class="panel-body">
                            <form action="/matkul/{{$matkul->id}}/update" method="POST" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group{{$errors->has('surat_id') ? 'has-error' : ''}}">
                                  <label for="exampleFormControlSelect1">Pilih No Surat</label>
                                  <select name="surat_id" class="form-control" id="exampleFormControlSelect1">
                                    @foreach($data_surat as $surat)
                                      <option value="{{$surat->id}}" {{$surat->id == $matkul->surat_id ? 'selected' : '' }}>{{$surat->no_surat}}</option>
                                    @endforeach
                                  </select>
                                  @if($errors->has('surat_id'))
                                  <span class="help-block">{{$errors->first('surat_id')}}</span>
                                @endif
                                </div>
                              <div class="form-group{{$errors->has('nama') ? 'has-error' : ''}}">
                                <label for="exampleInputEmail1">Cabang Lomba</label>
                                <input name="nama" value="{{$matkul->nama}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nama cabang lomba">
                                @if($errors->has('nama'))
                                <span class="help-block">{{$errors->first('nama')}}</span>
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
