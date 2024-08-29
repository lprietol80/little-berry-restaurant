@extends('layouts.app')
@section('titulo', 'Mis productos')
@section('cabecera', 'Editar producto')
@section('contenido')
  <div class="flex justify-center my-6">
    <div class="card bg-base-100 w-96 shadow-2xl">
      <form class="card-body" action="{{ route('bookings.update', $booking->id) }}" 
      method="POST">
      @csrf
      @method('PUT')
      {{-- Nombre --}}
        <div class="form-control">
          <label class="label">
            <span class="label-text">Nombre</span>
          </label>
          <input type="text" name="nombre" value="{{ $booking->nombre }}" 
        placeholder="Nombre del booking" class="input input-bordered" required />
        </div>
      {{-- Descripción --}}
        <div class="form-control">
          <label class="label">
            <span class="label-text">Descripción</span>
          </label>
          <input type="text" name="descripcion" value="{{ $booking->descripcion }}" 
        placeholder="Descripción" class="input input-bordered" />
        </div>
      {{-- Precio --}}
        <div class="form-control">
          <label class="label">
            <span class="label-text">Precio</span>
          </label>
          <input type="number" name="precio" value="{{ $booking->precio }}" 
        placeholder="Precio" class="input input-bordered" required />
        </div>
      {{-- Stock --}}
        <div class="form-control">
          <label class="label">
            <span class="label-text">Stock</span>
          </label>
        <input type="number" name="stock" value="{{ $booking->stock }}" 
        placeholder="Stock" class="input input-bordered" required />
        </div>
      {{-- Botones --}}
        <div class="form-control mt-6">
          <button type="submit" class="btn btn-primary">Actualizar booking</button>
          <a href="{{ route('bookings.index')}}" class="btn btn-outline mt-4" 
        >Cancelar</a>
        </div>
      </form>
    </div>
  </div>
@endsection 