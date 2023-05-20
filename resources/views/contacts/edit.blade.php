@extends('layouts.main')
@section('content')
@section('title', 'Edit Contacts')
<!-- <h1>Create New Contact</h1>

<a href="{{route('contacts.index')}}">Back to contacts</a> -->


<main class="py-5">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header card-title">
                <strong>Edit Contact</strong>
              </div>           
              <div class="card-body">
                <form action="{{route('contacts.update', $contacts->id)}}" method="POST">
                @csrf

                @method('PUT')
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group row">
                      <label for="first_name" class="col-md-3 col-form-label">First Name</label>
                      <div class="col-md-9">
                        <input type="text" name="first_name" value="{{$contacts->first_name}}" id="countryName" class="form-control ">
                        
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="last_name" class="col-md-3 col-form-label">Last Name</label>
                      <div class="col-md-9">
                        <input type="text" name="age"  value="{{$contacts->last_name}}" id="age" class="form-control">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="email" class="col-md-3 col-form-label">Email</label>
                      <div class="col-md-9">
                        <input type="text" name="email"  value="{{$contacts->email}}" id="zipcode" class="form-control">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="phone" class="col-md-3 col-form-label">Phone</label>
                      <div class="col-md-9">
                        <input type="text" name="phone"  value="{{$contacts->phone}}" id="zipcode" class="form-control">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="address" class="col-md-3 col-form-label">Address</label>
                      <div class="col-md-9">
                        <input type="text" name="address"  value="{{$contacts->address}}" id="zipcode" class="form-control">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="country" class="col-md-3 col-form-label">Country</label>
                      <div class="col-md-9">
                        <input type="text" name="country"  value="{{$countries->countryName}}" id="zipcode" class="form-control">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="company" class="col-md-3 col-form-label">Company</label>
                      <div class="col-md-9">
                        <input type="text" name="company"  value="{{$companies->name}}" id="zipcode" class="form-control">
                      </div>
                    </div>

                    

                   

                    

                   
                   
                    <hr>
                    <div class="form-group row mb-0">
                      <div class="col-md-9 offset-md-3">
                          <button type="submit" class="btn btn-primary">Update</button>
                          <a href="{{route('contacts.index')}}" class="btn btn-outline-secondary">Cancel</a>
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