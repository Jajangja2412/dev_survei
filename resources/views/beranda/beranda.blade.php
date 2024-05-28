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
                <h1 class="card-title">Selamat Datang Di Website Survei Universitas Siber Indonesia</h1>
                <p><br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>    
                </p>
                
            </div>
        </div>
        
    </div>
</div>

@endsection