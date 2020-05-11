@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
<div class="content-wrapper">
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <br/>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add New</button>
                    <div class="table-responsive">
                    <br/>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>NIP</th>
                                    <th>Nama</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($teacher as $data)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$data->nip}}</td>
                                    <td>{{$data->full_name}}</td>
                                    <td><a href="#" 
                                                data-gid="{{$data->id}}"
                                                data-nip="{{$data->nip}}" 
                                                data-name="{{$data->full_name}}" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editModal">Edit</a><a href="/guru/{{$data->id}}/delete" class="btn btn-danger btn-sm">Delete</button></a>
                                </tr>
                               @endforeach
                            </tbody>
                        </table>
                    </div>
</div>   
 <div class="modal fade" role="dialog" id="myModal">
<div class="modal-dialog">
    <div class="modal-content">
            <div class="modal-header">
                            <h3 class="mb-0" > Input Guru </h3>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                    
                        <form  method="POST" action="{{route ('guru.create')}}">
                            @csrf

                            <div class="form-group{{ $errors->has('nip') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('nip') ? ' is-invalid' : '' }}" placeholder="{{ __('NIP') }}" type="number" name="nip" value="{{ old('nip') }}" required autofocus>
                                </div>
                                @if ($errors->has('nip'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('nip') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('fullname') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('fullname') ? ' is-invalid' : '' }}" placeholder="{{ __('Full Name') }}" type="text" name="full_name" value="{{ old('name') }}" required>
                                </div>
                                @if ($errors->has('fullname'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('fullname') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                    placeholder="{{ __('Email') }}" type="email" name="email" value="{{ old('email') }}"
                                    required>
                            </div>
                            @if ($errors->has('email'))
                            <span class="invalid-feedback" style="display: block;" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                           
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary mt-4">{{ __('Create account') }}</button>
                            </div>
                            </div>
                            </div>          
                        </form>                            
                </div>
            </div>


<div class="modal fade" role="dialog" id="editModal">
<div class="modal-dialog">
    <div class="modal-content">
            <div class="modal-header">
                            <h3 class="mb-0" > Edit Guru </h3>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                    
                        <form  method="POST" action="{{route ('guru.edit','update')}}">
                            @csrf
                            <input type="hidden" name="teacher_id" id="gid" value="">
                            <div class="form-group{{ $errors->has('nip') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('nip') ? ' is-invalid' : '' }}" placeholder="{{ __('NIP') }}" type="number" id="nip" name="nip" value="{{ old('nip') }}" required autofocus>
                                </div>
                                @if ($errors->has('nip'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('nip') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('fullname') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('fullname') ? ' is-invalid' : '' }}" placeholder="{{ __('Full Name') }}" type="text" id="name" name="full_name" value="{{ old('name') }}" required>
                                </div>
                                @if ($errors->has('fullname'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('fullname') }}</strong>
                                    </span>
                                @endif
                            </div>
                           
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary mt-4">{{ __('Update Guru') }}</button>
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
    <script>
        $('#editModal').on('show.bs.modal', function (event) {
          //console.log('Modal Opened');
          var button = $(event.relatedTarget)
          var gid = button.data('gid')
          var nip = button.data('nip')
          var name = button.data('name')
          var modal = $(this)

          modal.find('.modal-body #gid').val(gid);
          modal.find('.modal-body #nip').val(nip);
          modal.find('.modal-body #name').val(name);

    })
    </script>
@endpush