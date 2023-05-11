@extends('layouts.template')

@section('title')
    Create Data Mahasiswa
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Create Data Mahasiswa</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Mahasiswa</li>
                <li class="breadcrumb-item active">Create Data Mahasiswa</li>
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
              <h3 class="card-title">Form Mahasiswa</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              {{-- <form action="{{ url('mahasiswa') }}" method="POST">
                @csrf
              <div class="form-group">
                <label for="nim">NIM</label>
                <input type="number" id="nim" class="form-control">
                @error('nim')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" id="nama" class="form-control">
                @error('nama')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
              <div class="form-group">
                <label for="jk">Jenis Kelamin</label>
                <select id="jk" class="form-control custom-select">
                  <option selected disabled>Select one</option>
                  <option value="l">Laki - Laki</option>
                  <option value="p">Perempuan</option>
                </select>
                @error('jk')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
              <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" id="tempat_lahir" class="form-control">
                @error('tempat_lahir')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
              <div class="form-group">
                <label for="tanggl_lahir">Tanggal Lahir</label>
                <input type="date" id="tanggal_lahir" class="form-control">
                @error('tanggal_lahir')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
              <div class="form-group">
                <label for="hp">No. HP</label>
                <input type="text" id="hp" class="form-control">
                @error('hp')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea id="alamat" class="form-control" rows="4"></textarea>
                @error('alamat')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
              <div class="row">
                <div class="col-12">
                  <a href="#" class="btn btn-secondary">Cancel</a>
                  <input type="submit" value="Simpan" class="btn btn-success float-right">
                </div>
              </div>
            </form> --}}

            <form method="POST" action="{{ $url_form }}">
              @csrf
              {!! (isset($mhs))? method_field('PUT') : '' !!}
              <div class="form-group">
                <label>NIM</label>
                <input class="form-control form-control-border border-width-2 @error('nim') is-invalid @enderror" value="{{ isset($mhs)? $mhs->nim : old('nim') }}" name="nim" type="text" />
                @error('nim')
                  <span class="error invalid-feedback">{{ $message }} </span>
                @enderror
              </div>
              <div class="form-group">
                <label>Nama</label>
                <input class="form-control form-control-border border-width-2 @error('nama') is-invalid @enderror" value="{{ isset($mhs)? $mhs->nama : old('nama') }}" name="nama" type="text"/>
                @error('nama')
                  <span class="error invalid-feedback">{{ $message }} </span>
                @enderror
              </div>
              <div class="form-group">
                <label>Prodi</label>
                <select name="prodi_id" class="custom-select form-control-border border-width-2 @error('prodi_id') is-invalid @enderror">
                  <option value="" selected disabled hidden>Select Prodi</option>
                    @foreach ($prodi as $p)
                      <option value="{{$p->prodi_id}}" {{ isset($mhs)? (($mhs->prodi_id == $p->prodi_id) ? "selected" : "") : ''}} {{ old('prodi_id') == $p->prodi_id ? "selected" : "" }}>{{$p->prodi}}</option>
                  @endforeach
                </select>
                @error('prodi_id')
                  <span class="error invalid-feedback">{{ $message }} </span>
                @enderror
              </div>
              <div class="form-group">
                <label>Kelas</label>
                <select name="kelas_id" class="custom-select form-control-border border-width-2 @error('kelas_id') is-invalid @enderror">
                  <option value="" selected disabled hidden>Select Kelas</option>
                    @foreach ($kelas as $k)
                      <option value="{{$k->kelas_id}}" {{ isset($mhs)? (($mhs->kelas_id == $k->kelas_id) ? "selected" : "") : ''}} {{ old('kelas_id') == $k->kelas_id ? "selected" : "" }}>{{$k->nama_kelas}}</option>
                  @endforeach
                </select>
                @error('kelas_id')
                  <span class="error invalid-feedback">{{ $message }} </span>
                @enderror
              </div>
              <div class="form-group">
                <label>Jenis Kelamin</label>
                <select name="jk" class="form-control-border border-width-2 custom-select @error('jk') is-invalid @enderror">
                  <option value="" selected disabled hidden>Select Jenis Kelamin</option>
                  <option value="Laki-Laki" {{ isset($mhs)? (($mhs->jk == 'Laki-Laki') ? "selected" : "") : ''}} {{ old('jk') == 'Laki-Laki' ? "selected" : "" }}>Laki-Laki</option>
                  <option value="Perempuan" {{ isset($mhs)? (($mhs->jk == 'Perempuan') ? "selected" : "") : ''}} {{ old('jk') == 'Perempuan' ? "selected" : "" }}>Perempuan</option>
                </select>
                @error('jk')
                  <span class="error invalid-feedback">{{ $message }} </span>
                @enderror
              </div>
              <div class="form-group">
                <label>Tempat lahir</label>
                <input class="form-control form-control-border border-width-2 @error('tempat_lahir') is-invalid @enderror" value="{{ isset($mhs)? $mhs->tempat_lahir : old('tempat_lahir') }}" name="tempat_lahir" type="text"/>
                @error('tempat_lahir')
                  <span class="error invalid-feedback">{{ $message }} </span>
                @enderror
              </div>
              <div class="form-group">
                <label>Tanggal Lahir</label>
                <input class="form-control form-control-border border-width-2 @error('tanggal_lahir') is-invalid @enderror" value="{{ isset($mhs)? $mhs->tanggal_lahir : old('tanggal_lahir') }}" name="tanggal_lahir" type="date"/>
                @error('tanggal_lahir')
                  <span class="error invalid-feedback">{{ $message }} </span>
                @enderror
              </div>
              <div class="form-group">
                <label>HP</label>
                <input class="form-control form-control-border border-width-2 @error('hp') is-invalid @enderror" value="{{ isset($mhs)? $mhs->hp : old('hp') }}" name="hp" type="text"/>
                @error('hp')
                  <span class="error invalid-feedback">{{ $message }} </span>
                @enderror
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <input class="form-control form-control-border border-width-2 @error('alamat') is-invalid @enderror" value="{{ isset($mhs)? $mhs->alamat : old('alamat') }}" name="alamat" type="text"/>
                @error('alamat')
                  <span class="error invalid-feedback">{{ $message }} </span>
                @enderror
              </div>
  
  
  
              <div class="form-group">
                <button class="btn btn-success float-right m-2"><i class="fas fa-save"></i> Simpan</button>
                <a class="btn btn-secondary float-left m-2" href="{{ url('mahasiswa') }}"><i class="fas fa-backspace"></i> Back</a>
              </div>
            </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.row -->
        </div><!--/. container-fluid -->
      </section>
      <!-- /.content -->
@endsection