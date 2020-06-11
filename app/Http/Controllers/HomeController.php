<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function getIndex() {
        $title = 'Chateau Meiland';
        $image = 'images/chateau.jpg';
        $content = '<p>Château Holtmühle in Tegelen is een uniek historisch kasteel uit de middeleeuwen waar u zich met recht de
        koning te rijk voelt. Rust en een luxueuze ambiance in een romantische omgeving zorgen dat u zich in stijl kunt
        laten verwennen</p>
        <p>Een nacht in één van onze 66 geweldig sfeervolle kamers voorzien van alle gemakken maken dat u zich meteen
        kasteelvrouw en -heer voelt.</p>';

        return view('pages.home', [
            'title' => $title,
            'image' => $image,
            'content' => $content
        ]);
    }
}
