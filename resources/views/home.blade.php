@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-white" style="background-color: rgb(255, 1, 136)">{{ __('Dashboard') }}
                    </div>

                    <div class="card-body">
                        <h2 class="text-center"> SELAMAT DATANG</h2>
                        <p>aplikasi ini di buat oleh ahmad balian von deris sebagai usaha saya untuk berkontribusi untuk
                            masyarakat indonesia</p>

                        @if (Auth::user()->level == 'masyarakat')
                            <a href="/lapor" class="btn btn-outline-primary">LAPOR CUY</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
