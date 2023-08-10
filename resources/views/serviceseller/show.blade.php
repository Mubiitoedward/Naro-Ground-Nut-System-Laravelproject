
@extends('layouts.app')

@section('content')


<h1 class="text-center mt-2">{{ $service_sellers->Name }} | Detail</h1>
<hr>
<br>


<div class="container">
    <div class="row">
        <div class="col-md-9" style="display:flex">

            <div class="container m-2 p-2">
                <img  src = "{{asset('/images/'.$service_sellers->image_path)}}" height="300px" alt="...">
                <div class="container m-2 p-2">
                  <h2><b>Co.Name: </b>{{ $service_sellers->serviceSellerCompany }}</h2>
                  <h2><b>Sp.Name: </b>{{ $service_sellers->serviceName }}</h2>
                  <h4><b>Qty: </b>{{$service_sellers->Quantity}} {{ $service_sellers->Unit }}</h4>
                  <h3><b>Price Per Unit: </b>{{ $service_sellers->price }}.shs</h3>
                  <hr>
                  <p> {{ $service_sellers->Remarks }}</p>
                  <div class="form-group row">
                    <div class="col-sm-10 offset-sm-2">
                      <div class="col-sm-10 offset-sm-2">
                        <a href="{{ route('serviceseller') }}" class="btn btn-success col-sm-2 offset-sm-10">Back</a>
                        <a class="btn btn-info col-sm-8 offset-sm-2" href = "{{route('serviceseller_edit',$service_sellers->id)}}"> Edit</a>
                        <form method="DELETE" action="{{route('serviceseller_destroy',$service_sellers->id)}}">
                          @csrf
                           @method('DELETE') 
                          <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>

        </div>
       @endsection
      