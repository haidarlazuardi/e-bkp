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
                                            <th>Jurusan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($major as $data)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$data->major}}</td>
                                            <td><a href="#" class="btn btn-warning btn-sm"
                                            data-id="{{$data->id}}"
                                            data-major="{{$data->major}}"
                                            data-toggle="modal" data-target="#editModal">Edit</a><a href="/jurusan/{{$data->id}}/delete" class="btn btn-danger btn-sm">Delete</button></a>
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
                            <h3 class="mb-0" > Input Jurusan </h3>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                        <form method="POST" action="{{route ('major.create')}}">
                            @csrf

                             <div class="form-group{{ $errors->has('major') ? ' has-danger' : '' }}">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <select name="major" class="form-control"  id="exampleFormControlSelect1">
                                    <option >Major</option>
                                    <option value="RPL">RPL</option>
                                    <option value="TKJ">TKJ</option>
                                    <option value="MMD">MMD</option>
                                    <option value="OTKP">OTKP</option>
                                    <option value="BDP">BDP</option>
                                    <option value="TBG">TBG</option>
                                    <option value="PHT">PHT</option>
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
        </div>

<!-- Modal Edit -->
<div class="modal fade" role="dialog" id="editModal">
<div class="modal-dialog">
    <div class="modal-content">
            <div class="modal-header">
                            <h3 class="mb-0" > Edit Jurusan </h3>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                        <form method="POST" action="{{route ('major.edit','update')}}">
                            @csrf
                            <input type="hidden" name="major_id" id="id" value="">
                            <div class="form-group{{ $errors->has('major') ? ' has-danger' : '' }}">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <select name="major" class="form-control"  id="major">
                                    <option >Major</option>
                                    <option value="RPL">RPL</option>
                                    <option value="TKJ">TKJ</option>
                                    <option value="MMD">MMD</option>
                                    <option value="OTKP">OTKP</option>
                                    <option value="BDP">BDP</option>
                                    <option value="TBG">TBG</option>
                                    <option value="PHT">PHT</option>
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
          var id = button.data('id')
          var major = button.data('major')
          var modal = $(this)

          modal.find('.modal-body #id').val(id);
          modal.find('.modal-body #major').val(major);

    })
    </script>
@endpush