@extends('template.app')
@section('title', __('covid19.homepage'))

@section('content')
    <corona-virus-quiz></corona-virus-quiz>
    <div class="container mb-3">
        <div class="row">
     
            <div class="col-md-3">
                <div class="card border-danger m-3 m-md-1 p-3">
                    <div class="card border-danger shadow text-danger p-3 my-card" ><span class="fa fa-plus-square" aria-hidden="true"></span></div>
                    <div class="text-danger text-center mt-3"><h4>{{__('covid19.confirmed')}}</h4></div>
                    <div class="text-danger text-center mt-2"><h1>{{$data->confirmed}}</h1></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-warning m-3 m-md-1 p-3">
                    <div class="card border-warning shadow text-warning p-3 my-card"><span class="fa fa-exclamation-triangle" aria-hidden="true"></span></div>
                    <div class="text-warning text-center mt-3"><h4>{{__('covid19.suspects')}}</h4></div>
                    <div class="text-warning text-center mt-2"><h1>{{$data->suspects}}</h1></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-success m-3 m-md-1 p-3">
                    <div class="card border-success shadow text-success p-3 my-card" ><span class="fa fa-check-square " aria-hidden="true"></span></div>
                    <div class="text-success text-center mt-3"><h4>{{__('covid19.recovered')}}</h4></div>
                    <div class="text-success text-center mt-2"><h1>{{$data->recovered}}</h1></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-dark m-3 m-md-1 p-3">
                    <div class="card border-dark shadow text-dark p-3 my-card" ><span class="fa fa-meh-o" aria-hidden="true"></span></div>
                    <div class="text-dark text-center mt-3"><h4>{{__('covid19.deaths')}}</h4></div>
                    <div class="text-dark text-center mt-2"><h1> {{$data->deaths}}</h1></div>
                </div>
            </div>
            <div>
                <div class="px-4 py-1"><b class="font-weight-bold">{{__('covid19.total')}}</b>: {{$data->confirmed + $data->suspects +$data->recovered +$data->deaths}}</div>
                <div class="px-4 py-1">{{__('covid19.lastupdate')}}: {{$date}}</div>
            </div>
           
        </div>
    </div>
@endsection('content')