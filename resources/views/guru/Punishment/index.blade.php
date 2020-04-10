@extends('layouts.app')

@section('content')
@include('layouts.headers.cards')
<div class="container-fluid mt--7">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header bg-transparent">
                    <h3 class="mb-0"> Input Siswa </h3>
                </div>
                <div class="card-body px-lg-5 py-lg-5 bg-secondary">

                    <form method="POST" action="">
                        @csrf

                        <div class="form-group{{ $errors->has('id_punishment') ? ' has-danger' : '' }}">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <select class="form-control"  id="exampleFormControlSelect1">
                                    <option>ID Punishment</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('punishment') ? ' has-danger' : '' }}">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                </div>
                                <input class="form-control{{ $errors->has('punishment') ? ' is-invalid' : '' }}"
                                    placeholder="{{ __('Punishment') }}" type="text" name="punishment" required autofocus>
                            </div>
                            @if ($errors->has('punishment'))
                            <span class="invalid-feedback" style="display: block;" role="alert">
                                <strong>{{ $errors->first('punishment') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('id_siswa') ? ' has-danger' : '' }}">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <select class="form-control"  id="exampleFormControlSelect1">
                                    <option>ID Siswa</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                    placeholder="{{ __('Name') }}" type="email" name="name" value="{{ old('name') }}"
                                    required>
                            </div>
                            @if ($errors->has('name'))
                            <span class="invalid-feedback" style="display: block;" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('spectator') ? ' has-danger' : '' }}">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <input class="form-control{{ $errors->has('spectator') ? ' is-invalid' : '' }}"
                                    placeholder="{{ __('Name') }}" type="email" name="spectator" value="{{ old('spectator') }}"
                                    required>
                            </div>
                            @if ($errors->has('spectator'))
                            <span class="invalid-feedback" style="display: block;" role="alert">
                                <strong>{{ $errors->first('spectator') }}</strong>
                            </span>
                            @endif
                        </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary mt-4">{{ __('save') }}</button>
                </div>
                </div>
            </div>

            </form>
       
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
