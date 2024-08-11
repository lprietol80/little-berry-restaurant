<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Booking::all(), 200); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar Productos 
        $datos = $request->validate([
        'UserID' =>['required', 'integer', 'max:10'],
        'ServiceID' =>['required','integer', 'max:10'],
        'Date' =>['required', 'date'],
        'Status' =>['required', 'varchar','max:255'], 
        ]);
        //Guardar Datos 
        $booking = Booking::create($datos); 
        // Respuesta al Cliente 
        return response()->json(['success' => true, 'message' => 'Reserva creada exitosamente'], 201);

    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        return response()->json($booking,200)
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Booking $booking)
    {
        // Validar Productos 
        $datos = $request->validate([
        'UserID' =>['required', 'integer', 'max:10'],
        'ServiceID' =>['required','integer', 'max:10'],
        'Date' =>['required', 'date'],
        'Status' =>['required', 'varchar','max:255'], 
        ]);
        //actualizar datos
        $booking -> update($datos); 
        // Respuesta al Cliente 
        return response()->json(['success' => true, 'message' => 'Reserva actualizada exitosamente'], 200);


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        //eliminar reserva
        $booking -> delete();
        //respuesta al cliente
        return response()->json(['success'=>true,'message'=>'La reserva ha sido eliminada correctamente'],200)
    }
}
