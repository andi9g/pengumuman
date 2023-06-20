@extends('layout.app')
@section('warnasiswa')
    active bg-danger
@endsection

@section('judul')
    Data Siswa Baru
@endsection

@section('content')
<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">

    </div>
    <!-- /.row -->
    <!-- Main row -->
    <div class="row">
      <!-- Left col -->
      <section class="col-lg-12 connectedSortable">

        <div class="card card-outline card-secondary">
          <div class="card-header">
            <!-- Button trigger modal -->

                <div class="row">

                    <div class="col-md-8 mb-3">
                        <form action="tambah-siswa" class="d-inline">
                            <button type="submit" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambahsiswa">
                            <i class="fa fa-users"></i>Tambah Siswa
                            </button>
                        </form>
                        <a href="siswa" class="btn btn-secondary d-inline">
                            <i class="fas fa-refresh"></i>Refresh
                        </a>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary btn-sm mx-2" data-toggle="modal" data-target="#import">
                          Import
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="import" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Import Siswa Baru</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                    </div>
                                    <form action="{{ route('import.siswa', []) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <div class='form-group'>
                                                <label for='forfile' class='text-capitalize'>Masukan File xlsx</label>
                                                <input type='file' name='file' id='forfile' class='form-control' placeholder='masukan namaplaceholder'>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Import</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <form action="" method="get">
                            <div class="input-group">
                                <input type="text" class="form-control" name="keyword" placeholder="Kata kunci" aria-label="Recipient's username" aria-describedby="button-addon2">
                                <div class="input-group-append">
                                  <button class="btn btn-secondary" type="submit" id="button-addon2">
                                    <i class="fa fa-search"></i>
                                  </button>
                                </div>
                              </div>
                        </form>
                    </div>
                </div>



          </div><!-- /.card-header -->
          <div class="card-body ">
            {{-- {{$siswa}} --}}


            <div class="table-responsive">
                <table class="table table-hover table-sm table-striped w-100">
                    <thead>

                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Jurusan</th>
                            <th>Jalur</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    @foreach ($siswa as $item)
                    <tr>
                        <td>{{$loop->iteration + $siswa->firstItem() - 1}}</td>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->jk}}</td>
                        <td>{{$item->alamat}}</td>
                        <td>{{$item->jurusan}}</td>
                        <td>{{$item->jalur}}</td>
                        <td></td>

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
                    <td>Jumlah Data</td>
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

      <section class="col-lg-12 connectedSortable my-0 py-0 ">
        <div class="row">
            <div class="col-md-12 text-center">

            </div>
        </div>


      </section>


    </div>
    <!-- /.row (main row) -->
</div>
@endsection
