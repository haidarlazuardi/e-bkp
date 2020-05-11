@extends('layouts.app')

@section('content')
@include('layouts.headers.cards')
<div class="container-fluid mt--7">
    <div class="row justify-content-center">
        <div class="col">
        
          <div class="card">
                <div class="card-header bg-transparent">
                    <h3 class="mb-0"> Data Punishment </h3>
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
                                            <th>waktu</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($punishment as $data)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$student->where('id', $data->student_id)->first()->full_name }}</td>
                                            <td>{{$data->score}}</td>
                                            <td>{{$data->created_at}}</td>
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
