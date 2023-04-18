<?php

namespace App\Jobs;

use Spatie\Image\Image;
use Illuminate\Bus\Queueable;
use Spatie\Image\Manipulations;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Livewire\Commands\FileManipulationCommand;

class ResizeImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    //inserisco i nuovi attributi 
    private $w; //larghezza
    private $h; //altezza
    private $fileName; 
    private $path;
    /**
     * Create a new job instance.
     */
    public function __construct($filePath, $w, $h) 
    {
        //valorizziamo le nostre variabili
        $this->path = dirname($filePath);
        $this->fileName = basename($filePath);
        $this->w = dirname($w);
        $this->h = dirname($h);
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        //istanziamo le nostre variabili
        $w = $this->w;
        $h = $this->h;
        //indica il percorso da dove prendere l'immagine
        $srcPath = storage_path() . '/app/public/' . $this->path . '/' . $this->fileName;
        //indica il percorso in cui salvare l'immagine
        $destPath = storage_path() . '/app/public/' . $this->path . "/crop_{$w}x{$h}_" . $this->fileName;

        //croppiamo l'immagine (vedi doc Spatie)
        $croppedImage = Image::load('$srcPath')
                    ->crop(Manipulations::CROP_CENTER, $w, $h) //croppiamo l'immagine partendo dal centro 
                    ->save($destPath);//salviamo nel percorso definito prima
    }
    //cancellare la riga sotto il foreach che creava semplicemente il percorso dell'immagine salvata
    //creiamo una nuova cartella announcements con all'interno la cartella con l'id dell'annuncio
    //$newFileName = "announcements/{$this->announcement->id}";
    //e ogni immagine sarà ridimensionata e salvata nella relativa cartella
    //$newImage = $this->announcement->images()->create(['path'=>$image->store($newFileName, 'public')])

    // andiamo ad effettuare in asincrono il nostro job ovvero in background andrà a croppare l'immagine e salvarla
    // in announcements con l'id della relativa immagine
    //dispatch(new ResizeImage(newImage->path, 400, 400)) ricorda di importare la ResizeImage

    //successivamente andiamo a cancellare la cartella temporanea di livewire
    //File::deleteDirectory(storage_path ('/app/livewire-tmp'))