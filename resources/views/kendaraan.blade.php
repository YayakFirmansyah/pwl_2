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
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body bg-secondary">
              <div class="row">
                <table class="table">
                    <tr>
                        <th>No</th>
                        <th>Nopol</th>
                        <th>Merk</th>
                        <th>Jenis</th>
                        <th>Tahun Buat</th>
                        <th>Warna</th>
                    </tr>
                    @foreach ($kendaraan as $no => $m)
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$m->nopol}}</td>
                            <td>{{$m->merk}}</td>
                            <td>{{$m->jenis}}</td>
                            <td>{{$m->tahun_buat}}</td>
                            <td>{{$m->warna}}</td>
                        </tr>
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