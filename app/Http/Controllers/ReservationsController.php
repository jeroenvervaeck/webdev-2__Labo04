<?php

namespace App\Http\Controllers;

use App\Room;
use App\Client;
use App\Reservation;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getIndex() {
        $reservations = Reservation::where('date_end', '>', date('Y-m-d'))->get();

        return view('reservations.index', [
            'reservations' => $reservations
        ]);
    }

    public function getCreate(Client $client, Request $r) {

        $reserved_rooms = [];

        if( $r->dateFrom && $r->dateTo ) {
            $reserved_rooms = Reservation::whereBetween('date_start', [$r->dateFrom, $r->dateTo])
                                        ->orWhereBetween('date_end', [$r->dateFrom, $r->dateTo])
                                        ->orWhere(function($query) use($r) {
                                            $query->where('date_start', '<', $r->dateFrom)
                                                ->where('date_end', '>', $r->dateTo);
                                        })->pluck('room_id')->toArray();
        }

        $rooms = Room::get();

        return view('reservations.edit', [
            'rooms' => $rooms,
            'reserved_rooms' => $reserved_rooms,
            'client' => $client,
            'dateFrom' => $r->dateFrom,
            'dateTo' => $r->dateTo
        ]);
    }

    public function getEdit(Reservation $reservation, Request $r) {
        $reserved_rooms = [];

        if( $r->dateFrom && $r->dateTo ) {
            $reserved_rooms = Reservation::whereBetween('date_start', [$r->dateFrom, $r->dateTo])
                                        ->orWhereBetween('date_end', [$r->dateFrom, $r->dateTo])
                                        ->orWhere(function($query) use($r) {
                                            $query->where('date_start', '<', $r->dateFrom)
                                                ->where('date_end', '>', $r->dateTo);
                                        })->pluck('room_id')->toArray();
        }

        $rooms = Room::get();
        return view('reservations.edit', [
            'dateFrom' => $r->dateFrom,
            'dateTo' => $r->dateTo,
            'rooms' => $rooms,
            'reserved_rooms' => $reserved_rooms,
            'reservation' => $reservation,
            'client' => $reservation->client,
        ]);
    }

    public function postSave(Request $r) {

        if (!$r->client) {
            // update a reservation
            $reservation = Reservation::find($r->reservation_id);
            $reservation->room_id = $r->room;
            $reservation->date_start = $r->date_start;
            $reservation->date_end = $r->date_end;
            $reservation->save();
        } else {
            // Make a new reservation
            $reservation = new Reservation();
            $reservation->room_id = $r->room;
            $reservation->client_id = $r->client;
            $reservation->date_start = $r->date_start;
            $reservation->date_end = $r->date_end;
            $reservation->save();
        }

        return redirect()->route('reservations');
    }

    public function postDelete($id) {
        $reservation = Reservation::find($id);
        $reservation->delete();
        return redirect()->route('reservations');
    }

}
