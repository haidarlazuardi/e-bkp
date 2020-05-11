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
                    <h3 class="mb-0"> Data Siswa Peringatan </h3>
                </div>

                <div class="card-body px-lg-5 py-lg-5 bg-secondary">
                <div class="table-responsive">
                           <br/>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Siswa</th>
                                            <th>Point</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($total as $data)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$student->where('id', $data->student_id)->first()->full_name }}</td>
                                            <td>{{$data->count}}</td>
                                        </tr>   
                                        @endforeach
                                    </tbody>
                                </table>
                                </br>
                <a href="{{route ('peringatan.cetak')}}" class="btn btn-primary" target="_blank">CETAK PDF</a>
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
