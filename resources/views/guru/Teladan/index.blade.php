@extends('layouts.app')

@section('content')
@include('layouts.headers.cards')
<div class="container-fluid mt--7">
    <div class="row justify-content-center">
        <div class="col">
        
          <div class="card">
                <div class="card-header bg-transparent">
                    <h3 class="mb-0"> Data Siswa Teladan </h3>
                </div>

                <div class="card-body px-lg-5 py-lg-5 bg-secondary">
                <div class="table-responsive">
                           <br/>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Kode Siswa</th>
                                            <th>Point</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        @foreach($total as $data)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$data->student_id}}</td>
                                            <td>{{$data->count}}</td>
                                            <td></td>
                                        </tr>   
                                        @endforeach
                                    </tbody>
                                </table>
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
@endpush
