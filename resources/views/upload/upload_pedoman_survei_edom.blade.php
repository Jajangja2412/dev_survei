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
                <div class="d-flex justify-content-end mb-3">
                    <a href="/tambah-pedoman-survei-edom" class="btn btn-success">Tambah Data</a>
                </div>
                <div class="table-responsive m-t-0">
                    <table id="" class="display nowrap table table-hover table-striped table-bordered"
                        cellspacing="0" width="100%">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Periode</th>
                                <th scope="col">PDF</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tbody>
                        @forelse ($result as $index => $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->periode }}</td>
                                <td>
                                    @if ($item->pdf)
                                        <a href="{{ url('download/' . $item->pdf) }}" target="_blank">Lihat</a>
                                    @else
                                        Tidak ada file
                                    @endif

                                </td>
                                <td>
                                    <form action="/hapus-pedoman-survei-edom/{{ $item->no }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">Data tidak ditemukan.</td>
                            </tr>
                        @endforelse
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection