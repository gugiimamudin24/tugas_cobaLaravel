@extends('layout/main')

@section('title', 'Form Tambah data Mahasiswa')

@section('container')

<div class="container">
   <div class="row">
    <div class="col-8">
        <h1 class="mt-3">Form Tambah data Mahasiswa</h1>

    <form method="post" action="/students">
    @csrf
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Masukan Nama" value="{{old ('nama') }}">@error('nama')<div class="invalid-feedback">{{ $message}}</div>@enderror
        </div>
        <div class="form-group">
            <label for="nrp">NRP</label>
            <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" name="nrp" placeholder="Masukan NRP" value="{{old ('nrp') }}">
            @error('nrp')<div class="invalid-feedback">{{ $message}}</div>@enderror
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukan Email" value="{{old ('email') }}">
            @error('email')<div class="invalid-feedback">{{ $message}}</div>@enderror
        </div>
        <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan" placeholder="Masukan Jurusan" value="{{old ('nama') }}">
            @error('jurusan')<div class="invalid-feedback">{{ $message}}</div>@enderror
        </div>

        <button type="submit" class="btn btn-primary">Tambah Data</button>
        
    </form>
      

    </div>
  </div>
</div>
@endsection
