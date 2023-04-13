<?php

namespace App\Http\Controllers;

use App\Models\Kehadiran;
use App\Models\Ticket;

use Illuminate\Http\Request;

class KehadiranController extends Controller
{
    public function index()
    {
     echo "asa";
    }
    public function checkTicket(Request $request)
    {
        $validatedData = $request->validate([
            'ticket_id' => 'required|exists:tickets,ticket_id',
        ]);
    
        $ticket = Ticket::where('ticket_id', $validatedData['ticket_id'])->first();
        $concertAttendance = Kehadiran::where('ticket_id', $validatedData['ticket_id'])->first();
    
        if (!$concertAttendance) {
            return back()->with('error', 'Tiket tidak valid.');
        }
    
        if ($concertAttendance->is_used) {
            return back()->with('error', 'Tiket sudah digunakan.');
        }
    
        $concertAttendance->is_used = true;
        $concertAttendance->save();
    
        return view('verify', compact('ticket'))->with('success', 'Selamat! Tiket berhasil diverifikasi dan dapat digunakan untuk masuk ke konser.');
    }
    
    //
}
