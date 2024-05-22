@extends('template.main')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Mahasiswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Mahasiswa</h3>
  
                <div class="card-tools">
                <div class="card-tools">
                <a href="tambahmahasiswa.php" class="btn btn-primary">Tambah</a>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>NIM</th>
                      <th>Nama</th>
                      <th>Prodi</th>
                      <th>No Handphone</th>
                      <th>Alamat</th>
                      <th>Foto</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1;?>
                    @foreach ($mahasiswa as $m )
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $m->NIM }}</td>
                        <td>{{ $m->Nama }}</td>
                        <td>{{ $m->ID_Prodi }}</td>
                        <td>{{ $m->no_hp }}</td>
                        <td>{{ $m->Alamat }}</td>
                        <td><img src="images/{{ $m->Photo }}" width="50px" height="50px"></td>
                        <td><a href="" class="btn btn-warning">Edit
                            <a href="" class="btn btn-warning">Hapus  
                            </td>
                     </tr>
                      
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.row -->
          <!-- Main row -->
  
          <!-- /.row (main row) -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
  
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
  
  @endsection