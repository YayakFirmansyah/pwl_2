@extends('layouts.template')

@section('title')
    Mahasiswa
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Mahasiswa</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Mahasiswa</li>
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
              <h3 class="card-title">Kelas : 2B</h3>

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
              <a href="{{ url('mahasiswa/create') }}" class="btn btn-primary m-3"><i class="fas fa-user-plus"></i> Create</a>
              <table class="table">
                <thead class="text center">
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>JK</th>
                    <th>HP</th>
                    <th>Action</th>
                </thead>
                @if($mhs->count() > 0)
                  @foreach ($mhs as $no => $m)
                    <tbody>
                      <td>{{$no+1}}</td>
                      <td>{{$m->nim}}</td>
                      <td>{{$m->nama}}</td>
                      <td>{{$m->jk}}</td>
                      <td>{{$m->hp}}</td>
                      <td>
                        <form action="{{ url('/mahasiswa/'.$m->id)}}" method="POST">
                          <a href="{{ url('/mahasiswa/'.$m->id.'/edit/') }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Edit</a>
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Delete</button>
                        </form>
                      </td>
                </tbody>
                  @endforeach
                @else
                  <tr><td colspan="6" class="text-center">Data Tidak Ada</td></tr>
                @endif
            </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.row -->
        </div><!--/. container-fluid -->
      </section>
      <!-- /.content -->
@endsection