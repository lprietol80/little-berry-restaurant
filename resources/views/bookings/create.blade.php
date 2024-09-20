@extends('layouts.app')

@section('titulo', 'Mis reservas')
@section('cabecera', 'Crear reserva')

@section('page-content')
<div class="flex justify-center my-6">
  <div class="card bg-base-100 w-96 shadow-2xl">
    <form class="card-body" action="{{ route('bookings.store') }}" method="POST">
    @csrf
    {{-- USERID --}}
      <div class="form-control">
        <label class="label">
        <span class="label-text">User Id</span>
        </label>
        <input type="number" name="userId" placeholder="Número de identificación" 
      class="input input-bordered" required />
      </div>
    {{-- Servicio --}}
      <div class="form-control">
        <label class="label">
          <span class="label-text">Servicios</span>  
        </label>
        <select class="input input-bordered"><p>Servicios:</p>
          <option class="input input-bordered"  value=10 >Cumpleaños</option>
          <option class="input input-bordered"  value=11 >Cita romántica </option>
          <option class="input input-bordered"  value=12 >Compromiso</option>
          <option class="input input-bordered"  value=13 >Negocios</option>
          <option class="input input-bordered"  value=14 >Amigos</option>
          <option class="input input-bordered"  value=15>Informal</option>
        </select>
      </div>


    {{-- Date --}}
      <div class="form-control">
        <label class="label">
          <span class="label-text">Fecha</span>
        </label>
      <input type="date" name="fecha" placeholder="Fecha" class="input 
      input-bordered" required />
      </div>
    {{-- Comensales --}}
      <div class="form-control">
        <label class="label">
        <span class="label-text"># de personas</span>
        </label>
        <input type="number" max="10" name="comensales" placeholder="# de personas" class="input input-bordered" required/>
      </div>
    {{-- botones --}}
      <div class="form-control mt-6">
        <button type="submit" class="btn btn-primary">Crear reserva</button>
        <a href="{{ route('bookings.index')}}" class="btn btn-outline mt-4" 
      >Cancelar</a>
      </div>
    </form>
  </div>
</div>
@endsection
