@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    
    <div class="container-fluid mt--7">
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="card">
                            <div class="card-header bg-transparent">
                            <h3 class="mb-0" > Input Guru </h3>
                            </div>
                            
                            <div class="card">
                            <form method="post">
                                <div class="form-group">
                                    <br>
                                    <input type="numeric" class="form-control" placeholder="Nip" name="nip" aria-describedby="basic-addon1">
                                    <br>
                                    <input type="text" class="form-control" placeholder="Nama" name="nama" aria-describedby="basic-addon1">
                                    <br>
                                    <input type="text" class="form-control" placeholder="Role" name="role" aria-describedby="basic-addon1">
                                    <br>
                                    <input type="text" class="form-control" placeholder="Password" name="password" aria-describedby="basic-addon1">
                                    <br>
                                    <button type="button" class="btn btn-primary btn-lg btn-block">Simpan</button>
                                </div>
                            <form>
                            </div>
                        </div>
                    </div>
                </div>

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush