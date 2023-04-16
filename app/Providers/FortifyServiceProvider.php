<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use App\Models\User;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Fortify;
use Laravel\Fortify\Contracts\LoginResponse;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

        RateLimiter::for('login', function (Request $request) {
            $email = (string) $request->email;

            return Limit::perMinute(5)->by($email.$request->ip());
        });

        RateLimiter::for('two-factor', function (Request $request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });

        Fortify::loginView(function () {
        return view('auth.login');
        });
  
        Fortify::registerView(function () {
            return view('auth.register');
        });

        Fortify::verifyEmailView(function () {
            return view('auth.verify-email');
        });

        //definisce il metodo utilizzato per autenticare gli utenti all’interno dell’applicazione
        Fortify::authenticateUsing(function (Request $request) {
            //Viene verificato se l’utente ha selezionato l’opzione “Remember me” durante il login
            $remember = $request->filled('remember');
            //variabile che contiene i dati dell'utente
            $credentials = $request->only('email', 'password');
            //se le credenziali fornite sono corrette
            if (Auth::attempt($credentials, $remember)) {
                //l'autenticazione ha successo e viene rigenerata la sessione corrente
                $request->session()->regenerate();
        
                return Auth::user();
            }
            //se l’autenticazione fallisce, viene generata un’eccezione di validazione 
            //nel quale viene restituito un messaggio che indica che l’autenticazione ha fallito
            throw ValidationException::withMessages([
                Fortify::username() => __('auth.failed'),
            ]);
        });

    }
}