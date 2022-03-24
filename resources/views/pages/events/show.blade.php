@extends('layout.master')

@section('content')

<div class="row">
    <div class="col-12">
        <img src="{{ asset('pictures/event_thumbnail.jpeg') }}" alt="" style="width: 100%">
    </div>
    <div class="col-12 py-3">
        <h2 class="text-center fw-bold">Vauxhall European Night</h2>
    </div>
    <div class="col-12">
        <p>As summer draws to a close we step into September with great weather to enjoy in the newly refurbished outdoor area💡
            Mesmerizing Lightbox, every Thursday night from 11pm.
            Expect 1000's of LEDS, C02 Cannons, Confetti, Tech House and 500 music lovers.</p>
    </div>
</div>

<div class="row pt-5">
    <div class="col-6">
        <h4 class="text-center fw-bold">Opening</h4>
        <p>Tuesday 11pm</p>
        
    </div>
    <div class="col-6">
        <h4 class="text-center fw-bold">Location</h4>
        <p>6A South Lambeth
            Place, London SW8 1SP</p>
        
    </div>
</div>

<div class="row py-3">
</div>

<div class="row">
    <div class="col-4">
        <strong>Share with friends</strong>
    </div>
    <div class="col-4">
        <i class="link-icon feather-32" data-feather="share"></i>
    </div>
</div>
<div class="row py-5 justify-content-end">
    <div class="col-6">
        <a href="#"> 
            <button type="button" class="btn btn-primary w-100" data-bs-toggle="collapse" data-bs-target="#sidebar" aria-expanded="false">
                <strong>Buy Ticket - $10</strong>
            </button>
        </a>
    </div>
</div>

@endsection

@push('custom-scripts')
    <script>
        feather.replace();
    </script>
@endpush