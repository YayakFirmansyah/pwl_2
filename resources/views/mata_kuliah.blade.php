@extends('layouts.template')

@section('title')
    Mata Kuliah
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Mata Kuliah</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Mata Kuliah</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
  
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Tahun Akademik : 2022/2023 Genap<br>
                Kelas : 2B</h3>

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
                    <th>Hari</th>
                    <th>Jam</th>
                    <th>Kode MK</th>
                    <th>Mata Kuliah</th>
                    <th>Dosen</th>
                </thead>
                @foreach ($mata_kuliah as $no => $m)
                    <tbody>
                        <td>{{$no+1}}</td>
                        <td>{{$m->hari}}</td>
                        <td>{{$m->jam}}</td>
                        <td>{{$m->kode_mk}}</td>
                        <td>{{$m->mata_kuliah}}</td>
                        <td>{{$m->dosen}}</td>
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