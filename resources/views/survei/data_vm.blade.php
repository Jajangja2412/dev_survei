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

            <h4 class="card-title">Data Survei Visi Misi</h4>
                                <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                                <form action="/proses_backup_vm"  method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');" class="form d-flex" style="max-width: 300px; width: 50%;">
                                @csrf
                                    <input type="text" class="form-control" name="periode" placeholder="Periode">
                                    <button type="submit" name="backup" class="btn btn-info ml-2">Hapus dan Backup</button>
                                </form>

                                <div class="table-responsive m-t-10">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                            <th>NIP</th>
                                            <th>Nama</th>
                                            <th>Unit Kerja</th>
                                            <th>Program Studi</th>
                                            <th>UPPS</th>
                                            <th>F2-1</th>
                                            <th>F2-2</th>
                                            <th>F2-3</th>
                                            <th>F2-41</th>
                                            <th>F2-42</th>
                                            <th>F2-43</th>
                                            <th>F2-44</th>
                                            <th>F2-45</th>
                                            <th>F3-1</th>
                                            <th>F3-2</th>
                                            <th>F3-3</th>
                                            <th>F3-4</th>
                                            <th>F4</th>
                                            <th>Hapus</th>


                                            </tr>
                                        </thead>
                                     
                                        <tbody>
                                        @foreach($data as $item)
                                            <tr>
                                                <td>{{ $item->nip }}</td>
                                                <td>{{ $item->nama }}</td>
                                                <td>{{ $item->unit_kerja }}</td>
                                                <td>{{ $item->program_studi }}</td>
                                                <td>{{ $item->upps }}</td>
                                                <td>{{ $item->{'f2-1'} }}</td>
                                                <td>{{ $item->{'f2-2'} }}</td>
                                                <td>{{ $item->{'f2-3'} }}</td>
                                                <td>{{ $item->{'f2-41'} }}</td>
                                                <td>{{ $item->{'F2-42'} }}</td>
                                                <td>{{ $item->{'F2-43'} }}</td>
                                                <td>{{ $item->{'F2-44'} }}</td>
                                                <td>{{ $item->{'F2-45'} }}</td>
                                                <td>{{ $item->{'F3-1'} }}</td>
                                                <td>{{ $item->{'F3-2'} }}</td>
                                                <td>{{ $item->{'F3-3'} }}</td>
                                                <td>{{ $item->{'F3-4'} }}</td>
                                                <td>{{ $item->F4 }}</td>
                                                <td>
                                                <form action="/hapus_survei_vm/{{ $item->nip }}" method="POST" style="display:inline;">
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