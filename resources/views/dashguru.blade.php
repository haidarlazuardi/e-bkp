@extends('layouts.appguru')

@section('content')
    @include('layouts.headers.cards')
    
    <div class="container-fluid mt--7">

        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush