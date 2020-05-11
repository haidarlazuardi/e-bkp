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
                                            <th>ID User</th>
                                            <th>NIS</th>
                                            <th>Nama</th>
                                            <th>JK</th>
                                            <th>Jurusan</th>
                                            <th>Rombel</th>
                                            <th>Rayon</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($student as $data)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$data->user_id}}</td>
                                            <td>{{$data->nis}}</td>
                                            <td>{{$data->full_name}}</td>
                                            <td>{{$data->gender}}</td>
                                            <td>{{$major->where('id', $data->major_id)->first()->major }}</td>
                                            <td>{{$rombel->where('id', $data->rombel_id)->first()->rombel }}</td>
                                            <td>{{$rayon->where('id', $data->rayon_id)->first()->rayon }}</td>
                                            <td><a href="#" class="btn btn-warning btn-sm" 
                                                data-sid="{{$data->id}}"
                                                data-nis="{{$data->nis}}" 
                                                data-name="{{$data->full_name}}" 
                                                data-gender="{{$data->gender}}"
                                                data-major="{{$data->major_id}}"
                                                data-rombel="{{$data->rombel_id}}"
                                                data-rayon="{{$data->rayon_id}}"
                                                data-toggle="modal" data-target="#editModal">Edit</a><a href="/siswa/{{$data->id}}/delete" class="btn btn-danger btn-sm">Delete</a></tr>
                                            @endforeach
                                    </tbody>
                                </table>
                            </div>
</div>
<div class="modal fade" role="dialog" id="myModal">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
            <div class="modal-header">
                    <h3 class="mb-0"> Input Siswa </h3>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">

                    <form method="post" action="{{ route('create') }}">
                        
                        @csrf

                        <div class="form-group{{ $errors->has('nis') ? ' has-danger' : '' }}">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                </div>
                                <input class="form-control{{ $errors->has('nis') ? ' is-invalid' : '' }}"
                                    placeholder="{{ __('NIS') }}" type="number" name="nis" required autofocus>
                            </div>
                            @if ($errors->has('nis'))
                            <span class="invalid-feedback" style="display: block;" role="alert">
                                <strong>{{ $errors->first('nis') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                </div>
                                <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                    placeholder="{{ __('Name') }}" type="text" name="full_name" value="{{ old('name') }}"
                                    required autofocus>
                            </div>
                            @if ($errors->has('name'))
                            <span class="invalid-feedback" style="display: block;" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>
              
                        <div class="form-group{{ $errors->has('gender') ? ' has-danger' : '' }}">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-gender-83"></i></span>
                                </div>
                                <select name="gender" class="form-control"  id="gender">
                                    <option value="L">Pria</option>
                                    <option value="P" > Wanita</option>
                                    
                                </select>
                            </div>
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

                        <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <select name="major_id" class="form-control"  id="exampleFormControlSelect1">
                                    <option>Jurusan</option>
                                @foreach($major as $data)
                                    <option value="{{$data->id}}">{{$data->major}}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <select name="rombel_id" class="form-control"  id="exampleFormControlSelect1">
                                    <option>Rombel</option>
                                    @foreach($rombel as $data)
                                    <option value="{{$data->id}}">{{$data->rombel}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <select name="rayon_id" class="form-control"  id="exampleFormControlSelect1">
                                    <option>Rayon</option>
                                    @foreach($rayon as $data)
                                    <option value="{{$data->id}}">{{$data->rayon}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary mt-4">{{ __('save') }}</button>
                </div>
                </div>
            </div>

            </form>
       
    </div>
</div>

<!-- Modal Edit -->

<div class="modal fade" role="dialog" id="editModal">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
            <div class="modal-header">
                    <h3 class="mb-0"> Edit Siswa </h3>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">

                    <form method="post" action="{{ route('siswa.edit','update') }}">
                        
                        @csrf
                        <input type="hidden" name="student_id" id="sid" value="">
                        <div class="form-group{{ $errors->has('nis') ? ' has-danger' : '' }}">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                </div>
                                <input class="form-control{{ $errors->has('nis') ? ' is-invalid' : '' }}"
                                    placeholder="{{ __('NIS') }}" type="number" id="nis" name="nis" required autofocus>
                            </div>
                            @if ($errors->has('nis'))
                            <span class="invalid-feedback" style="display: block;" role="alert">
                                <strong>{{ $errors->first('nis') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                </div>
                                <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                    placeholder="{{ __('Name') }}" type="text" id="name" name="full_name" value="{{ old('name') }}"
                                    required autofocus>
                            </div>
                            @if ($errors->has('name'))
                            <span class="invalid-feedback" style="display: block;" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>
              
                        <div class="form-group{{ $errors->has('gender') ? ' has-danger' : '' }}">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-gender-83"></i></span>
                                </div>
                                <select name="gender" class="form-control"  id="gender">
                                    <option value="L">Pria</option>
                                    <option value="P" > Wanita</option>
                                    
                                </select>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                    placeholder="{{ __('Email') }}" type="email" id="email" name="email" value="{{ old('email') }}"
                                    required>
                            </div>
                            @if ($errors->has('email'))
                            <span class="invalid-feedback" style="display: block;" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <select name="major_id" class="form-control"  id="major">
                                    <option>Jurusan</option>
                                @foreach($major as $data)
                                    <option value="{{$data->id}}">{{$data->major}}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <select name="rombel_id" class="form-control"  id="rombel">
                                    <option>Rombel</option>
                                    @foreach($rombel as $data)
                                    <option value="{{$data->id}}">{{$data->rombel}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <select name="rayon_id" class="form-control"  id="rayon">
                                    <option>Rayon</option>
                                    @foreach($rayon as $data)
                                    <option value="{{$data->id}}">{{$data->rayon}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                <div class="modal-footer">
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
<script>
        $('#editModal').on('show.bs.modal', function (event) {
          //console.log('Modal Opened');
          var button = $(event.relatedTarget)
          var sid = button.data('sid')
          var nis = button.data('nis')
          var name = button.data('name')
          var gender = button.data('gender')
          var major = button.data('major')
          var rombel = button.data('rombel')
          var rayon = button.data('rayon')
          var modal = $(this)

          modal.find('.modal-body #sid').val(sid);
          modal.find('.modal-body #nis').val(nis);
          modal.find('.modal-body #name').val(name);
          modal.find('.modal-body #gender').val(gender);
          modal.find('.modal-body #major').val(major);
          modal.find('.modal-body #rombel').val(rombel);
          modal.find('.modal-body #rayon').val(rayon);

    })
    </script>
@endpush
