<?php

namespace App\Jobs;

use App\Models\Image;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class GoogleVisionSafeSearch implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    private $announcement_image_id;

    /**
     * Create a new job instance.
     */
    public function __construct($announcement_image_id)
    {
        $this->announcement_image_id = $announcement_image_id;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $i = Image::find($this->announcement_image_id);

        if(!$i){
            return;
        }

        //RECUPERO IL FILE EFFETTIVO CON PATH
        $image = file_get_contents(storage_path('app/public/' . $i->path));


        //IMPOSTARE LE VARIABILI D'AMBIENTE
        putenv('GOOGLE_APPLICATION_CREDENTIALS=' . base_path('2022-04-26-presto-livewire-user-story-7.json'));

        //APPLICHIAMO EFFETTIVAMENTE IL SEARCH DETECTION SULL'IMMAGINE IN QUESTIONE E CHIUDIAMO IL GOOGLE VISION
        $imageAnnotator = new ImageAnnotatorClient();
        $response = $imageAnnotator->safeSearchDetection($image);
        $imageAnnotator->close();

        //CONTIENE I VARI CAMPI CON I VALORI: UNKNOWN, VERY UNLIKELY, UNLIKELY, POSSIBLE, LIKELY, VERY LIKELY
        $safe = $response->getSafeSearchAnnotation();

        //SALVIAMO OGNI VALORI ALL'INTERNO DI VARIABILI
        $adult = $safe->getAdult();
        $medical = $safe->getMedical();
        $spoof = $safe->getSpoof();
        $violence = $safe->getViolence();
        $racy = $safe->getRacy();


        //UN SEMAFORO DA VISUALIZZARE
        //SOLO SE INSTALLIAMO IL PACCHETTO DI CUI SI PARLA NEL VIDEO
        $likelihoodName = [
            // 'text-secondary fas fa-circle', 'text-success fas fa-circle', 'text-success fas fa-circle', 'text-warning fas fa-circle', 'text-warning fas fa-circle', 'text-danger fas fa-circle'
            'text-secondary bi bi-emoji-neutral-fill', 'text-success bi bi-emoji-smile-fill', 'text-success bi bi-emoji-smile-fill', 'text-warning bi bi-emoji-frown-fill', 'text-warning bi bi-emoji-frown-fill', 'text-danger bi bi-emoji-frown-fill'

        ];

        //SALVIAMO LE ETICHETTE ALL'INTERNO DEI CAMPI
        $i->adult = $likelihoodName[$adult];
        $i->medical = $likelihoodName[$medical];
        $i->spoof = $likelihoodName[$spoof];
        $i->violence = $likelihoodName[$violence];
        $i->racy = $likelihoodName[$racy];

        $i->save();
    }
}
