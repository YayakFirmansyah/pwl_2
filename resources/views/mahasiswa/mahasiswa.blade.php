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
              <h3 class="card-title">Data Mahasiswa</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <a href="{{ url('mahasiswa/create') }}" class="btn btn-primary m-3"><i class="fas fa-user-plus"></i> Create</a>
              <table class="table">
                <thead class="text center">
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Prodi</th>
                    <th>Kelas</th>
                    <th>Jenis Kelamin</th>
                    <th>HP</th>
                    <th>Action</th>
                </thead>
                @if($mhs->count() > 0)
                  @foreach ($mhs as $no => $m)
                    <tbody>
                      <td>{{$no+1}}</td>
                      <td>{{$m->nim}}</td>
                      <td>{{$m->nama}}</td>
                      <td>{{$m->prodi->prodi}}</td>
                      <td>{{$m->kelas->nama_kelas}}</td>
                      <td>{{$m->jk}}</td>
                      <td>{{$m->hp}}</td>
                      <td>
                        <form action="{{ url('/mahasiswa/'.$m->id)}}" method="POST">
                          <a href="{{ url('/mahasiswa/'.$m->id.'/edit/') }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Edit</a>
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')"><i class="fas fa-trash"></i> Delete</button>
                        </form>
                      </td>
                </tbody>
                  @endforeach
                @else
                  <tr><td colspan="6" class="text-center">Data Tidak Ada</td></tr>
                @endif
              </table>
              
              <div class="card-tools m-3">
                {{$mhs->links()}}
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.row -->
        </div><!--/. container-fluid -->
      </section>
      <!-- /.content -->
@endsection