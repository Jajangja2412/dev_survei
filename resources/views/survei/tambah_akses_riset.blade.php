@extends('layouts.main')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
            @if (session()->has('success'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span
                            aria-hidden="true">&times;</span> </button>
                    <h3 class="text-success"><i class="fa fa-check-circle"></i> {{ session('success') }}
                    </h3>
                </div>
            @endif

                <h2 class="text-center"><b>Tambah Data Tim Riset</b></h2>
                <form action="/simpan-akses-riset" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nip">NIP:</label>
                        <input type="text" class="form-control @error('nip') is-invalid @enderror" id="nip" name="nip" required>
                        @error('nip')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="kd_dosen">Kode Dosen:</label>
                        <input type="text" class="form-control @error('kd_dosen') is-invalid @enderror" id="kd_dosen" name="kd_dosen" required>
                        @error('kd_dosen')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required>
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <a href="{{ asset('akses-pimpinan.js') }}" class="btn btn-secondary">Kembali</a>
                </form>
            


            </div>
        </div>
        
    </div>
</div>

@endsection