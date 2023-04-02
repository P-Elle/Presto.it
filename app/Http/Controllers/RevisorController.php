<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class RevisorController extends Controller
{
    // questo metodo visulazzerà tutti gli annunci da ccettare e rifiutare
    public function index(){
        
        /* nella variabile racchiudo tutti gli annunci che nella tabella announcement,
        in corrispondenza della colonna is_accepted hanno un valore null */
        $announcement_to_check = Announcement::where('is_accepted', null)->first();
        // e li mando sulla pagina revisor.index
        return view('revisor.index', compact('announcement_to_check'));
    }

     
    /* I 2 metodi gestiscono l'accettazione e il rifiuto dell'annuncio da parte del revisore.
    Attraverso la funzione setAccepted, impostata nel modello annuncio, in base al valore settato
    il revisore accetterà o rifiuterà l'annuncio */
    public function acceptAnnouncement(Announcement $announcement){
        // se il valore sarà true l'annuncio verrà accettato e stampato il relativo messaggio
        $announcement->setAccepted(true);
        return redirect()->back()->with('message', 'Complimenti, hai accettato l\'annuncio');
    }

    // questo metodo gestisce il rifiuto dell'annuncio
    public function rejectAnnouncement(Announcement $announcement){
        // se il valore sarà fale l'annuncio verrà rifiutato e stampato il relativo messaggio
        $announcement->setAccepted(false);
        return redirect()->back()->with('message', 'Complimenti, hai rifiutato l\'annuncio');
    }
}
