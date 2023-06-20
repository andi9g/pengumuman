<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PENERIMAAN - SMKN 1 GUNUNG KIJANG</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed text-sm">
<div class="wrapper">

  <!-- Preloader -->
  {{-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> --}}

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

    </ul>

    <marquee behavior="" direction="">SMK NEGERI 1 GUNUNG KIJANG, SISTEM INFORMASI PENGUMUMAN KELULUSAN...</marquee>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 text-center justify-content-center">
        <div class="image">
            <img src="{{ url('logo', ['logo.png']) }}" class="text-center" style="width: 90px">
        </div>
        <div class="info text-center">
            {{-- <img src="{{ url('logo', ['logo.png']) }}" class="text-center" style="width: 90px"> --}}
            {{-- <a href="#" class="d-block">Andi Bayu</a> --}}

        </div>
      </div>

      <!-- SidebarSearch Form -->

      <!-- Sidebar Menu -->
      <nav class="mt-2 info mx-2 text-center text-white">
        <h3>SI-INFO-PPDB</h3>
        <hr>

        <a href="">
            <p>Selamat bagi pendaftar yang telah lulus dan terdaftar pada SMKN 1 Gunung Kijang, pengumuman pendaftaran yang telah diterima dapat dilihat pada sistem informasi ini dan dapat melakukan pencarian berdasarkan nama, jurusan, dan jalur</p>


            <a href="https://www.smkn1gunungkijang.sch.id" class="btn btn-block btn-success">
                WEB UTAMA
            </a>

        </a>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0"><i class="fa fa-speaker"></i>PENGUMUMAN PENDAFTARAN</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">pengumuman</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>

    <section class="content">

        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">

            </div>

            @php
                $tanggalbuka = $pengaturan->tanggalbuka;
                $jambuka = $pengaturan->jambuka;
                $open = strtotime(date('Y-m-d H:i:s', strtotime($tanggalbuka." ".$jambuka)));
                $sekarang = strtotime(date("Y-m-d H:i:s"));
            @endphp
            @if ($sekarang >= $open)
            <div class="row">
              <section class="col-lg-12 connectedSortable">

                <div class="card card-outline card-secondary">

                  <div class="card-header my-0 pb-0">
                    <!-- Button trigger modal -->

                    <form action="" method="get" class="d-inline my-0 py-0">
                        <div class="row my-0 py-0">
                                <div class="col-md-8 my-0 py-0">
                                    <div class="row">
                                        <div class="col-md-6 my-0 py-0">
                                            <div class='form-group'>
                                                <select name='jurusan' onchange="submit()" id='forjurusan' class='form-control'>
                                                    <option value=''>KESELURUHAN</option>
                                                    @foreach ($jurusan_d as $item)
                                                    <option value='{{$item->jurusan}}' @if ($jurusan == $item->jurusan)
                                                        selected
                                                    @endif>{{$item->jurusan}}</option>

                                                    @endforeach
                                                <select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 my-0 py-0">
                                            <div class='form-group'>
                                                <select name='jalur' onchange="submit()" id='forjalur' class='form-control'>
                                                    <option value=''>KESELURUHAN</option>
                                                    @foreach ($jalur_d as $item)
                                                    <option value='{{$item->jalur}}' @if ($jalur == $item->jalur)
                                                        selected
                                                    @endif>{{$item->jalur}}</option>
                                                    @endforeach
                                                <select>
                                            </div>
                                        </div>
                                    </div>



                                </div>

                            <div class="col-md-4">
                                    <div class="input-group my-0 py-0">
                                        <input type="text" class="form-control" name="keyword" placeholder="Nama peserta" aria-label="Recipient's username" aria-describedby="button-addon2" value="{{$keyword}}">
                                        <div class="input-group-append">
                                          <button class="btn btn-secondary" type="submit" id="button-addon2">
                                            <i class="fa fa-search"></i>
                                          </button>
                                        </div>
                                      </div>

                            </div>
                        </div>
                    </form>


                  </div><!-- /.card-header -->
                  <div class="card-body my-0">
                    {{-- {{$siswa}} --}}


                    <div class="table-responsive">
                        <table class="table table-hover table-sm table-striped w-100 table-bordered">
                            <thead class="bg-success">

                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Jurusan</th>
                                    <th>Jalur</th>
                                </tr>
                            </thead>
                            @foreach ($siswa as $item)
                            <tr>
                                <td width="1px" class="text-center">{{$loop->iteration + $siswa->firstItem() - 1}}</td>
                                <td nowrap class="text-bold">{{$item->nama}}</td>
                                <td>{{($item->jk=="L")?"Laki-laki":"Perempuan"}}</td>
                                <td class="text-center">{{$item->jurusan}}</td>
                                <td>{{$item->jalur}}</td>

                            </tr>


                            @endforeach

                        </table>

                    </div>

                    <table align="">
                        <tr>
                            <td>Halaman</td>
                            <td>:</td>
                            <td>{{$siswa->currentPage()}}</td>
                        </tr>
                        <tr>
                            <td>Total Data</td>
                            <td>:</td>
                            <td>{{$siswa->total()}}</td>
                        </tr>
                        <tr>
                            <td>Jumlah Tampil</td>
                            <td>:</td>
                            <td>{{$siswa->count()}}</td>
                        </tr>
                    </table>
                  </div>
                </div>


              </section>
              <section class="col-lg-12 connectedSortable my-0 py-0">
                <div class="card my-0 py-0" style="background: none;border:none;box-shadow: none">
                    <div class="card-header py-0 my-0" style="background: none;border:none;box-shadow: none">
                        {{$siswa->links('vendor.pagination.bootstrap-4')}}

                    </div>
                </div>
              </section>
            </div>

            @else

            <div class="row">
                <div class="col-12">
                    <div class="card card-outline card-secondary text-center">
                        <div class="card-header mb-0 pb-1">
                            <h3>PEMBERITAHUAN</h3>
                        </div>

                        <div class="card-body">
                            <h4>Pengumuman akan dibuka pada:</h4>
                            <h4><b>
                                {{\Carbon\Carbon::parse($tanggalbuka)->isoFormat('dddd, DD MMMM Y')}}
                            </b></h4>
                            <h2>Pukul : {{date("H:i",strtotime($jambuka))}}</h2>
                        </div>
                    </div>
                </div>
            </div>

            @endif
            <!-- /.row (main row) -->
        </div>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; {{date('Y')}} <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
@include('sweetalert::alert')
</body>
</html>
