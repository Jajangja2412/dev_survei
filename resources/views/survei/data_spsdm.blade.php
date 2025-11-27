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

            <h4 class="card-title">Data Survei SPSDM</h4>
                                <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                                <form action="/proses_backup_spsdm"  method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');" class="form d-flex" style="max-width: 300px; width: 50%;">
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
                                            <th>UPPS</th>
                                            <th>Program Studi</th>
                                            <th>F21</th>
                                            <th>F22</th>
                                            <th>F23</th>
                                            <th>F24</th>
                                            <th>F25</th>
                                            <th>F26</th>
                                            <th>F31</th>
                                            <th>F32</th>
                                            <th>F33</th>
                                            <th>F34</th>
                                            <th>F35</th>
                                            <th>F36</th>
                                            <th>F41</th>
                                            <th>F42</th>
                                            <th>F43</th>
                                            <th>F44</th>
                                            <th>F51</th>
                                            <th>F52</th>
                                            <th>F53</th>
                                            <th>F54</th>
                                            <th>F55</th>
                                            <th>F56</th>
                                            <th>F57</th>
                                            <th>F58</th>
                                            <th>F61</th>
                                            <th>F62</th>
                                            <th>F63</th>
                                            <th>F64</th>
                                            <th>F71</th>
                                            <th>F72</th>
                                            <th>F73</th>
                                            <th>F74</th>
                                            <th>F75</th>
                                            <th>F76</th>
                                            <th>F81</th>
                                            <th>F82</th>
                                            <th>F83</th>
                                            <th>F84</th>
                                            <th>F91</th>
                                            <th>F92</th>
                                            <th>F93</th>
                                            <th>F94</th>
                                            <th>F95</th>
                                            <th>F96</th>
                                            <th>Hapus</th>


                                            </tr>
                                        </thead>
                                     
                                        <tbody>
                                        @foreach($data as $item)
                                            <tr>
                                            <td>{{ $item->nip }}</td>
                                            <td>{{ $item->nama }}</td>
                                            <td>{{ $item->unit_kerja }}</td>
                                            <td>{{ $item->upps }}</td>
                                            <td>{{ $item->program_studi }}</td>
                                            <td>{{ $item->f21 }}</td>
                                            <td>{{ $item->f22 }}</td>
                                            <td>{{ $item->f23 }}</td>
                                            <td>{{ $item->f24 }}</td>
                                            <td>{{ $item->f25 }}</td>
                                            <td>{{ $item->f26 }}</td>
                                            <td>{{ $item->f31 }}</td>
                                            <td>{{ $item->f32 }}</td>
                                            <td>{{ $item->f33 }}</td>
                                            <td>{{ $item->f34 }}</td>
                                            <td>{{ $item->f35 }}</td>
                                            <td>{{ $item->f36 }}</td>
                                            <td>{{ $item->f41 }}</td>
                                            <td>{{ $item->f42 }}</td>
                                            <td>{{ $item->f43 }}</td>
                                            <td>{{ $item->f44 }}</td>
                                            <td>{{ $item->f51 }}</td>
                                            <td>{{ $item->f52 }}</td>
                                            <td>{{ $item->f53 }}</td>
                                            <td>{{ $item->f54 }}</td>
                                            <td>{{ $item->f55 }}</td>
                                            <td>{{ $item->f56 }}</td>
                                            <td>{{ $item->f57 }}</td>
                                            <td>{{ $item->f58 }}</td>
                                            <td>{{ $item->f61 }}</td>
                                            <td>{{ $item->f62 }}</td>
                                            <td>{{ $item->f63 }}</td>
                                            <td>{{ $item->f64 }}</td>
                                            <td>{{ $item->f71 }}</td>
                                            <td>{{ $item->f72 }}</td>
                                            <td>{{ $item->f73 }}</td>
                                            <td>{{ $item->f74 }}</td>
                                            <td>{{ $item->f75 }}</td>
                                            <td>{{ $item->f76 }}</td>
                                            <td>{{ $item->f81 }}</td>
                                            <td>{{ $item->f82 }}</td>
                                            <td>{{ $item->f83 }}</td>
                                            <td>{{ $item->f84 }}</td>
                                            <td>{{ $item->f91 }}</td>
                                            <td>{{ $item->f92 }}</td>
                                            <td>{{ $item->f93 }}</td>
                                            <td>{{ $item->f94 }}</td>
                                            <td>{{ $item->f95 }}</td>
                                            <td>{{ $item->f96 }}</td>
                                                <td>
                                                <form action="/hapus_survei_spsdm/{{ $item->nip }}" method="POST" style="display:inline;">
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