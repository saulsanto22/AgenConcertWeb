<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Kehadiran;
use App\Models\Ticket;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $tickets = Ticket::all();

        return view('admin.index', [
            'tickets' => $tickets 
        ]);
       return view('admin.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.check');
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
    
        return view('verify-ticket', compact('ticket'))->with('success', 'Selamat! Tiket berhasil diverifikasi dan dapat digunakan untuk masuk ke konser.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
        $attendedAttendances = kehadiran::where('is_used', true)->get();
        $unattendedAttendances = kehadiran::where('is_used', false)->get();
    
        return view('admin.report', compact('attendedAttendances', 'unattendedAttendances'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
