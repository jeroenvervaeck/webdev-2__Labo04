@extends('layout')

@section('content')
  <div class="row">
    <div class="medium-12 large-12 columns">
      <h4>KLANTEN</h4>
    <div class="medium-2  columns"><a class="button hollow success" href="{{ route('clients.new') }}">VOEG KLANT TOE</a></div>



      <table class="stack">
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
                <tr>
                    <td>{{ $client->title }} . {{ $client->firstname . ' ' . $client->lastname }}</td>
                    <td>{{ $client->email }}</td>
                    <td>
                      <a class="hollow button" href="{{ route('clients.edit', $client->id) }}">BEWERK</a>
                      <a class="hollow button warning" href="{{ route('reservations.new', $client->id) }}">BOEK EEN KAMER</a>
                      <a class="hollow button warning" href="{{ route('clients.delete', $client->id) }}">VERWIJDER KLANT</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>


    </div>
  </div>
@endsection

