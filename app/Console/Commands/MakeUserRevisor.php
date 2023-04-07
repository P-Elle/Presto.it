<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class MakeUserRevisor extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    //indichiamo come deve essere lanciato il comando inserendo anche email come parametro
     protected $signature = 'presto:makeUserRevisor {email}';

    /**
     * The console command description.
     *
     * @var string
     */
    //questo indica la descrizione del comando
     protected $description = 'Rendi un utente revisore';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        //catturiamo l’utente tramite l’email che ci è stata fornita
        $user = User::where('email', $this->argument('email'))->first();

        //se non lo troviamo lanciamo un errore
        if (!$user) {
            $this->error('Utente non trovato');
            return;
        }

        $user->is_revisor = true; //se lo troviamo cambiamo il campo inserito nella tabella da false a true
        $user->save(); // salviamo l'utente
        $this->info("L'utente {$user->name} ora è un revisore."); // comunichiamo allo stesso che adesso è un revisore
    }
}
