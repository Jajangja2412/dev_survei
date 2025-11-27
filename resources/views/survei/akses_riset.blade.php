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

            <div class="d-flex justify-content-end mb-3">
                    <a href="/tambah-riset" class="btn btn-success">Tambah Data</a>
                </div>
                <div class="table-responsive m-t-0">
                <table id="" class="display nowrap table table-hover table-striped table-bordered"
                cellspacing="0" width="100%">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">NIP</th>
                                <th scope="col">KD Dosen</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @forelse ($data as $row)
                            <tr>
                                <td>{{ $row->nip }}</td>
                                <td>{{ $row->kd_dosen }}</td>
                                <td>{{ $row->nama }}</td>
                                <td>
                                  <form action="{{ route('riset.destroy', $row->nip) }}" method="POST" style="display:inline;">
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">Hapus</button>
                                  </form>
                                </td>
                            </tr>
                        @empty
                            <tr><td colspan="4" class="text-center">Tidak ada data tersedia</td></tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>

               
            </div>
        </div>
        
    </div>
</div>
@endsection