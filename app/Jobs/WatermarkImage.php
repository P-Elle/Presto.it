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

class WatermarkImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    //inserisco i nuovi attributi
    private $w;
    private $h;
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
        $this->w = $w;
        $this->h = $h;

    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        //istanziamo le nostre variabili
        $w = $this->w;//larghezza
        $h = $this->h;//altezza

        $srcPath = storage_path() . '/app/public/' . $this->path . "/crop_{$w}x{$h}_" . $this->fileName;
        //indica il percorso in cui salvare l'immagine
        $destPath = storage_path() . '/app/public/' . $this->path . "/watermark_image" . $this->fileName;

        $WaterImage = Image::load($srcPath)
                    ->watermark(base_path('resources/img/watermark.png'))
                    ->save($destPath);//salviamo nel percorso definito prima

    }
}
