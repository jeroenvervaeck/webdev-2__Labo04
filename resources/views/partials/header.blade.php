<!DOCTYPE html>
<html data-whatinput="keyboard" data-whatintent="keyboard" class=" whatinput-types-initial whatinput-types-keyboard">

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="UTF-8">
  <title>Chateau Meiland</title>
  <link rel="icon" type="image/x-icon" href="favicon.ico" />
  <link rel="stylesheet" href="{{ asset('css/foundation.css') }}">
  <meta class="foundation-mq">
  @yield('inline-style')
</head>

<body>

      <!-- Start Top Bar -->
      <div class="top-bar">
        <div class="row">
          <div class="top-bar-left">
            <ul class="dropdown menu" data-dropdown-menu="tckp8q-dropdown-menu" role="menubar">
            <li role="menuitem"><a href="{{ route('home') }}">Home</a></li>
              <li role="menuitem"><a href="{{ route('clients') }}">Klanten</a></li>
              <li role="menuitem"><a href="{{ route('reservations') }}">Reservaties</a></li>
              <li role="menuitem"><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
          </div>
          <div class="top-bar-right">
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: block;">
                    @csrf
                </form>
            </div>
          </div>
        </div>
      </div>
      <!-- End Top Bar -->

  <br>
