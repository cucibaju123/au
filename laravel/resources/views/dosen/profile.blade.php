@extends('layouts.app')

@section('content')
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel panel-profile">
                <div class="clearfix">
                    <!-- LEFT COLUMN -->
                    <div class="profile-left">
                        <!-- PROFILE HEADER -->
                        <div class="profile-header">
                            <div class="overlay"></div>
                            <div class="profile-main">
                                <img src="{{$dosen->getAvatar()}}" class="img-circle" alt="Avatar" style="width: 80px; height: 80px">
                                <h3 class="name">{{$dosen->nama}}</h3>
                                <!--<span class="online-status status-available">Available</span>-->
                            </div>
                            <div class="profile-stat">
                                <div class="row">
                                    <div class="col-md-4 stat-item">
                                        {{$dosen->matkul->count()}}<span>Mata Kuliah</span>
                                    </div>
                                    <div class="col-md-4 stat-item">
                                        15 <span>Awards</span>
                                    </div>
                                    <div class="col-md-4 stat-item">
                                        2174 <span>Points</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END PROFILE HEADER -->
                        <!-- PROFILE DETAIL -->
                        <div class="panel profile-detail">
                            <div class="profile-info">
                                <h4 class="heading">Data Diri</h4>
                                <ul class="list-unstyled list-justify">
                                    <li>Jenis Kelamin <span>{{$dosen->jenis_kelamin}}</span></li>
                                    <li>Email <span>{{$dosen->email}}</span></li>
                                    <li>No.Telepon <span>{{$dosen->no_telp}}</span></li>
                                </ul>
                            </div>
                           
                            <div class="text-center"><a href="/dosen/{{$dosen->id}}/edit" class="btn btn-primary">Edit Profile</a></div>
                        </div>
                        <!-- END PROFILE DETAIL -->
                    </div>
                    <!-- END LEFT COLUMN -->
                    <!-- RIGHT COLUMN -->
                  
                    <!-- END RIGHT COLUMN -->
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>
@endsection