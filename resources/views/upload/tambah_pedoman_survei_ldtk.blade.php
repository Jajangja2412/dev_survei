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
            </div>
            <div class="card-body">
                <h2 class="text-center"><b>Tambah Pedoman Survei Layanan Dosen dan Tenaga Kependidikan</b></h2>
                <form action="/simpan-pedoman-survei-ldtk" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="periode">Periode</label>
                        <input type="text" class="form-control" id="periode" name="periode" required>
                    </div>
                    <div class="form-group">
                        <label for="pdf">PDF:</label>
                        <input type="file" class="form-control" id="pdf" name="pdf" accept="application/pdf" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <a href="/upload-pedoman-survei-ldtk" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection