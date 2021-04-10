<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
    <title>Register | Klorofil - Free Bootstrap Dashboard Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/linearicons/style.css')}}">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}">
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('admin/assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('admin/assets/img/favicon.png')}}">
</head>

<body>
    <!-- WRAPPER -->
    <div id="wrapper" style="background: white; margin: 1em">
        <div style="padding-top: 9em; margin-right: 10em; margin-left: 10em">
            <div class="content">
                <div class="header">
                    <div class="logo text-center"><img src="{{asset('images/smp.png')}}" style="width:60px;"
                            alt="Klorofil Logo"></div>
                    <p class="lead text-center">Daftar Akun Baru</p>
                </div>
                <form class="form-auth-small" action="/postregister" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="signin-name" class="control-label sr-only">Nama</label>
                        <input name="name" type="text" class="form-control" id="signin-email"
                            placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group{{$errors->has('email') ? 'has-error' : ''}}">
                        <label for="signin-email" class="control-label sr-only">Email</label>
                        <input name="email" type="email" class="form-control" id="signin-email" placeholder="Email">
                        @if($errors->has('email'))
                        <span class="help-block">{{$errors->first('email')}}</span>
                        @endif
                    </div>
                    <div class="form-group{{$errors->has('password') ? 'has-error' : ''}}">
                        <label for="signin-password" class="control-label sr-only">Password</label>
                        <input name="password" type="password" class="form-control" id="signin-password"
                            placeholder="Password">
                        @if($errors->has('password'))
                        <span class="help-block">{{$errors->first('password')}}</span>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg btn-block">DAFTAR</button>
                </form>
            </div>
        </div>
    </div>

    </div>
    <!-- END WRAPPER -->
</body>

<!--
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">Sistem Informasi Surat Tugas Dosen</h1>
							<p>by Kelompok 2 Prak RPL</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
        </div>
    -->

</html>