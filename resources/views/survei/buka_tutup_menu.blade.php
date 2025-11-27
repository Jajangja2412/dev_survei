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

            <div class="table-responsive m-t-0">
                <table id="" class="display nowrap table table-hover table-striped table-bordered"
                cellspacing="0" width="100%">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Menu</th>
                                <th scope="col">Tanggal Mulai</th>
                                <th scope="col">Tanggal Tutup</th>
                                <th scope="col">Link Survei</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $row)
                                <form action="/update_buka_tutup" method="POST"> <!-- Use the route to the update function -->
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $row->id }}">
                                    <tr>
                                        <td>{{ $row->nama_menu }}</td>
                                        <td><input type="date" name="tgl_mulai" value="{{ date('Y-m-d', strtotime($row->tgl_mulai)) }}"></td>
                                        <td><input type="date" name="tgl_tutup" value="{{ date('Y-m-d', strtotime($row->tgl_tutup)) }}"></td>

                                        <td>
                                            <div class="input-group">
                                                <select name="link">
                                                    <option value="">-- menu buka nav bar --</option>  
                                                    <option value="Aktif" {{ $row->link === 'Aktif' ? 'selected' : '' }}>Aktif</option>
                                                    <option value="Tidak Aktif" {{ $row->link === 'Tidak Aktif' ? 'selected' : '' }}>Tidak Aktif</option>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <button type="submit" name="edit" class="btn btn-danger btn-sm">Ubah</button>
                                        </td>
                                    </tr>
                                </form>
                            @empty
                                <tr><td colspan="5" class="text-center">Tidak ada data tersedia</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            


            </div>
        </div>
        
    </div>
</div>

@endsection