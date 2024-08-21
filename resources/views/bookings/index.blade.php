@extends('layouts.app')
 
@section('page-content')
@foreach ($bookings as $booking)
<div class="card bg-base-100 w-96 shadow-xl">
  <figure>
    <img
      src="https://picsum.photos/id/{{$booking -> id}}/240"
      alt="table reservation" />
  </figure>
  <div class="card-body">
    <h2 class="card-title">{{$booking -> Status}}</h2>
    <p>{{booking -> ServiceID}}</p>
    <div class="card-actions justify-end">
      <button class="btn btn-primary">Book</button>
    </div>
  </div> 
</div>    
@endforeach
@endsection 
