@extends('layout.master')

@section('content')

<div style="background-image: url('{{ asset('pictures/mapview.jpeg') }}'); height: 100vh">
    <div class="row justify-content-center" style="height: 88vh">
        
        <div class="col-10 align-self-end">
            <div class="row justify-content-center m-2 mt-5 pt-5">
                <div class="col-12 border border-primary rounded-pill bg-light">
                    <div class="row">
                        <div class="col-12 input-group input-group-lg">
                            <span class="input-group-text text-primary transparent-background">
                                <i class="link-icon feather-32" data-feather="map-pin"></i>
                            </span>
                            <input type="text" name="searchbar" class="form-control transparent-background text-primary" placeholder="Wattado...?">
                            <button type="button" class="btn btn-primary rounded-pill border-3 h-75 align-self-center" data-bs-toggle="collapse" data-bs-target="#sidebar" aria-expanded="false">
                                <strong class="text-light">Filters</strong>
                            </button>
                        </div>
                    </div>
                          
                </div>
            </div>
            <div class="row">
                <div class="col-12 bg-primary p-3 rounded">
                    <div class="row justify-content-center p-2">
                        <div class="col-auto rounded-pill bg-light" >
                            <a class="nav-link text-primary" href="#"> 
                                <i class="link-icon feather-32" data-feather="plus-circle"></i>
                            </a>
                        </div>
                    </div>

                    <div class="card w-100 mb-2">
                        
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                    <img src="{{ asset('pictures/WhatsApp Image 2022-03-24 at 19.55.57.jpeg') }}" class="card-img-top" alt="...">
                                </div>
                                <div class="col-8 align-self-center">
                                    <h5 class="card-title fw-bold text-center">House Party at Vlad</h5>
                                    <p class="text-center">Today</p>
                                </div>
                            </div>
                            
                            
                            <div class="row">
                                <div class="col-6 align-self-center">
                                    <span class="text-primary" style="font-size: 0.8rem">
                                        <i class="link-icon feather-32" data-feather="map-pin"></i>
                                        NW1 0HL
                                    </span>
                                </div>
                                
                                <div class="col-2">
                                </div>
                                <div class="col-4">
                                        <a href="#"> 
                                            <button type="button" class="btn btn-primary w-100 h-100" data-bs-toggle="collapse" data-bs-target="#sidebar" aria-expanded="false">
                                                <strong style="font-size: 0.5rem">Attending</strong>
                                            </button>
                                        </a>
                                </div>
                            </div>
                        
                        </div>
                    </div>

                    <div class="card w-100">
                        
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                    <img src="{{ asset('pictures/event_image.jpeg') }}" class="card-img-top" alt="...">
                                </div>
                                <div class="col-8 align-self-center">
                                    <h5 class="card-title fw-bold text-center">Student Hackathon</h5>
                                    <p class="text-center">16/11/2020</p>
                                </div>
                            </div>
                            
                            
                            <div class="row">
                                <div class="col-4 align-self-center">
                                    <h6 >Friends  30+</h6>
                                </div>
                                
                                <div class="col-4">
                                        <a href="#"> 
                                            <button type="button" class="btn btn-primary w-100 h-100" data-bs-toggle="collapse" data-bs-target="#sidebar" aria-expanded="false">
                                               <strong style="font-size: 0.5rem">Buy Tickets</strong>
                                            </button>
                                        </a>
                                </div>
                                <div class="col-4">
                                        <a href="#"> 
                                            <button type="button" class="btn btn-primary w-100 h-100" data-bs-toggle="collapse" data-bs-target="#sidebar" aria-expanded="false">
                                                <strong style="font-size: 0.5rem">Invite friends</strong>
                                            </button>
                                        </a>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>       
    </div>
</div>

@endsection

@push('custom-scripts')
    <script>
        feather.replace();
    </script>
@endpush
