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
                <h4 class="card-title">Laporan Survei Layanan Kemahasiswaan</h4>
                <h6 class="card-subtitle">Pilih periode yang mau dilihat</h6>
                <div class="row">
                <div class="col-lg-6">
                    <form method="POST" action="{{ route('lk_lap_survei') }}">
                        @csrf
                        <div>
                            <select class="select2 form-control custom-select" name="cmbpilih" style="width: 100%; height:36px;">
                                <option value="">Pilih Periode</option>
                                @foreach ($result as $row)
                                    <option value="{{ $row->no }}" {{ $selected == $row->no ? 'selected' : '' }}>
                                        {{ $row->periode }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                </div>

                <div class="col-lg-6">
                    <div>
                        <input type="submit" name="upload" value="Submit" class="btn btn-primary" />
                    </div>
                    </form>
                </div>
                </div>

                @if ($detail)
                    <div class="col-lg-12 mt-4">
                        <h4>{{ $detail->periode }}</h4>
                        <embed type="application/pdf" src="{{ url('download/' . $detail->pdf) }}" width="100%" height="500px"></embed>
                    </div>
                @endif

            </div>
        </div>
    </div>
</div>


@endsection