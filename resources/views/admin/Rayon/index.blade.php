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
                                            <th>Rayon</th>
                                            <th>Pembimbing</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($rayon as $data)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$data->rayon}}</td>
                                            <td>{{$data->teacher_id}}</td>
                                            <td><button type="button" class="btn btn-warning btn-sm">Edit</button><button type="button" class="btn btn-danger btn-sm">Delete</button></td>
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
                            <h3 class="mb-0" > Input Rayon </h3>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            
                            <div class="modal-body">
                    <form method="POST" action="{{route ('rayon.create') }}">
                        @csrf

                         <div class="form-group{{ $errors->has('rayon') ? ' has-danger' : '' }}">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <select name="rayon" class="form-control"  id="exampleFormControlSelect1">
                                    <option >Rayon</option>
                                    <option value="CIB-1">CIB-1</option>
                                    <option value="CIA-2">CIA-2</option>
                                    <option value="CIC-3">CIC-3</option>
                                    <option value="TAJ-4">TAJ-4</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <select name="teacher_id" class="form-control"  id="exampleFormControlSelect1">
                                    <option>Pembimbing</option>
                                    <option value ="1"> kang dede</option>
                                    <option value ="2">mas ono</option>
                                    <option value ="3">mas muslih</option>
                                    <option value ="4">mem mala</option>
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
@endpush