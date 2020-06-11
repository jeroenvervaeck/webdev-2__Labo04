@extends('layout')

@section('content')
  <div class="row">
    <div class="medium-12 large-12 columns">
      <h4>Klanten/Boeking</h4>
      <div class="medium-2  columns">Boeking voor:</div>
      <div class="medium-2  columns"><b>{{ $client->title . ' ' . $client->firstname . ' ' . $client->lastname }}</b></div>
      <form action="" method="get">
        <input type="hidden" name="_token" value="qbuQgVOYJ0tkLX6OPq5gYGJXqPG0Pke7VfuRXF53">
        <div class="medium-1  columns">Van:</div>
      <div class="medium-2  columns"><input name="dateFrom" value="{{ $dateFrom }}" type="date" class="datepicker" /></div>
        <div class="medium-1  columns">Tot:</div>
        <div class="medium-2  columns"><input name="dateTo" value="{{ $dateTo }}" type="date" class="datepicker" /></div>
        <div class="medium-2  columns"><input class="button" type="submit" value="ZOEK" /></div>
      </form>

      <table class="stack">
        <thead>
          <tr>
            <th># kamer</th>
            <th>Naam kamer</th>
            <th>Beschikbaarheid</th>
            <th>Actie</th>
          </tr>
        </thead>
        <tbody>
            @if($dateFrom && $dateTo)
                @foreach ($rooms as $room)
                    <tr>
                        <td>{{ $room->number }}</td>
                        <td>{{ $room->name }}</td>

                        @if (!in_array($room->id, $reserved_rooms))
                        <td>
                            <div class="callout success">
                               <h7>Beschikbaar</h7>
                            </div>
                        </td>
                        <td>
                        <form action="{{ route('reservations.save') }}" method="post">
                                @csrf
                                <input type="hidden" value="{{ $room->id }}" name="room">
                                <input type="hidden" value="{{ $client->id }}" name="client">
                                <input type="hidden" value="{{ $dateFrom }}" name="date_start">
                                <input type="hidden" value="{{ $dateTo }}" name="date_end">
                                <button type='submit' class="hollow button">
                                    Boek
                                </button>
                            </form>
                        </td>
                        @elseif(isset($reservation) && $reservation->room->id == $room->id)
                        <td>
                            <div class="callout warning">
                                <h7>Geboekt</h7>
                            </div>
                        </td>
                        <td>
                            <form action="{{ route('reservations.save') }}" method="post">
                                @csrf
                                <input type="hidden" value="{{ $reservation->id }}" name="reservation_id">
                                <input type="hidden" value="{{ $room->id }}" name="room">
                                <input type="hidden" value="{{ $dateFrom }}" name="date_start">
                                <input type="hidden" value="{{ $dateTo }}" name="date_end">
                                <button type='submit' class="hollow button">
                                    update boeking
                                </button>
                            </form>
                        </td>
                        @else
                        <td>
                            <div class="callout warning">
                                <h7>Bezet</h7>
                            </div>
                        </td>
                        <td>

                        </td>
                        @endif
                    </tr>
                @endforeach
            @endif
        </tbody>
      </table>
    </div>
  </div>
@endsection
