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
                                            <th>Rombel</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($rombel as $data)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$data->rombel}}</td>
                                            <td><a href="#" class="btn btn-warning btn-sm"data-toggle="modal" 
                                                data-id="{{$data->id}}"
                                                data-rombel="{{$data->rombel}}" data-target="#editModal">Edit</a>  <a href="/rombel/{{$data->id}}/delete" class="btn btn-danger btn-sm">Delete</a>
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
                            <h3 class="mb-0" > Input Rombel </h3>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            
                            <div class="modal-body">
                            <form method="POST" action="{{ route('rombel.create') }}">
                               
                                @csrf

                                 <div class="form-group{{ $errors->has('rombel') ? ' has-danger' : '' }}">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <select name="rombel" class="form-control"  id="exampleFormControlSelect1">
                                    <option>Rombel</option>
                                    <option value="XII-1">XII-1</option>
                                    <option value="XII-2">XII-2</option>
                                    <option value="XII-3">XII-3</option>
                                    <option value="XII-4">XII-4</option>
                                    <option value="XI-1">XI-1</option>
                                    <option value="XI-2">XI-2</option>
                                    <option value="XI-3">XI-3</option>
                                    <option value="XI-4">XI-4</option>
                                    <option value="X-1">X-1</option>
                                    <option value="X-2">X-2</option>
                                    <option value="X-3">X-3</option>
                                    <option value="X-4">X-4</option>
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


<!-- Modal edit -->

<div class="modal fade" role="dialog" id="editModal">
<div class="modal-dialog">
    <div class="modal-content">
            <div class="modal-header">
                            <h3 class="mb-0" > Edit Rombel </h3>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            
                            <div class="modal-body">
                            <form method="POST" action="{{ route('rombel.edit','update') }}">
                               
                                @csrf
                                <input type="hidden" name="rombel_id" id="id" value="">
                                 <div class="form-group{{ $errors->has('rombel') ? ' has-danger' : '' }}">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <select name="rombel" class="form-control" id="rombel">
                                    <option>Rombel</option>
                                    <option value="XII-1">XII-1</option>
                                    <option value="XII-2">XII-2</option>
                                    <option value="XII-3">XII-3</option>
                                    <option value="XII-4">XII-4</option>
                                    <option value="XI-1">XI-1</option>
                                    <option value="XI-2">XI-2</option>
                                    <option value="XI-3">XI-3</option>
                                    <option value="XI-4">XI-4</option>
                                    <option value="X-1">X-1</option>
                                    <option value="X-2">X-2</option>
                                    <option value="X-3">X-3</option>
                                    <option value="X-4">X-4</option>
                                   
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
          var rombel = button.data('rombel')
          var modal = $(this)

          modal.find('.modal-body #id').val(id);
          modal.find('.modal-body #rombel').val(rombel);

    })
    </script>
@endpush