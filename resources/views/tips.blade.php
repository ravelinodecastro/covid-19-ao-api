@extends('template.app')
@section('title', __('covid19.tips'))

@section('content')
    <div class="container mb-3">
        <h2 class="mt-4 mb-4">{{__('covid19.tips_header')}}<h2>
        <div class="row">
            @foreach ($tips as $tip)
            <div class="col-12 col-md-3">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="{{ url('/') .'/storage/tips/'. $tip->image }}" alt="{{ $tip->title }}"></p>
                                    <h4 class="card-title">{{ $tip->title }}</h4>
                                    <p class="card-text"></p>
                                    <div class="d-flex justify-content-center"><div class="bar"></div></div>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">{{ $tip->title }}</h4>
                                    <p class="card-text"></p>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection('content')