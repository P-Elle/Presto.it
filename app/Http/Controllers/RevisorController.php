<?php

namespace App\Http\Controllers;

use App\Mail\BecomeRevisor;
use App\Models\Announcement;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class RevisorController extends Controller
{
    // questo metodo visulazzerà tutti gli annunci da accettare e rifiutare
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

     // questo metodo gestisce l'invio della richiesta di lavoro come revisore
     public function becomeRevisor(){
        // invia all'admin la richiesta con i dati dell'utente loggato
        Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user()) );
        return view('announcements.become-revisor');
        //return redirect()->back()->with('message', 'Complimenti, hai richiesto di diventare revisore correttamente');
    }

     // questo metodo gestisce l'accettazione della richiesta di lavoro come revisore
     public function makeRevisor(User $user){
        //attiva il comando presto:makeUserRevisor qnd l'admin clicca sul link 
        //presente nell'email del richiedente per accettare la richiesta di lavoro
        //Ricorda che questo automatismo sar possibile grazie alla registrazione 
        //del relativo comando 
       Artisan::call('presto:makeUserRevisor', ["email"=>$user->email]);
       return view('revisor.make-revisor');
       //return redirect('/')->with('message', 'Complimenti! l\'utente è diventato revisore');
    }   

}
