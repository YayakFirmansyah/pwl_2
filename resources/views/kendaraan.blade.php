@extends('layouts.template')

@section('title')
    Kendaraan
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Kendaraan</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Kendaraan</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
  
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Info boxes -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Table Kendaraan</h3>

              <div class="card-tools">
                <ul class="pagination pagination-sm float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table">
                    <thead>
                        <th>No</th>
                        <th>Nopol</th>
                        <th>Merk</th>
                        <th>Jenis</th>
                        <th>Tahun Buat</th>
                        <th>Warna</th>
                    </thead>
                    @foreach ($kendaraan as $no => $m)
                        <tbody>
                            <td>{{$no+1}}</td>
                            <td>{{$m->nopol}}</td>
                            <td>{{$m->merk}}</td>
                            <td>{{$m->jenis}}</td>
                            <td>{{$m->tahun_buat}}</td>
                            <td>{{$m->warna}}</td>
                        </tbody>
                    @endforeach
                </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.row -->
        </div><!--/. container-fluid -->
      </section>
      <!-- /.content -->
@endsection