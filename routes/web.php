<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('homepage');
})->name("homepage");

Route::get('/servizi', function(){
$services = [
    ['id' => 1, 'type' => 'Recensioni', 'argument' => 'Movies', 'views' => 2987],
    ['id' => 3, 'type' => 'Live coding', 'argument' => 'Laravel', 'views' => 27895],
    ['id' => 2, 'type' => 'Tips', 'argument' => 'Gameplays', 'views' => 38547],
    ['id' => 4, 'type' => 'Teaching', 'argument' => 'Drawing Manga', 'views' => 225548],
];
    return view('servizi', ['servizi' => $services]);
})->name('servizi');

Route::get('/servizi/dettagli/{id}', function($id){
    $services = [
        ['id' => 1, 'type' => 'Recensioni', 'argument' => 'Movies', 'views' => 2987, 'descrizione'=>'lorem ipsum roba a casaccio ceh faccia capire che ci sia qualcosa in più rispetto alla card della pagina servizi in generale'],
        ['id' => 3, 'type' => 'Live coding', 'argument' => 'Laravel', 'views' => 27895, 'descrizione'=>'lorem ipsum roba a casaccio ceh faccia capire che ci sia qualcosa in più rispetto alla card della pagina servizi in generale'],
        ['id' => 2, 'type' => 'Tips', 'argument' => 'Gameplays', 'views' => 38547, 'descrizione'=>'lorem ipsum roba a casaccio ceh faccia capire che ci sia qualcosa in più rispetto alla card della pagina servizi in generale'],
        ['id' => 4, 'type' => 'Teaching', 'argument' => 'Drawing Manga', 'views' => 225548, 'descrizione'=>'lorem ipsum roba a casaccio ceh faccia capire che ci sia qualcosa in più rispetto alla card della pagina servizi in generale'],
    ];
   foreach($services as $service){
    if ($service['id'] == $id){
        return view('dettagli-servizi', ['servizio'=> $service]);
    }
   }
})->name('dettaglio-servizio');

Route::get('/chi-siamo', function(){
    $owners= [
        ['id' => 1, 'Socio' => 'Ciccio Paciccio', 'Contatti' => 'ciccio@gmail.com', 'Job' => 'recensioni'],
        ['id' => 3, 'Socio' => 'Tizio', 'Contatti' => 'tizio@hotmail.it', 'Job' => 'live coding'],
        ['id' => 2, 'Socio' => 'Caio', 'Contatti' => 'caio@live.it', 'Job' => 'gamplays'],
        ['id' => 4, 'Socio' => ' e Sempronio', 'Contatti' => 'esempronio@libero.it', 'Job' => 'mangaka'],
    ];
    return view("about", ['owners'=> $owners]);
})->name('about');

Route::get('/chi-siamo/dettagli/{id}', function($id){
    $owners= [
        ['id' => 1, 'Socio' => 'Ciccio Paciccio', 'Contatti' => 'ciccio@gmail.com', 'Job' => 'recensioni','descrizione'=>'lorem ipsum roba a casaccio ceh faccia capire che ci sia qualcosa in più rispetto alla card della pagina servizi in generale'],
        ['id' => 3, 'Socio' => 'Tizio', 'Contatti' => 'tizio@hotmail.it', 'Job' => 'live coding','descrizione'=>'lorem ipsum roba a casaccio ceh faccia capire che ci sia qualcosa in più rispetto alla card della pagina servizi in generale'],
        ['id' => 2, 'Socio' => 'Caio', 'Contatti' => 'caio@live.it', 'Job' => 'gamplays','descrizione'=>'lorem ipsum roba a casaccio ceh faccia capire che ci sia qualcosa in più rispetto alla card della pagina servizi in generale'],
        ['id' => 4, 'Socio' => ' e Sempronio', 'Contatti' => 'esempronio@libero.it', 'Job' => 'mangaka','descrizione'=>'lorem ipsum roba a casaccio ceh faccia capire che ci sia qualcosa in più rispetto alla card della pagina servizi in generale'],
    ];

    foreach($owners as $owner){
        if($owner['id'] == $id){
            return view("dettagli-about", ['owner' => $owner]);
        }
    }
})->name('dettagli-owner');

//"