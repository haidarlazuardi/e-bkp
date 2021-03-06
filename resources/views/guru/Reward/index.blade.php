@extends('layouts.app')

@section('content')
@include('layouts.headers.cards')
</br>
<div class="content-wrapper">
<section class="content">
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-transparent">
                    <h3 class="mb-0"> Input Reward </h3>
                </div>
                <div class="card-body px-lg-5 py-lg-5 bg-secondary">

                <form method="POST" action="{{route ('guru.reward.create')}}">
                        @csrf
                        <div class="form-group{{ $errors->has('id_siswa') ? ' has-danger' : '' }}">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <select name="name" class="form-control"  id="name">
                                @if($student == null)
                                <option value=""></option>
                                    @else
                                    @foreach($student as $data)
                                    <option value="{{$data->id}}">{{$data->full_name}}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        

                        <div class="form-group{{ $errors->has('id_punishment') ? ' has-danger' : '' }}">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <select name="deskripsi" class="form-control"  id="deskripsi">
                                    @foreach($reward as $data)
                                    <option value="{{$data->id}}">{{$data->description}}</option>
                                   @endforeach 
                                   <input type="hidden" name="point" id="point">
                                </select>
                            </div>
                        </div>
                        

                        <div class="form-group{{ $errors->has('spectator') ? ' has-danger' : '' }}">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <input class="form-control{{ $errors->has('spectator') ? ' is-invalid' : '' }}"
                                    placeholder="{{ __('Spectator') }}" type="text" name="spectator" id="spectator" value="{{ old('spectator') }}"
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
</div>
</div>
</div>


@include('layouts.footers.auth')
</div>
@endsection

@push('js')
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
    <script>
        $(document).on('change', '#deskripsi',() => {
            var id = $('#deskripsi').val();
            $.ajax({
                dataType : 'json',
                type : 'get',
                url :  + id+ '/point',
                data : '',
                success:function(data){
                    $('#point').val(data.score);
                }
            })
        });
</script>

@endpush
