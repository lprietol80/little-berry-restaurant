@extends('layouts.app')


@section('page-content')
{{-- --crear un boton para agregar nuevas reservas-- --}}
<div class="flex justify-end m-4">
  <a href="{{route('bookings.create')}}" class="btn btn-outline">Nueva reserva</a>
</div>
<div class='grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 m-6'>
  @foreach ($bookings as $booking)
  <div class="card bg-base-100 w-96 shadowx-1 m-8">
    <div class="card bg-base-100 w-96 shadow-xl">
      <figure>
        <img
          src="https://i.pinimg.com/736x/48/98/3e/48983e3d343694dd9b780b9651e8793d.jpg" alt="table reservation" />
      </figure>
      <div class="card-body">
        <h1 class="badge badge-secondary badge-outline">Status: {{$booking -> Status}}</h1>
        <p class="badge badge-accent badge-outline">servicio: {{$booking -> ServiceID}}</p>
        <div class="card-actions justify-end">
          <a href="{{ route('bookings.edit', $booking->id) }}" class="btn btn-primary" >Editar</a>  
          <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST">
            @csrf
            @method("DELETE")
            <button type="submit" class="btn btn-warning">Eliminar</button>
            </form>
          <button class="btn btn-accent">Book</button>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection