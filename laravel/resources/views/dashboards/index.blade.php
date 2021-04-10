@extends('layouts.app')

@section('content')
<div class="main">
        <div class="main-content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading">
                        <h1>Selamat Datang, {{auth()->user()->name}}!</h1>
                        <hr>
                        {{-- BARIS 1 --}}
                        <div class="row">
                          <div class="col-md-3">
                            <div class="metric">
                              <span class="icon"><i class="lnr lnr-envelope"></i></span>
                              <p>
                                <a href="/surat">
                                <span class="number">{{count($data_surat_lomba)}}</span>
                                <span class="title">Surat Lomba</span>
                               </a>
                              </p>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="metric">
                              <span class="icon"><i class="lnr lnr-envelope"></i></span>
                              <p>
                                <a href="/tugas">
                                <span class="number">{{count($data_surat_tugas)}}</span>
                                <span class="title">Surat Tugas</span>
                                </a>
                              </p>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="metric">
                              <span class="icon"><i class="lnr lnr-envelope"></i></span>
                              <p>
                                <a href="/kkn">
                                <span class="number">{{count($data_surat_kkn)}}</span>
                                <span class="title">Surat KKN</span>
                                </a>
                              </p>
                            </div>
                          </div>
                        </div>
                        {{-- BARIS 2 --}}
                        <div class="row">
                          <div class="col-md-3">
                            <div class="metric">
                              <span class="icon"><i class="lnr lnr-envelope"></i></span>
                              <p>
                                <a href="/pindah">
                                <span class="number">{{count($data_surat_pindah)}}</span>
                                <span class="title">Surat Pindah</span>
                                </a>
                              </p>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="metric">
                              <span class="icon"><i class="lnr lnr-envelope"></i></span>
                              <p>
                                <a href="/pengantar">
                                <span class="number">{{count($data_surat_pengantar)}}</span>
                                <span class="title">Surat Pengantar</span>
                                </a>
                              </p>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="metric">
                              <span class="icon"><i class="lnr lnr-user"></i></span>
                              <p>
                                <a href="/ruang">
                                <span class="number">{{count($data_siswa)}}</span>
                                <span class="title">Siswa</span>
                                </a>
                              </p>
                            </div>
                          </div>
                        </div>
                        {{-- BARIS 3 --}}
                        <div class="row">
                          <div class="col-md-3">
                            <div class="metric">
                              <span class="icon"><i class="lnr lnr-graduation-hat"></i></span>
                              <p>
                                <a href="/dosen">
                                <span class="number">{{count($data_guru)}}</span>
                                <span class="title">Guru</span>
                                </a>
                              </p>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="metric">
                              <span class="icon"><i class="lnr lnr-license"></i></span>
                              <p>
                                <a href="/jurusan">
                                <span class="number">{{count($data_peserta_kkn)}}</span>
                                <span class="title">Peserta KKN</span>
                                </a>
                              </p>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="metric">
                              <span class="icon"><i class="lnr lnr-book"></i></span>
                              <p>
                                <a href="/matkul">
                                <span class="number">{{count($data_cabang_lomba)}}</span>
                                <span class="title">Cabang Lomba</span>
                                </a>
                              </p>
                            </div>
                          </div>
                        </div>
                    
                    <div class="panel-body">

                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
</div>
@endsection