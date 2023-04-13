<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

use App\Models\Ticket;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('ticket.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'quantity' => 'required|integer|min:1',
        ]);

        $ticket = new Ticket;
        $ticket->name = $validatedData['name'];
        $ticket->email = $validatedData['email'];
        $ticket->phone = $validatedData['phone'];
        $ticket->quantity = $validatedData['quantity'];
        $ticket->ticket_id = 'TKT' .  Str::random(6); // generate unique ticket id
        $ticket->save();

        return back()->with('success', 'Tiket berhasil ditambahkan. ID Tiket Anda adalah ' . $ticket->ticket_id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
