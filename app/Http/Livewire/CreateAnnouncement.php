<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Jobs\ResizeImage;
use App\Models\Announcement;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CreateAnnouncement extends Component
{   
    use WithFileUploads;

    public $title;
    public $description;
    public $price;
    public $temporary_images;
    public $images = [];
    public $form_id;
    public $category;
    

    //regole di validazione
    protected $rules = [
        'title' => 'required|min:3|max:50',
        'description' => 'required|min:8',
        'category'=> 'required',
        'price' => 'required|numeric',
        'images.*' => 'image|max:1024',
        'temporary_images.*' => 'image|max:1024'
    ];

    //messaggi personalizzati di errore
    protected $messages = [
        'required' => 'Il campo :attribute è obbligatorio.',
        'min' => 'Il campo :attribute deve contenere almeno :min caratteri',
        'max' => 'Il campo :attribute può contenere al massimo :max caratteri',
        'numeric' => 'Il campo :attribute deve essere numerico',
        'temporary_images.required'=>'L\'immagine è richiesta',
        'temporary_images.*.image'=>'I file devono essere immagini.',
        'temporary_images.*max'=>'L\'immagine non può superare 1mb',
        'images.image' => 'L\'immagine deve essere un\'immagine',
        'images.max' => 'L\'immagine non può superare 1mb'
 
    ];

    public function updateImageOrder($orderedImages)
    {  
        // $this->temporary_images = collect($orderedImages)->map(function($id) {
        //     return collect($this->temporary_images)->where('id', (int) $id['value'])->first();
        // })->toArray();

        // return $this->temporary_images
        $this->images = collect($orderedImages)->pluck(('order'))->toArray();
        foreach($this->temporary_images as $image){
            $this->images[] = $image;
            // $image->store('images');
        }
        
    }

 


    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function updatedTemporaryImages()
    {
        if ($this->validate([
            'temporary_images.*'=>'image|max:1024',
        ])){
            foreach($this->temporary_images as $image){
                $this->images[] = $image;
                // $image->store('images');
            }

        }

    }

  

    public function removeImage($key)
    {
        if (in_array($key, array_keys($this->images))){
            unset($this->images[$key]);

        }

    }

    //salvatggio dell'annuncio all'interno del database
    public function store()
    {
        $this->validate();

        $category = Category::find($this->category);

        $announcement = $category->announcements()->create([
            'title'=>$this->title,
            'description'=>$this->description,
            'price'=>$this->price,
        ]);


        if(count($this->images)){
            foreach($this->images as $image){
                // $announcement->images()->create(['path'=>$image->store('images','public')]);

                //creiamo una nuova cartella announcements con all'interno la cartella con l'id dell'annuncio
                $newFileName = "announcements/{$announcement->id}";
                //e ogni immagine sarà ridimensionata e salvata nella relativa cartella
                $newImage = $announcement->images()->create(['path'=>$image->store($newFileName, 'public')]);

                // andiamo ad effettuare in asincrono il nostro job ovvero in background andrà a croppare l'immagine e salvarla
                // in announcements con l'id della relativa immagine
                
                dispatch(new ResizeImage($newImage->path, 400, 400));
            }

            //successivamente andiamo a cancellare la cartella temporanea di livewire
            File::deleteDirectory(storage_path ('/app/livewire-tmp'));
        }

        Auth::user()->announcements()->save($announcement);

        session()->flash('message', 'Annuncio inserito con successo.');

        $this->cleanForm();
    }


    //pulire il form dopo il salvataggio dell'annuncio
    public function cleanForm(){
        $this->title = '';
        $this->description = '';
        $this->price = '';
        $this->category = '';
        $this->images = [];
        $this->temporary_images = [];
    }

    //renderizzazione della view
    public function render()
    {
        return view('livewire.create-announcement');
    }
}
