@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">

    <button type="button" class="btn btn-primary">
  Companies<span class="badge badge-light">{{$company}}</span>
</button>

<button type="button" class="btn btn-success">
  Contacts<span class="badge badge-light">{{$contact}}</span>
</button>

<button type="button" class="btn btn-warning">
  Countries<span class="badge badge-light">{{$country}}</span>
</button>
        <!-- <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div> -->


        
    </div>
</div>
<script src="{{asset('js/jquery.min.js')}}"></script>
@endsection
