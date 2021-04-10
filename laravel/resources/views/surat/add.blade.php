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
                            <h3 class="panel-title">Tambah Surat Lomba</h3>
                        </div>
                        <div class="panel-body">
                            <form action="/surat/create" method="POST" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <!-- displaying id and kode form -->
                                <div class="form-group{{$errors->has('no_surat') ? 'has-error' : ''}}">
                                    <label for="exampleInputEmail1">Nomor Surat</label>
                                    <input name="no_surat" value="{{old('no_surat')}}" type="text" class="form-control"
                                        id="exampleInputEmail1" aria-describedby="emailHelp"
                                        placeholder="Masukkan nomor surat">
                                    @if($errors->has('no_surat'))
                                    <span class="help-block">{{$errors->first('no_surat')}}</span>
                                    @endif
                                </div>

                                <div class="form-group{{$errors->has('tanggal') ? 'has-error' : ''}}">
                                    <label for="exampleInputEmail1">Tanggal</label>
                                    <input name="tanggal" value="{{old('tanggal')}}" type="date" class="form-control"
                                        id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="mm/dd/yyyy">
                                    @if($errors->has('tanggal'))
                                    <span class="help-block">{{$errors->first('tanggal')}}</span>
                                    @endif
                                </div>
                                <div class="form-group{{$errors->has('lomba') ? 'has-error' : ''}}">
                                    <label for="exampleInputEmail1">Nama Kompetisi</label>
                                    <input name="lomba" value="{{old('lomba')}}" type="text" class="form-control"
                                        id="exampleInputEmail1" aria-describedby="emailHelp"
                                        placeholder="Masukkan nama perlombaan">
                                    @if($errors->has('lomba'))
                                    <span class="help-block">{{$errors->first('lomba')}}</span>
                                    @endif
                                </div>
                                <div class="form-group{{$errors->has('jenjang') ? 'has-error' : ''}}">
                                    <label for="exampleInputEmail1">Tingkat</label>
                                    <input name="jenjang" value="{{old('jenjang')}}" type="text" class="form-control"
                                        id="exampleInputEmail1" aria-describedby="emailHelp"
                                        placeholder="Masukkan jenjang lomba">
                                    @if($errors->has('jenjang'))
                                    <span class="help-block">{{$errors->first('jenjang')}}</span>
                                    @endif
                                </div>
                                <div class="form-group{{$errors->has('alamat_pertama') ? 'has-error' : ''}}">
                                    <label for="exampleInputEmail1">Alamat Baris Pertama</label>
                                    <textarea name="alamat_pertama" value="{{old('alamat_pertama')}}" type="text"
                                        class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                        placeholder="Masukkan alamat baris pertama"></textarea>
                                    @if($errors->has('alamat_pertama'))
                                    <span class="help-block">{{$errors->first('alamat_pertama')}}</span>
                                    @endif
                                </div>
                                <div class="form-group{{$errors->has('alamat_kedua') ? 'has-error' : ''}}">
                                    <label for="exampleInputEmail1">Alamat Baris Kedua</label>
                                    <textarea name="alamat_kedua" value="{{old('alamat_kedua')}}" type="text"
                                        class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                        placeholder="Masukkan alamat baris kedua"></textarea>
                                    @if($errors->has('alamat_kedua'))
                                    <span class="help-block">{{$errors->first('alamat_kedua')}}</span>
                                    @endif
                                </div>
                                <div class="form-group{{$errors->has('tahun_lomba') ? 'has-error' : ''}}">
                                    <label for="exampleInputEmail1">Tahun Lomba</label>
                                    <input name="tahun_lomba" value="{{old('tahun_lomba')}}" type="text"
                                        class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                        placeholder="yyyy">
                                    @if($errors->has('tahun_lomba'))
                                    <span class="help-block">{{$errors->first('tahun_lomba')}}</span>
                                    @endif
                                </div>
                                <div class="form-group{{$errors->has('tahun_ajaran') ? 'has-error' : ''}}">
                                    <label for="exampleInputEmail1">Tahun Ajaran</label>
                                    <input name="tahun_ajaran" value="{{old('tahun_ajaran')}}" type="text"
                                        class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                        placeholder="yyyy/yyyy">
                                    @if($errors->has('tahun_ajaran'))
                                    <span class="help-block">{{$errors->first('tahun_ajaran')}}</span>
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