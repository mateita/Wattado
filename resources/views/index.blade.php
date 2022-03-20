@extends('layout.master')

@section('content')
    <button type="button" class="btn btn-primary">Primary <i class="link-icon" data-feather="box"></i></button>
@endsection


    
@push('custom-scripts')
    <script>
        feather.replace();
    </script>
@endpush

