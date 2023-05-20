@extends('layouts.main')
@section('content')
@section('title', 'Edit Countries')
<!-- <h1>Create New Contact</h1>

<a href="{{route('contacts.index')}}">Back to contacts</a> -->


<main class="py-5">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header card-title">
                <strong>Edit Country</strong>
              </div>           
              <div class="card-body">
                <form action="{{route('countries.update', $countries->id)}}" method="POST">
                @csrf

                @method('PUT')
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group row">
                      <label for="countryName" class="col-md-3 col-form-label">Country Name</label>
                      <div class="col-md-9">
                        <input type="text" name="countryName" value="{{$countries->countryName}}" id="countryName" class="form-control ">
                        
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="zipcode" class="col-md-3 col-form-label">Zipcode</label>
                      <div class="col-md-9">
                        <input type="text" name="zipcode"  value="{{$countries->zipcode}}" id="zipcode" class="form-control">
                      </div>
                    </div>

                   

                    

                   
                   
                    <hr>
                    <div class="form-group row mb-0">
                      <div class="col-md-9 offset-md-3">
                          <button type="submit" class="btn btn-primary">Update</button>
                          <a href="{{route('countries.index')}}" class="btn btn-outline-secondary">Cancel</a>
                      </div>
                    </div>
                  </div>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

@endsection