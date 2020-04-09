@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    <div class="container-fluid mt--7">
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="card">
                            <div class="card-header bg-transparent">
                            <h3 class="mb-0" > Input Rayon </h3>
                            </div>
                            
                            <div class="card-body px-lg-5 py-lg-5 bg-secondary">
                    <form method="POST" action="">
                        @csrf

                        <div class="form-group{{ $errors->has('rayon') ? ' has-danger' : '' }}">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                </div>
                                <input class="form-control{{ $errors->has('rayon') ? ' is-invalid' : '' }}"
                                    placeholder="{{ __('Rayon') }}" type="text" name="rayon" required autofocus>
                            </div>
                            @if ($errors->has('rayon'))
                            <span class="invalid-feedback" style="display: block;" role="alert">
                                <strong>{{ $errors->first('rayon') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <select class="form-control"  id="exampleFormControlSelect1">
                                    <option>Pembimbing</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary mt-4">{{ __('save') }}</button>
                    </div>
                    </div>
                </div>
                </form>
            </div>
        </div>


    @include('layouts.footers.auth')
</div>
    @endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush