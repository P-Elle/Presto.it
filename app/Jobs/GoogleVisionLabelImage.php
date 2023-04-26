<?php

namespace App\Jobs;

use App\Models\Image;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;

class GoogleVisionLabelImage implements ShouldQueue
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

        //APPLICCHIAMO EFFETTIVAMENTE IL LABEL DETECTION  SULL'IMMAGINE 
        // (OVVERO DI TROVARE IL CONTENUTO DELL'IMMAGINE) E POI CHIUDIAMO RICHIEDENDO DI AVERE QUESTE ANNOTAZIONI
        $imageAnnotator = new ImageAnnotatorClient();
        $response = $imageAnnotator->labelDetection($image);
        $labels = $response->getLabelAnnotations();

        // SE LA LABELS ESISTE SALVIAMO ALL'INTERNO DELL'ARRAY LA RELATIVA DESCRIZIONE
        if ($labels) {
            $result = [];
            foreach ($labels as $label){
                $result[] = $label->getDescription();
            }

            //E SALVIAMO TUTTO NEL DB (vedi model image)
            $i->labels = $result;
            $i->save();
        }

        $imageAnnotator->close();

    }
}
