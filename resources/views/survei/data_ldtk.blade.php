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

            <h4 class="card-title">Data Survei LDTK</h4>
                                <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                                <form action="/proses_backup_ldtk"  method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');" class="form d-flex" style="max-width: 300px; width: 50%;">
                                @csrf
                                    <input type="text" class="form-control" name="periode" placeholder="Periode">
                                    <button type="submit" name="backup" class="btn btn-info ml-2">Hapus dan Backup</button>
                                </form>

                                <div class="table-responsive m-t-10">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                            <th>nip</th>
                                            <th>nama</th>
                                            <th>status</th>
                                            <th>nm_prodi</th>
                                            <th>f22</th>
                                            <th>f22h</th>
                                            <th>f22k</th>
                                            <th>f23h</th>
                                            <th>f23k</th>
                                            <th>f24h</th>
                                            <th>f24k</th>
                                            <th>f25h</th>
                                            <th>f25k</th>
                                            <th>f26h</th>
                                            <th>f26k</th>
                                            <th>f27h</th>
                                            <th>f27k</th>
                                            <th>f28h</th>
                                            <th>f28k</th>
                                            <th>f29h</th>
                                            <th>f29k</th>
                                            <th>f210h</th>
                                            <th>f210k</th>
                                            <th>f211h</th>
                                            <th>f211k</th>
                                            <th>f212h</th>
                                            <th>f212k</th>
                                            <th>f213h</th>
                                            <th>f213k</th>
                                            <th>f214h</th>
                                            <th>f214k</th>
                                            <th>f215h</th>
                                            <th>f215k</th>
                                            <th>f216h</th>
                                            <th>f216k</th>
                                            <th>f217h</th>
                                            <th>f217k</th>
                                            <th>f218h</th>
                                            <th>f218k</th>
                                            <th>f219</th>
                                            <th>f31h</th>
                                            <th>f31k</th>
                                            <th>f32h</th>
                                            <th>f32k</th>
                                            <th>f33h</th>
                                            <th>f33k</th>
                                            <th>f34h</th>
                                            <th>f34k</th>
                                            <th>f35h</th>
                                            <th>f35k</th>
                                            <th>f41h</th>
                                            <th>f41k</th>
                                            <th>f42h</th>
                                            <th>f42k</th>
                                            <th>f43h</th>
                                            <th>f43k</th>
                                            <th>f44h</th>
                                            <th>f44k</th>
                                            <th>f45h</th>
                                            <th>f45k</th>
                                            <th>f46h</th>
                                            <th>f46k</th>
                                            <th>f47h</th>
                                            <th>f47k</th>
                                            <th>f48h</th>
                                            <th>f48k</th>
                                            <th>f51h</th>
                                            <th>f51k</th>
                                            <th>f52h</th>
                                            <th>f52k</th>
                                            <th>f53h</th>
                                            <th>f53k</th>
                                            <th>f61h</th>
                                            <th>f61k</th>
                                            <th>f62h</th>
                                            <th>f62k</th>
                                            <th>f63h</th>
                                            <th>f63k</th>
                                            <th>f64h</th>
                                            <th>f64k</th>
                                            <th>f71h</th>
                                            <th>f71k</th>
                                            <th>f72h</th>
                                            <th>f72k</th>
                                            <th>f81h</th>
                                            <th>f81k</th>
                                            <th>f82h</th>
                                            <th>f82k</th>
                                            <th>f83h</th>
                                            <th>f83k</th>
                                            <th>f84h</th>
                                            <th>f84k</th>
                                            <th>f85h</th>
                                            <th>f85k</th>
                                            <th>f91h</th>
                                            <th>f91k</th>
                                            <th>f92h</th>
                                            <th>f92k</th>
                                            <th>tgl</th>
                                            <th>Hapus</th>


                                            </tr>
                                        </thead>
                                     
                                        <tbody>
                                        @foreach($data as $item)
                                            <tr>
                                            <td>{{ $item->nip }}</td>
                                            <td>{{ $item->nama }}</td>
                                            <td>{{ $item->status }}</td>
                                            <td>{{ $item->nm_prodi }}</td>
                                            <td>{{ $item->f22 }}</td>
                                            <td>{{ $item->f22h }}</td>
                                            <td>{{ $item->f22k }}</td>
                                            <td>{{ $item->f23h }}</td>
                                            <td>{{ $item->f23k }}</td>
                                            <td>{{ $item->f24h }}</td>
                                            <td>{{ $item->f24k }}</td>
                                            <td>{{ $item->f25h }}</td>
                                            <td>{{ $item->f25k }}</td>
                                            <td>{{ $item->f26h }}</td>
                                            <td>{{ $item->f26k }}</td>
                                            <td>{{ $item->f27h }}</td>
                                            <td>{{ $item->f27k }}</td>
                                            <td>{{ $item->f28h }}</td>
                                            <td>{{ $item->f28k }}</td>
                                            <td>{{ $item->f29h }}</td>
                                            <td>{{ $item->f29k }}</td>
                                            <td>{{ $item->f210h }}</td>
                                            <td>{{ $item->f210k }}</td>
                                            <td>{{ $item->f211h }}</td>
                                            <td>{{ $item->f211k }}</td>
                                            <td>{{ $item->f212h }}</td>
                                            <td>{{ $item->f212k }}</td>
                                            <td>{{ $item->f213h }}</td>
                                            <td>{{ $item->f213k }}</td>
                                            <td>{{ $item->f214h }}</td>
                                            <td>{{ $item->f214k }}</td>
                                            <td>{{ $item->f215h }}</td>
                                            <td>{{ $item->f215k }}</td>
                                            <td>{{ $item->f216h }}</td>
                                            <td>{{ $item->f216k }}</td>
                                            <td>{{ $item->f217h }}</td>
                                            <td>{{ $item->f217k }}</td>
                                            <td>{{ $item->f218h }}</td>
                                            <td>{{ $item->f218k }}</td>
                                            <td>{{ $item->f219 }}</td>
                                            <td>{{ $item->f31h }}</td>
                                            <td>{{ $item->f31k }}</td>
                                            <td>{{ $item->f32h }}</td>
                                            <td>{{ $item->f32k }}</td>
                                            <td>{{ $item->f33h }}</td>
                                            <td>{{ $item->f33k }}</td>
                                            <td>{{ $item->f34h }}</td>
                                            <td>{{ $item->f34k }}</td>
                                            <td>{{ $item->f35h }}</td>
                                            <td>{{ $item->f35k }}</td>
                                            <td>{{ $item->f41h }}</td>
                                            <td>{{ $item->f41k }}</td>
                                            <td>{{ $item->f42h }}</td>
                                            <td>{{ $item->f42k }}</td>
                                            <td>{{ $item->f43h }}</td>
                                            <td>{{ $item->f43k }}</td>
                                            <td>{{ $item->f44h }}</td>
                                            <td>{{ $item->f44k }}</td>
                                            <td>{{ $item->f45h }}</td>
                                            <td>{{ $item->f45k }}</td>
                                            <td>{{ $item->f46h }}</td>
                                            <td>{{ $item->f46k }}</td>
                                            <td>{{ $item->f47h }}</td>
                                            <td>{{ $item->f47k }}</td>
                                            <td>{{ $item->f48h }}</td>
                                            <td>{{ $item->f48k }}</td>
                                            <td>{{ $item->f51h }}</td>
                                            <td>{{ $item->f51k }}</td>
                                            <td>{{ $item->f52h }}</td>
                                            <td>{{ $item->f52k }}</td>
                                            <td>{{ $item->f53h }}</td>
                                            <td>{{ $item->f53k }}</td>
                                            <td>{{ $item->f61h }}</td>
                                            <td>{{ $item->f61k }}</td>
                                            <td>{{ $item->f62h }}</td>
                                            <td>{{ $item->f62k }}</td>
                                            <td>{{ $item->f63h }}</td>
                                            <td>{{ $item->f63k }}</td>
                                            <td>{{ $item->f64h }}</td>
                                            <td>{{ $item->f64k }}</td>
                                            <td>{{ $item->f71h }}</td>
                                            <td>{{ $item->f71k }}</td>
                                            <td>{{ $item->f72h }}</td>
                                            <td>{{ $item->f72k }}</td>
                                            <td>{{ $item->f81h }}</td>
                                            <td>{{ $item->f81k }}</td>
                                            <td>{{ $item->f82h }}</td>
                                            <td>{{ $item->f82k }}</td>
                                            <td>{{ $item->f83h }}</td>
                                            <td>{{ $item->f83k }}</td>
                                            <td>{{ $item->f84h }}</td>
                                            <td>{{ $item->f84k }}</td>
                                            <td>{{ $item->f85h }}</td>
                                            <td>{{ $item->f85k }}</td>
                                            <td>{{ $item->f91h }}</td>
                                            <td>{{ $item->f91k }}</td>
                                            <td>{{ $item->f92h }}</td>
                                            <td>{{ $item->f92k }}</td>
                                            <td>{{ $item->tgl }}</td>
                                                <td>
                                                <form action="/hapus_survei_ldtk/{{ $item->nip }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">Hapus</button>
                                                </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                            
                                        </tbody>
                                    </table>
                                </div>
            


            </div>
        </div>
        
    </div>
</div>

@endsection